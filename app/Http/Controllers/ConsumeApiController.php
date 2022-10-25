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
        ->collect();
        // dd($response);
        // return $response;
        return view('welcome', ['response'=>$response]);
    }
}
