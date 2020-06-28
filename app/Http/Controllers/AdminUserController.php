<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminUser;

class AdminUserController extends Controller
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
    public function index()
    {
        /* return AdminUser::all(); */
        return view('/adminUser/index',[
            'usuarios'=> AdminUser::all()
        ]);
    }
  
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminUser.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = AdminUser::findOrFail($id);
        return view('/adminUser/show',[
            'user'=>$user
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
        $user = AdminUser::findOrFail($id);
        return view('adminUser.edit' , [
            'user'=> $user
        ]);
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
        $validaData = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|min:14'
        ]);

        $user = AdminUser::findOrFail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
    /*     $user->privileges = $request->get('privileges'); */
        $user->save();

        return redirect('/admin_users');
    }

     public function confirmDelete($id)
     {
        $user = AdminUser::findOrFail($id);
        return view('adminUser/confirmDelete',[
            'user' => $user
        ]);
     }

/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $user = AdminUser::findOrFail($id);
        $user->delete();
        return redirect('admin_users');
    }

    public function privileges($id)
    {
        $user = AdminUser::where('privileges',0)->get($id);
        return view('adminUser/privileges', [
            'user'=> $user
        ]);
    }
}
