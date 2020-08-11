<?php

namespace App\Http\Controllers;

use App\AdminProduct;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $product = AdminProduct::paginate(10);
        return view('adminProduct/index', [
            'productos' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return View('adminProduct.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validData = $request->validate(
            [
                'product_name' => 'required|min:3',
                'price' => 'required|min:3',
                'amount' => 'required|max:3',
                'description' => 'required|min:3',
            ],
            [
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
       
        if ($request->hasFile('photo')) {
            $product->photo = $request->file('photo')->store('uploads', 'public');
        }
          
        $product->save();

        return redirect('admin_products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id): View
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
    public function edit(int $id): View
    {
        $product = AdminProduct::findOrFail($id);
        return View('/adminProduct/edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id): \Illuminate\Http\RedirectResponse
    {
        $validData = $request->validate(
            [
                'product_name' => 'required|min:3',
                'price' => 'required|min:3',
                'amount' => 'required|max:3',
                'description' => 'required|min:3',
            ],
            [
                'product_name.required' => 'El campo no puede estar vacío',
                'product_name.min' => 'El campo debe contener al menos 3 caracteres'
            ]
        );

        $product = AdminProduct::findOrFail($id);
        $product -> product_name = $request->get('product_name');
        $product -> price = $request ->get('price');
        $product -> amount = $request ->get('amount');
        $product -> photo = $request ->get('photo');
        $product -> description =$request->get('description');

        if ($request->hasFile('photo')) {
            $product-> photo = $request->file('photo')->store('uploads', 'public');
        }

        $product -> save();

        return redirect('/admin_products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirmDelete(int $id):View
    {
        $product = AdminProduct::findOrFail($id);
        return View('adminProduct.confirmDelete', [
            'product' => $product
        ]);
    }
    /**
     *
     */
    public function destroy(int $id):  \Illuminate\Http\RedirectResponse
    {
        $product = AdminProduct::findOrFail($id);
        $product -> delete();

        return redirect('admin_products');
    }
}
