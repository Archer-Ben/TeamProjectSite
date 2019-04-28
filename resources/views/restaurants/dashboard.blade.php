@extends('layouts.app')



@section('content')
    <h1 class = "display-4">{{$title}}</h1>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            <p class="display-6">Table management</p>
        </div>
        <div class="panel-body">
            <div class="container">
                {!! Form::open(['action' => ['RestaurantsController@updateAvailability', $restaurant->id], 'method' => 'post']) !!}
                @for($i = 1; $i < $restaurant->max_table_size+1; $i++)
                    <div class="row">
                        <div class="col">
                        <p>Tables for {{$i}}: 
                        @php
                            $field = "size_".$i
                        @endphp
                            {{$availabilityArray->$field}}
                        </p>
                        </div>
                        <div class="col">
                            {{Form::number('$field','$availabilityArray->$field', ['min' => 0, 'max' => 100] )}}
                        </div>
                    </div>
                @endfor
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    </form>
@endsection