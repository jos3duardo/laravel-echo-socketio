@extends('layouts.app')

@section('content')
    <form action="" method="post" class="container">
        @csrf

        <input type="text" name="title" class="form-control" placeholder="Title">
        <textarea name="body" class="form-control" id="" placeholder="Message"></textarea>

        <input type="submit" class="btn btn-primary" value="Save">
    </form>

@endsection
