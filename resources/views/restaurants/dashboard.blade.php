@extends('layouts.app')



@section('content')
    <h1 class = "display-4">{{$title}}</h1>
    
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="container">
                <div class="row">
                    <div class="col-2 border"><strong>Table size</strong></div>
                    <div class="col-1 border"><strong>Current</strong></div>
                    <div class="col-1 border"><strong>New</strong></div>
                </div>
                {!! Form::open(['action' => ['RestaurantsController@updateAvailability', $restaurant->id], 'method' => 'post']) !!}
                @for($i = 1; $i <= $restaurant->max_table_size; $i++)
                    <div class="row">
                        <div class="col-2 border">
                        Tables for {{$i}}
                        </div>
                        @php
                            $field = "size_".$i
                        @endphp
                        <div class="col-1 border">
                            {{$availabilityArray->$field}}
                        </div>
                        <div class="col-1 border">
                            {{Form::number($field, $availabilityArray->$field, ['min' => 0, 'max' => 100] )}}
                        </div>
                    </div>
                @endfor
                @for($i = $restaurant->max_table_size + 1; $i <= 20; $i++)
                    {{Form::hidden('size_'.$i, 0)}}
                @endfor
                <br/>
                {{Form::submit('Update tables', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <br/>
    <hr>
    <br/>
    {{-- <div class="panel panel-default">
        <div class="panel-head">

        </div>
        <div class="panel-body">
            
        </div>
    </div> --}}
    
    <div class="card">
            <div class="card-header">
                <h3>Bookings</h3>
            </div>
            <div class="card-body">
                @if(count($bookings) > 0)
                <table class="table table-striped">
                    <thead class ="thead-dark">
                        <tr>
                            <th scope="col">Booking ID</th>
                            <th scope="col">User</th>
                            <th scope="col">Reservation made</th>
                            <th scope="col">Status</th>
                            <th scope="col">Confirm attendance</th>
                            <th scope="col">Cancel</th>

                            
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                            <td>{{$booking->id}}</td>
                            <td>{{$booking->user_name}}</td>
                            <td>{{$booking->created_at->diffForHumans()}}</td>
                            <td>{{$booking->status}}</td>
                            <td>
                                {!! Form::open(['action' => ['BookingsController@update', $booking->id], 'method' => 'post']) !!}
                                    {{Form::hidden('status', 'Confirmed')}}
                                    {{Form::hidden('_method', 'put')}}
                                    {{Form::submit('Confirm', ['class' => 'btn btn-primary btn-sm'])}}
                                {!! Form::close() !!}
                            </td>
                            <td>
                                    {!! Form::open(['action' => ['BookingsController@update', $booking->id], 'method' => 'post']) !!}
                                    {{Form::hidden('status', 'Cancelled')}}
                                    {{Form::hidden('_method', 'put')}}
                                    {{Form::submit('Cancel reservation', ['class' => 'btn btn-danger btn-sm'])}}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                @else
                <div class="card-body">
                    <p>You don't have any bookings</p>
                
                @endif
            </div>
        </div>
    </div>
@endsection