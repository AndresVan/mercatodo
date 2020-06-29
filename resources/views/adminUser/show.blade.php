@extends('layouts.app')

@section('content')
           <div class="content">
                <div class="row">
                    <h1>User Information Id: {{$user->id}}</h1>
                </div>
                <div>
                    <a class="btn btn-sm btn-dark" href="/admin_users">Back</a>
                </div>
            </div><p>
            <div>
                <h5>
                <p>Name:<br>{{$user->name}}</br></p>
                </h5>
            </div></p>
            <div>
                <h5>
                <p>Cédula:<br>{{$user->cedula}}</br></p>
                </h5>
            </div></p>
            <div>
                <h5>
                <p>E-mail:<br>{{$user->email}}</br></p>
                </h5>
            </div></p><div>
                <h5>
                <p>Miembro desde:<br>{{$user->created_at}}</br></p>
                </h5>
            </div></p>
 @endsection
