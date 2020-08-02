@extends('layouts.app') @section('content')
<div class="content">
    <div class="row">
        <h3>Product {{$product->product_name}} detail</h3>
    </div>
    <div class="row">
        <a class="btn btn-sm btn-dark" href="/products">Back</a>
    </div>
</div>
<p>
    <div>
        <h5>
            <p>Name:
                <br>{{$product->product_name}}</br>
            </p>
        </h5>
    </div>
</p>
<div>
    <h5>
        <p>Price:
            <br>{{$product->price}}</br>
        </p>
    </h5>
</div>
</p>
<div>
    <h5>
        <p>Available stock:
            <br>{{$product->amount}}</br>
        </p>
    </h5>
</div>
</p>
<div>
    <h5>
        <p>Description:
            <br>{{$product->description}}</br>
        </p>
    </h5>
</div>
<div>
    <h5>
        <p>Photo:
            <br>{{$product->photo}}</br>
        </p>
    </h5>
</div>
@endsection