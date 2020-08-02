@extends ('layouts.app') @section ('content')
<div class="content">
    <div class="row">
        <h2>Product Catalog</h2>
    </div>
    <table border="0" width="700" align="center" class="table">
        <tr align="middle">
            <div class="products">
                <div class="row">
                    @foreach($product as $catalog_product)
                    <div class="col-xs-10 col-sm-6 col-md-4">
                        <div class="card">
                            <img src="./storage/app/public/uploads/{{$catalog_product->photo}}" alt="Product Image" border="4" width="500" height="250">
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
            </div>
    </table>
</div>
@endsection