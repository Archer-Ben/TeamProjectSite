@extends('layouts.app')



@section('content')
    <div class="container border">
        <h1 class = "display-4">{{$title}}</h1>
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
            {!! Form::open(['action' => 'RestaurantsController@create', 'method' => 'get']) !!}
                {{Form::submit('Create restaurant', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    @else
        <div class="alert alert-light" role="alert">
            <h3>Delete restaurant</h3>
            <p>If you wish to permanently remove your restaurant from our service, click the delete button below. This is not a reversible action.</p>
            {!! Form::open(['action' => ['RestaurantsController@destroy', $user->id], 'method' => 'POST']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete my restaurant', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        </div>

    @endif
@endsection