@extends('layouts.app')



@section('content')
    <h1 class = "display-4">{{$title}}</h1>
    
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="container">
                {!! Form::open(['action' => ['RestaurantsController@updateAvailability', $restaurant->id], 'method' => 'post']) !!}
                @for($i = 1; $i <= $restaurant->max_table_size; $i++)
                    <div class="row">
                        <div class="col-2 border">
                        Tables for {{$i}}
                        </div>
                        @php
                            $field = "size_".$i
                        @endphp
                        <div class="col-1">
                            {{$availabilityArray->$field}}
                        </div>
                        <div class="col">
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

    </form>
@endsection