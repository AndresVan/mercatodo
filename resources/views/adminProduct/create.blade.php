@extends('layouts.app') @section('content')
<div class="content">
    <div class="row">
        <h1>New Product</h1>
    </div>
    <div class="row">
        <a class="btn btn-sm btn-dark" href="/admin_products">Back</a>
    </div>
    <div class="row">
        <div class="col">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="/admin_products" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Type a name for the product" value="{{old('product_name')}}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="price" name="price" placeholder="Type a price" value="{{old('price')}}">
                </div>
                <div class="form-group">
                    <input id="amount" class="form-control" type="text" name="amount" placeholder="Amount" value="{{old('amount')}}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input id="description" class="form-control" type="text" name="description">
                </div>
            
                <button class="btn btn-warning" type="submit">Add</button>
            </form>
        </div>
    </div>
    @endsection