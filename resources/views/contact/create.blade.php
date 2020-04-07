@extends('layouts.app')

@section('content')

<h1> Content </h1>
<br>   

    <form action="{{route('contact.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name"> Name </label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="email"> E-Mail Address </label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="text">Message </label>
            <textarea name="message" id="message" cols="5" rows="5" class="form-control"></textarea>
        </div>
        <button class="btn btn-primary btn-lg" value="submit"> Submit</button>
    </form>
@endsection