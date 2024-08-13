<?php

namespace App\Http\Controllers;

use App\Models\DeliveryMethod;
use App\Models\Order;
use App\Models\Stock;
use App\Models\Product;
use App\Models\UserAddress;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;


class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->authorizeResource(Order::class, 'order');
    }

    public function index()
    {
        if(request()->has('status_id'))
        {
            return $this->response(OrderResource::collection(
                auth()->user()->orders()->where('status_id', request('status_id'))->paginate(10)
            )); 
        }

        return $this->response(OrderResource::collection(
            auth()->user()->orders()->paginate(10)
        ));


    }

 
    public function store(StoreOrderRequest $request): JsonResponse
    {

        $sum = 0;
        // $products = Product::query()->limit(2)->get();
        $products = [];
        $notFoundProducts = [];
        $address = UserAddress::find($request->address_id);
        $deliveryMethod = DeliveryMethod::findOrFail($request->delivery_method_id);

        // dd($request['products']);


        foreach ($request['products'] as $requestProduct) {
            $product = Product::with('stocks')->findOrFail($requestProduct['product_id']);
            $product->quantity = $requestProduct['quantity'];

            if(
                $product->stocks->find($requestProduct['stock_id']) && 
                $product->stocks()->find($requestProduct['stock_id'])->quantity >= $product['quantity']
            ) {

                $productWithStock = $product->withStock($requestProduct['stock_id']);
                $productResource = (new ProductResource($productWithStock))->resolve();


                $sum += $productResource['discounted_price']  ?? $productResource['price'];
                $sum += $productWithStock->stocks[0]->added_price;
                $products[] = $productResource;
                
            } else {
                $requestProduct['we_have'] = $product->stocks()->find($requestProduct['stock_id'])->quantity;
                $notFoundProducts[] = $requestProduct;
            }
            
            // dd($products);

            
        }

        
        if ($notFoundProducts === [] && $products !== [] && $sum !== 0) {

            $sum += $deliveryMethod->sum;


            $order = auth()->user()->orders()->create([
                'comment' => $request->comment,
                'delivery_method_id' => $request->delivery_method_id,
                'payment_type_id' => $request->payment_type_id,
                'sum' => $sum,
                'status_id' => in_array($request['payment_type_id'],[1, 2]) ? 1 : 10,
                'address' => $address,
                'products' => $products,
            ]);
    
      
            if ($order) {
    
                foreach ($products as $product) {
                    // dd($product['inventory'][0]->id);
                    // $stock = Product::with('stocks')->find($product['id'])->stocks()->find($product['inventory'][0]['id']);
                    $stock = Stock::find($product['inventory'][0]['id']);
                    // dd($stock);
                    $stock->quantity -= $product['order_quantity'];
                    $stock->save();
                }
    
            }

            return $this->success('order created', [$order]);

        } else {

            return $this->error(
                'some products not found or does not have in inventory',
                ['not_found_products' => $notFoundProducts]
            );

        }

        // return 'something went wrong, cant create order';


    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order): JsonResponse
    {
        return $this->response(new OrderResource($order)); 
    }

 
    public function edit(Order $order)
    {
        
    }

    
    public function update(UpdateOrderRequest $request, Order $order)
    {
        
    }


    public function destroy(Order $order)
    {
        $order->delete();
        return 1;
    }
}
                         