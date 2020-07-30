<?php

namespace App\Http\Controllers;

use App\AdminProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $product = AdminProduct::all();
        return view('adminProduct/index', [
            'productos' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('adminProduct.create');
        /* $product = AdminProduct::all();
        return view('adminProduct.create', [
            'product' => $product 
        ]); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate(
            [
                'product_name' => 'required|min:3',
                'price' => 'required|min:3',
                'amount' => 'required|max:3',
                'description' => 'required|min:3',
            ],[
                'product_name.required' => 'El campo no puede estar vacío',
                'product_name.min' => 'El campo debe contener al menos 3 caracteres'
            ]
            );

        $product = new AdminProduct();
        $product->product_name = $request->get('product_name');
        $product->price = $request->get('price');
        $product->amount = $request->get('amount');
        $product->photo = $request->get('photo');
        $product->description = $request->get('description');
        $product->save();
        
        return redirect('admin_products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = AdminProduct::findOrFail($id);

        return view('/adminProduct/show', [
            'product'=>$product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $product = AdminProduct::findOrFail($id);
        $product -> delete();

        return back();
    }
}
