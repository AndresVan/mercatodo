<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminUser;
use Illuminate\View\View;

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
    public function index(): View
    {   
        $usuarios = AdminUser::paginate(8);
        return view('/adminUser/index', [
            'usuarios'=> $usuarios
        ]);
    }
  
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //
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
    public function show(int $id): View
    {
        $user = AdminUser::findOrFail($id);

        return view('/adminUser/show', [
            'user'=>$user
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
        $user = AdminUser::findOrFail($id);

        return view('adminUser.edit', [
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
    public function update(Request $request, int $id)
    {
        $validaData = $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|max:100'
        ]);

        $user = AdminUser::findOrFail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
    
        $user->save();

        return redirect('/admin_users');
    }

    public function confirmDelete(int $id): View
    {
        $user = AdminUser::findOrFail($id);

        return view('adminUser/confirmDelete', [
            'user' => $user
        ]);
    }

    /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */

    public function destroy(int $id)
    {
        $user = AdminUser::findOrFail($id);
        $user->delete();
        return redirect('admin_users');
    }
}
