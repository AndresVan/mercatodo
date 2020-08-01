@extends('layouts.app')

@section('content')
           <div class="content">
                <div class="row">
                    <h3>Delete product {{$product->product_name}} ?</h3>
                </div>
                <div class="row">
                    <a class="btn btn-sm btn-dark" href="/admin_products">Back</a>
                </div><p><br>
                <div>
                If you agree, push here: 
                <form action="/admin_products/{{$product->id}}" method="POST">
                        @csrf
                        @method('delete')
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
 @endsection
