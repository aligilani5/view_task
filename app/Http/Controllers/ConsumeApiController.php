<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;

class ConsumeApiController extends Controller
{
    //getCategoriesWithProductsPrice
    public function getCategoriesWithProductsPrice(){

        $response = Http::get('http://localhost:8000/api/getAllCategoriesWithProductsPrice')
        ->json();
        
        return view('categories_products_price', ['response'=>$response]);
    }


    //getCategoriesWithNewListedProducts
    public function getCategoriesWithNewListedProducts(){
        $response = Http::get('http://localhost:8000/api/getCategoriesWithNewListedProducts')
        ->json();

        return view('top_categories_with_products', ['response'=>$response]);
    }

    //getAllCategoriesWithAtleastProduct
    public function getAllCategoriesWithAtleastProduct() {
        $response = Http::get('http://localhost:8000/api/getAllCategoriesWithAtleastProduct')
        ->json();

        return view('categories_atleast_product', ['response'=>$response]);
    }
}
