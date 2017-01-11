@extends('app')

@section('content')

                <h1>About Me</h1>
                @if(count($people))

                <h3>People I Like:</h3>
                <ul>
                    @foreach ($people as $person)
                    <li>{{ $person }}</li>
                    @endforeach

                </ul>
                @endif
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur</p>

@stop
   
