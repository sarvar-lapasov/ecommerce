<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class FavoriteController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return auth()->user()->favorites()->paginate(10);
    }

    public function store(Request $request):JsonResponse
    {
        if((auth()->user()->hasFavorites($request->product_id))){

        return $this->error (
             'Already added this product to favorite');
        }


        auth()->user()->favorites()->attach($request->product_id);

        return $this->success('added product to favorite');
    }

    /*
     * TODO refactor responses, make standard format
     * */
    public function destroy($favorite_id):JsonResponse
    {
        if(auth()->user()->hasFavorites($favorite_id)){
           auth()->user()->favorites()->detach($favorite_id);

           return $this->success('delete product in favorite');
        }


        return $this->error('Favorite does not exist in this user');
    }
}
