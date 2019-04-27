@extends('layouts.app')



@section('content')
    <div class="container border">
        <h1>{{$title}}</h1>
        <p>User ID: {{$user->id}}</p>
        <p>Name: {{$user->name}}</p>
        <p>Email: {{$user->email}}</p>
    </div>
    <hr>
    @if($user->owns_restaurant == false)
    <div class="alert alert-light" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h3>Own a restaurant?</h3>
        <p>Add your restaurant to our service and allow customers to see your available tables!</p>
        <a type="button" class="btn btn-primary" href="/newrestaurant" alt="Create restaurant">Create restaurant</a>
    </div>
    @endif
@endsection