@extends('layouts.app')

@section('content')
           <div class="content">
                <div class="row">
                    <h1>User Deletion Id: {{$user->id}}</h1>
                </div>
                <div>
                    <a class="btn btn-sm btn-dark" href="/admin_users">Back</a>
                </div><p><br>
                <div>
                If you agree, push here: 
                <form action="/admin_users/{{$user->id}}" method="POST">
                        @csrf
                        @method('delete')
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
 @endsection
