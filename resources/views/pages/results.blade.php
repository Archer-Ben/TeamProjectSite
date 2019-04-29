@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <!-- Testing -->

    <div class="panel">
        <div class="panel-header">
            <p>Your search for tables of {{$groupsize}} near {{$location}} produced {{count($restaurants)}} results:</p>
        </div>
        <div class="panel-body">
        @if(count($restaurants) > 0)
            @foreach($restaurants as $restaurant)
                <div class="card card-body">
                    <div class="row">
                        <div class="col col-6">
                            <h4>{{$restaurant->name}}</h4>
                            <p>{{$restaurant->description}}</p>
                        </div>
                        <div class="col">
                                    <p>{{$restaurant->location}}</p>
                        </div>
                        <div class="col">
                            {!! Form::open(['action' => 'BookingsController@store', 'method' => 'post']) !!}
                                {{Form::hidden('restaurant_id', $restaurant->id)}}
                                {{Form::submit('Create reservation', ['class' => 'btn btn-primary btn-sm'])}}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>We couldn't find any available tables matching that search.</p>
        @endif

@endsection