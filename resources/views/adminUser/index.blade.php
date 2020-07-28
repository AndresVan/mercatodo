@extends('layouts.app') @section('content')
<div class="content">
    <div class="row">
        <h1>Users</h1>
    </div>
    <div class="row">
        <a class="btn btn-sm btn-dark" href="/manage">Back</a>
    </div>
    <tr> </tr>
    <table class="table">
        <tr>
            <td>
                <strong>Id</strong>
            </td>
            <td>
                <strong>Name</strong>
            </td>
            <td>
                <strong>Privileges</strong>
            </td>
            <td>
                <strong>Email</strong>
            </td>
            <td>
                <strong>Actions</strong>
            </td>
        </tr>
        @foreach($usuarios as $admin_User)
        <tr>
            <td>{{$admin_User->id}}</td>
            <td>
                <a href="/admin_users/{{$admin_User->id}}">{{$admin_User->name}}</a>
            </td>
            @if($admin_User->role==1)
            <td>Admin</td>
            @else
            <td>User</td>
            @endif
            <td>{{$admin_User->email}}</td>
            <td>
                <a class="btn btn-warning" href="/admin_users/{{$admin_User->id}}/edit">Edit</a>
            </td>
            <td>
                <a class="btn btn-primary" href="/admin_users/{{$admin_User->id}}/privileges">Enable</a>
            </td>
            <td>
                <a class="btn btn-danger" href="/admin_users/{{$admin_User->id}}/confirmDelete">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
@endsection