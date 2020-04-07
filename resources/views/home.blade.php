@extends('layouts.app')

@section('content')

<h1> Home</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem veritatis nihil corrupti nulla facere velit non corporis, dignissimos assumenda, autem dolorum temporibus vero enim asperiores fuga quidem. Asperiores, inventore non?</p>
@endsection

@section('sidebar')

   @parent
    <p> This is only showing in the home page</p>
@endsection