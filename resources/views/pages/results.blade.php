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
                <div class="card">
                    <div class="col col-"
                    <h4>{{$restaurant->name}}</h4>
                </div>
            @endforeach
        @else
            <p>We couldn't find any available tables matching that search.</p>
        @endif

@endsection