@extends('layouts.app')

@section('content')
    <div class="jumbotron text-left">
        <div class="container">
            <div class="container text-center">
                <h1 class = "display-4">{{$title}}</h1>
                <h4>Is your favourite restaurant full? Did you forget to book in advance?</h4> <h4>Sounds like you need to find a table. Fast. We can help.</h4>
            </div>
            <p>Enter your location and the number of members in your group, then click 'Search'.</p>
            {!! Form::open(['url' => '/results']) !!}
	        <div class="form-group">
                {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Find tables near to...', 'required' => 'required'])}}
                <br/>
                {{Form::label('groupsize','Number of people')}}
                {{Form::selectRange('groupsize', 1, 20, ['required' => 'required'])}}
                {{-- {{Form::select('groupsize', ['1' => '1 Person', '2' => '2 People', '3' => '3 People', '4' => '4 People', '5' => '5 People', '6' => '6 People', '7' => '7 People', '8' => '8 People', '9' => '9 People', '10' => '10 People'], null)}} --}}
                <div class="container text-right">
                    <button type="submit" class="btn btn-success btn-lg">
                        {{ __('Search') }}
                    </button>
                </div>
                <br/>
                <div class="alert alert-info" role="alert">
                        <p>Please note that while anybody may search for available tables, only registered users can create reservations. If you are not logged in, you will need to do so before you can create a reservation.</p>
                </div>
	        </div>
        {!! Form::close() !!}
        </div>
    </div>


@endsection