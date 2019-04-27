@extends('layouts.app')



@section('content')
    <h1 class = "display-4">{{$title}}</h1>
    
    <p>Here you can fill the necessary details to get your restaurant started with Table5.</p>

    {!! Form::open(['action' => 'RestaurantsController@store', 'method' => 'post']) !!}
    <!--Restaurant name-->
        <div class="form-group row">
            {{Form::label('name', 'Restaurant name', ['class' => 'col-sm-2 col-form-label'])}}
            {{Form::text('name', '', ['class' => 'form-control col-sm-10', 'placeholder' => 'Name', 'required' => 'required'])}}
        </div>
    <!--Address-->
        <div class="form-group row">
            {{Form::label('location', 'Address', ['class' => 'col-sm-2 col-form-label'])}}
            {{Form::text('location', '', ['class' => 'form-control col-sm-10', 'placeholder' => 'Address', 'required' => 'required'])}}
        </div>
    <!--Phone number-->
        <div class="form-group row">
            {{Form::label('phoneNumber', 'Phone number', ['class' => 'col-sm-2 col-form-label'])}}
            {{Form::text('phoneNumber', '', ['class' => 'form-control col-sm-10', 'placeholder' => 'Customer enquiries phone number', 'required' => 'required'])}}
        </div>
    <!--Max table size-->
        <div class="form-group row">
            {{Form::label('maxTableSize', 'Maximum table size', ['class' => 'col-sm-2 col-form-label'])}}
            {{Form::selectRange('groupsize', 1, 20, ['class' => 'form-control col-sm-10', 'required' => 'required'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection