@extends('layouts.app')

@section('content')
           <div class="content">
                <div class="row">
                    <h1>Users</h1>
                </div>
                <div>
                    <a class="btn btn-dark" href="/">Back</a>
                </div>
                    <table class="table">
                    @foreach($usuarios as $admin_User)
                        <tr>
                            <td>{{$admin_User->id}}</td>
                            <td><a href="/admin_users/{{$admin_User->id}}">{{$admin_User->name}}</a></td>
                            <td>{{$admin_User->privileges}}</td>
                            <td>{{$admin_User->email}}</td>
                            <td><a class="btn btn-warning" href="/admin_users/{{$admin_User->id}}/edit">Edit</a></td>
                            <td><a class="btn btn-primary" href="/admin_users/{{$admin_User->id}}/privileges">Enable</a></td>
                            <td><a class="btn btn-danger" href="/admin_users/{{$admin_User->id}}/confirmDelete">Delete</a></td>                   
                        </tr>
                    @endforeach     
                    </table>
                </div>
            </div>
 @endsection
