@extends('layouts.base')

@section('content')
           <div class="content">
                <div class="row">
                    <h1>User Editing Id: {{$user->id}}</h1>
                    <ul><td><a class="btn btn-dark" href="/admin_users">Back</a></td></ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form action="/admin_users/{{$user->id}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Type a name">
                    </div> 
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Type an email">
                    </div>
                   <!--  <div class="form-group">
                        <label for="privileges">Privileges:</label>
                        <select name="privileges" id="privileges" disabled="disabled">
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                        if (value=="1")
                        privileges="Admin"
                        else
                        privileges="User"
                        ndif
                        </select>
                    </div> -->
                    <button class="btn btn-dark" type="submit">Edit</button> 
                    </form>             
                </div>
            </div>
 @endsection
