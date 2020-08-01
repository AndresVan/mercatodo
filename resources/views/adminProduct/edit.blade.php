@extends('layouts.app') @section('content')
<div class="content">
    <div class="row">
        <h1>Product Editing Id: {{$product->id}}</h1>
    </div>
    <div class="row">
        <a class="btn btn-sm  btn-dark" href="/admin_products">Back</a>
    </div>
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
        <form action="/admin_products/{{$product->id}}" method="post">
            @csrf @method('put')
            <div class="form-group">
                <label for="product_name">Name:</label>
                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Type a product name" value="{{old('product_name', $product->product_name)}}">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Type a price" value="{{old('price', $product->price)}}">
                </div>
                <div class="form-group">
                <label for="amount">Amount:</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Type a amount" value="{{old('amount', $product->amount)}}">
                </div>
                <div class="form-group">
                <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Type a description" value="{{old('description', $product->description)}}">
                </div>
                <div class="form-group">
                <label for="image">Image:</label>
                    <input type="file" class="form-control" id="image" name="image" placeholder="Type a image" value="{{old('image', $product->image)}}">
                </div>
            <button class="btn btn-warning" type="submit">Edit</button>
        </form>
    </div>
</div>
@endsection