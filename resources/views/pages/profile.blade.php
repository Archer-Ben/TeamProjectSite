@extends('layouts.app')



@section('content')
    <div class=container>
        <div class="row">
            <div class="col">
                <div class="panel-header border">
                    <h1 class = "display-4">{{$title}}</h1>
                    <p>User ID: {{$user->id}}</p>
                    <p>Name: {{$user->name}}</p>
                    <p>Email: {{$user->email}}</p>
                </div>
            </div>
            <hr>
        @if($user->owns_restaurant == false)
            <div class="col border alert alert-secondary" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3>Own a restaurant?</h3>
                <p>Add your restaurant to our service and allow customers to see your available tables!</p>
                {!! Form::open(['action' => 'RestaurantsController@create', 'method' => 'get']) !!}
                    {{Form::submit('Create restaurant', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        @else
            <div class="col border alert alert-secondary" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3>Delete restaurant</h3>
                <p>If you wish to permanently remove your restaurant from our service, click the delete button below. This is not a reversible action.</p>
                {!! Form::open(['action' => ['RestaurantsController@destroy', $user->id], 'method' => 'POST']) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete my restaurant', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!}
            </div>
        @endif  
        </div>
        <br/>
        <div class="card">
            <div class="card-header">
                <h3>My Bookings</h3>
            </div>
            <div class="card-body">
                @if(count($bookings) > 0)
                <table class="table table-striped">
                    <thead class ="thead-dark">
                        <tr>
                            <th scope="col">Booking ID</th>
                            <th scope="col">Restaurant</th>
                            <th scope="col">Reservation made</th>
                            <th scope="col">Status</th>
                            <th scope="col">Cancel</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                            <td>{{$booking->id}}</td>
                            <td>{{$booking->restaurant_name}}</td>
                            <td>{{$booking->created_at->diffForHumans()}}</td>
                            <td>{{$booking->status}}</td>
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