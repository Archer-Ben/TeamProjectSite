@extends('layouts.app')



@section('content')
    <h1 class = "display-4">{{$title}}</h1>
    
    <p>Here you can fill in the necessary details to get your restaurant started with Table5.</p>

    {!! Form::open(['action' => 'RestaurantsController@store', 'method' => 'post']) !!}
    <!--Restaurant name-->
        <div class="form-group row">
            {{Form::label('name', 'Restaurant name', ['class' => 'col-sm-2 col-form-label'])}}
            {{Form::text('name', '', ['class' => 'form-control col-sm-10', 'placeholder' => 'Name', 'required' => 'required'])}}
        </div>
    <!--Description-->
        <div class="form-group row">
            {{Form::label('desciption', 'Description', ['class' => 'col-sm-2 col-form-label'])}}
            {{Form::text('description', '', ['class' => 'form-control col-sm-10', 'placeholder' => 'Short description of restaurant type. (Max 255 characters)', 'maxlength' => 255, 'required' => 'required'])}}
        </div>
    <!--Address-->
        <div class="form-group row">
            {{Form::label('location', 'Address', ['class' => 'col-sm-2 col-form-label'])}}
            {{Form::text('location', '', ['class' => 'form-control col-sm-10', 'placeholder' => 'Address', 'required' => 'required'])}}
        </div>
    <!--Phone number-->
        <div class="form-group row">
            {{Form::label('phoneNumber', 'Phone number', ['class' => 'col-sm-2 col-form-label'])}}
            {{Form::tel('phoneNumber', '', ['class' => 'form-control col-sm-10', 'placeholder' => 'Customer enquiries phone number (eg. 01234 567891)', 'pattern' => '[0-9]{5} [0-9]{6}', 'required' => 'required'])}}
        </div>
    <!--Max table size-->
        <div class="form-group row">
            {{Form::label('maxTableSize', 'Maximum table size', ['class' => 'col-sm-2 col-form-label'])}}
            {{Form::selectRange('maxTableSize', 1, 20, ['class' => 'form-control col-sm-10', 'required' => 'required'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection