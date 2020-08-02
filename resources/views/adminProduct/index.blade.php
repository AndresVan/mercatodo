@extends('layouts.app') @section('content')
<div class="content">
    <div class="row">
        <h1>Products</h1>
    </div>
    <div class="row">
        <a class="btn btn-sm btn-dark" href="/manage">Back</a>

    </div>
    <tr>
        <br>
        <td>
            <a class="btn btn-outline-success" href="/admin_products/create">New Product</a>
        </td>
        </br>
    </tr>
    <table class="table">
        <tr>
            <td>
                <strong>Id</strong>
            </td>
            <td>
                <strong>Product Name</strong>
            </td>
            <td>
                <strong>Price</strong>
            </td>
            <td>
                <strong>Action</strong>
            </td>
        </tr>
        @if(count ($productos)) @foreach($productos as $admin_Product)
        <tr>
            <td>{{$admin_Product->id}}</td>
            <td>
                <a href="/admin_products/{{$admin_Product->id}}">{{$admin_Product->product_name}}</a>
            </td>
            <td>{{$admin_Product->price}}</td>
            <td>
                <a class="btn btn-warning" href="/admin_products/{{$admin_Product->id}}/edit">Edit</a>
            </td>
            <td>
                <a class="btn btn-primary" href="/admin_products/{{$admin_Product->id}}/privileges">Enable</a>
            </td>
            <td>
                <a class="btn btn-danger" href="/admin_products/{{$admin_Product->id}}/confirmDelete">Delete</a>
            </td>
        </tr>
        @endforeach @else
        <td>No hay productos para mostrar</td>
        @endif
    </table>
    <div class="card-footer">
                    {{$productos->links()}}
                </div>
</div>
</div>
@endsection