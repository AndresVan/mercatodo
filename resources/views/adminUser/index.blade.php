@extends('layouts.base')

@section('content')
           <div class="content">
                <div class="row">
                    <h1>Users</h1>
                    <ul><td><a class="btn btn-dark" href="/">Back</a></td></ul>
                    <table class="table">
                    @foreach($usuarios as $admin_User)
                        <tr>
                            <td>{{$admin_User->id}}</td>
                            <td>{{$admin_User->name}}</td>
                            <td>{{$admin_User->privileges}}</td>
                            <td>{{$admin_User->email}}</td>
                            <td><a class="btn btn-primary" href="/admin_users/{{$admin_User->id}}/edit">Edit</a></td>
                            <td><a class="btn btn-primary" href="/admin_users/create">Create</a></td>
                            <td><a class="btn btn-primary" href="/admin_users/update">Update</a></td>
                            <td><a class="btn btn-primary" href="/admin_users/{{$admin_User->id}}/show">Mostrar</a></td>                   
                        </tr>
                    @endforeach     
                    </table>
                </div>
            </div>
 @endsection
