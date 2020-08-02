<?php

namespace App\Http\Controllers;

use App\AdminProduct;
use Illuminate\Http\Request;

class HomeProductsController extends Controller
{
    /**
      * Create a new controller instance.
      *
      * @return void
      */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexProduct()
    {
        $product = AdminProduct::all();
        return view('productsCatalog/products', [
            'product'=> $product
        ]);
    }

    public function show($id)
    {
        $product = AdminProduct::findOrFail($id);

        return view('productsCatalog.show_products', [
            'product'=>$product
        ]);
    }
}
