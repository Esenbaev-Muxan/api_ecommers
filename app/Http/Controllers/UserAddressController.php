<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use App\Http\Requests\StoreUserAddressRequest;  
use App\Http\Requests\UpdateUserAddressRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
  
    public function index(Request $request): JsonResponse
    {

        $address = auth()->user()->addresses()->create($request->toArray());

        return $this->success('shipping address created', $address);
        // auth()->user()->addresses;
    }


    public function create()
    {
        
    }

    
    public function store(StoreUserAddressRequest $request)
    {
        // dd($request->toArray());
        // UserAddress::create($request->toArray());


        $address = auth()->user()->addresses()->create($request->toArray());

        return $this->success('shipping address created', $address);
    }

    public function show(UserAddress $userAddress)
    {
        //
    }




    public function update(UpdateUserAddressRequest $request, UserAddress $userAddress)
    {
        //
    }


    public function destroy(UserAddress $userAddress)
    {
        //
    }
}
