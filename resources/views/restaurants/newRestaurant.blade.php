@extends('layouts.app')



@section('content')
    <h1>{{$title}}</h1>
    
    <p>Here you can fill the necessary details to get your restaurant started with Table5.</p>

    {!! Form::open(['action' => 'RestaurantsController@store', 'method' => 'post']) !!}
    <!--Restaurant name-->
        <div class="form-group row">
            {{Form::label('name', 'Restaurant name', ['class' => 'col-sm-2 col-form-label'])}}
            {{Form::text('name', '', ['class' => 'form-control col-sm-10', 'placeholder' => 'My restaurant is...'])}}
        </div>
    <!--Address-->
        <div class="form-group row">
            {{Form::label('location', 'Address', ['class' => 'col-sm-2 col-form-label'])}}
            {{Form::text('name', '', ['class' => 'form-control col-sm-10', 'placeholder' => 'Address'])}}
        </div>
    {!! Form::close() !!}
@endsection