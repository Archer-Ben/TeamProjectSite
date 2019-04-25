<?php
$location = $_POST["location"];
$groupsize = $_POST["groupsize"];
?>


@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <!-- Testing -->
    <p>{{$location}}</p> 
    <p>{{$groupsize}}</p>
@endsection