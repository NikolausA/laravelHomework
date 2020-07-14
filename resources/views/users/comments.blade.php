@extends('layouts.app')
@section('content')
    <form action="{{ route('users.addcomm') }}" method="post">
        @csrf
        <p>Enter your name<input type="text" name="name" class="form-control" placeholder="Your name"></p><br>
        <p>Put your comments on<textarea name="comment" placeholder="Your comments" class="form-control" cols="30" rows="10"></textarea></p><br>
        <button type="submit" class="btn btn-success">Send</button>
    </form>

@stop

