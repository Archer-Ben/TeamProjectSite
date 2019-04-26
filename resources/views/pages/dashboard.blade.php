@extends('layouts.app')



@section('content')
    <h1>{{$title}}</h1>
    <form action="{{ URL::route('createRestaurant', array('user_id' => {{ Auth::user()->id }}) }}" method="post">
    
    </form>
@endsection