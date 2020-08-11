<?php

namespace App\Http\Controllers;

use App\AdminProduct;
use Illuminate\Contracts\View\View as ViewView;
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
    public function indexProduct(Request $request): \Illuminate\Contracts\Support\Renderable
    {
        $nameproduct = $request->get('searchProduct', '');
              
        $product = AdminProduct::products($nameproduct)->paginate(6);       //products viene del Scope usado en el modelo AdminProduct
       
        return view('productsCatalog/products', [
            'product'=> $product
        ]);
    }

    public function show(int $id): ViewView
    {
        $product = AdminProduct::findOrFail($id);

        return View('productsCatalog.show_products', [
            'product'=>$product
        ]);
    }
}
