@extends('layouts.app')

@section('content')

<h1> Messages</h1>
<br><br>
    @if(count($messages) > 0)
        @foreach($messages as $message)
        <ul class="list-group">
            <li class="list-group-item">
                Name: {{$message -> name}}
            </li>
            <li class="list-group-item">
                Email: {{$message -> email}}
            </li>
            <li class="list-group-item">
                Message: {{$message -> message}}
            </li>
        </ul>
        <br/>
        @endforeach

    @endif

@endsection

@section('sidebar')

   @parent
    <p> This is only showing in the home page</p>
@endsection