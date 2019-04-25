@extends('layouts.app')

@section('content')
    <div class="jumbotron text-left">
        <div class="container">
        <h1>{{$title}}</h1>
        <p>Enter your location and the number of members in your group, then click 'Search'.</p>
        {!! Form::open(['url' => '/results']) !!}
	        <div class="form-group">
                {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Location'])}}
                <br/>
                {{Form::label('groupsize','Number of people')}}
                {{Form::select('groupsize', ['1' => '1 Person', '2' => '2 People', '3' => '3 People', '4' => '4 People', '5' => '5 People', '6' => '6 People', '7' => '7 People', '8' => '8 People', '9' => '9 People', '10' => '10 People'], null)}}
                <div class="container text-right">
                    <button type="submit" class="btn btn-success btn-lg">
                        {{ __('Search') }}
                    </button>
                </div>
        {!! Form::close() !!}
    </div>
    </div>


@endsection