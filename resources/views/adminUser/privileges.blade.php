@extends('layouts.app')

@section('content')
           <div class="content">
                <div class="row">
                    <h1>User Id: <!-- {{$user->id}} --></h1>
                </div>
                <div>
                    <a class="btn btn-dark" href="/admin_users">Back</a>
                </div>
            <!-- </div>
            <div class="row">
                <div class="col">
                   
                 <!--    <form action="/admin_users/{{$user->id}}" method="get">
                    @csrf
                
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
                    </div> --> -->
                    <button class="btn btn-dark" type="submit">Edit</button> 
                   </form>             
                </div> -->
            </div>
 @endsection
