@extends('layouts.app')
@section('content')
<h1>Adding news</h1><br>
<form action="{{ route('news.store') }}" method="post">
    @csrf
    <p>Title: <br><input type="text" name="title" class="form-control"></p>
    <p>Text: <br><input type="text" name="text" class="form-control"></p>
    <button type="submit" class="btn btn-success">Add</button>
</form>
@stop

