<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use Illuminate\Http\JsonResponse;

class ReviewController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }


    
    public function index()
    {
        // dd(auth()->user());

        // return $this->response(auth()->user()->reviews()->paginate(10));

        return auth()->user()->reviews()->with('product')->paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReviewRequest $request)
    {
        //
    }


    public function show(Review $review)
    {
        //
    }




    public function update(UpdateReviewRequest $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
