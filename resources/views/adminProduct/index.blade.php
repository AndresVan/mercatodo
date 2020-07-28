@extends('layouts.app') @section('content')
<div class="content">
    <div class="row">
        <h1>Products</h1>
    </div>
    <div class="row">
        <a class="btn btn-sm btn-dark" href="/manage">Back</a>
        
    </div>
    <tr><br>
            <td><a class="btn btn-outline-success" href="/admin_products/create">New Product</a></td>
        </br> </tr>
    <table class="table">
        <tr>
            <td>
                <strong>Id</strong>
            </td>
            <td>
                <strong>Image</strong>
            </td>
            <td>
                <strong>Product Name</strong>
            </td>
            <td>
                <strong>Price</strong>
            </td>
            <td>
                <strong>Amount</strong>
            </td>
            <td>
                <strong>Description</strong>
            </td>
        </tr>
        @foreach($productos as $admin_Product)
        <tr>
            <td>{{$admin_Product->id}}</td>
            <td>
                <a href="/admin_users/{{$admin_User->id}}">{{$admin_User->name}}</a>
            </td>
            @if($admin_Product->privileges==1)
            <td>Admin</td>
            @else
            <td>User</td>
            @endif
            <td>{{$admin_Product->email}}</td>
            <td>
                <a class="btn btn-warning" href="/admin_users/{{$admin_User->id}}/edit">Edit</a>
            </td>
            <td>
                <a class="btn btn-primary" href="/admin_users/{{$admin_User->id}}/privileges">Enable</a>
            </td>
            <td>
                <a class="btn btn-danger" href="/admin_users/{{$admin_User->id}}/confirmDelete">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
@endsection