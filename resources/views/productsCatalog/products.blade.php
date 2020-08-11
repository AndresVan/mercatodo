@extends ('layouts.app') @section ('content')
<div class="content">
    <div class="row">
        <h2>
            <a href="products">Product Catalog</a>
        </h2>
    </div>

    <nav class="navbar navbar-light bg-light ">
        <form class="form-inline">
            <input name="searchProduct" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>


    <table border="0" width="700" align="center" class="table">
        <tr align="middle">
            <div class="products">
                <div class="row">
                    @foreach($product as $catalog_product)
                    <div class="col-xs-10 col-sm-6 col-md-4">
                        <div class="card">
                            <img src="{{asset('uploads/'.$catalog_product->photo)}}" alt="Product Image {{$catalog_product->photo}}" border="4" width="350"
                                height="250">
                            <a href="/products/{{$catalog_product->id}}/show">
                                <h5>{{$catalog_product->product_name}}</h5>
                            </a>
                            <p>${{$catalog_product->price}}</p>
                            <p>
                                <button class="btn btn-primary"> I want it!</div>
                        </p>
                    </div>
                    @endforeach
                </div>
                <div class="card-footer">
                    {{$product->links()}}
                </div>
            </div>
    </table>
</div>
@endsection