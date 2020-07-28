@extends('layouts.app') @section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <h2>Manage</h2>
            <div>
                <a class="btn btn-success btn-outline-dark" href='http://127.0.0.1:8000/admin_users'>Users</a>
                <a class="btn btn-success btn-outline-dark" href='http://127.0.0.1:8000/admin_products'>Products</a>
            </div>
        </div>
        <div class="links">
            <a href="https://www.placetopay.com/web/">PlaceToPay</a>
            <a href="https://www.evertecinc.com/">Evertec</a>
            <a href="https://fondosumanti.com/">Sumanti</a>
        </div>
        <p>
            <h6>Aliados Patrocinadores</h6>
        </p>
    </div>
</div>
@endsection