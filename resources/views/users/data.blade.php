@extends('layouts.app')
@section('content')
    <form action="{{ route('users.getdata') }}" method="post">
        @csrf
        <p>Enter your name<input type="text" name="uname" class="form-control" placeholder="Your name"></p><br>
        <p>Enter your phone<input type="number" name="phone" class="form-control" placeholder="Your phone number"></p><br>
        <p>Enter your email<input type="email" name="email" class="form-control" placeholder="Your e-mail"></p><br>
        <p>Enter your order<input type="text" name="order" class="form-control" placeholder="Your order"></p><br>
        <button type="submit" class="btn btn-success">Send</button>
    </form>

@stop
