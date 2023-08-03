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
        auth()->user()->favorites()->attach($request->product_id);

        return response()->json([
            'success' => true,
        ]);
    }

    /*
     * TODO refactor responses, make standard format
     * */
    public function destroy($favorite_id):JsonResponse
    {
        if(auth()->user()->hasFavorites($favorite_id)){
           auth()->user()->favorites()->detach($favorite_id);

           return response()->json(['success' => true]);
        }


        return response()->json(['success' => false, 'message' => 'Favorite does not exist in this user']);
    }
}
