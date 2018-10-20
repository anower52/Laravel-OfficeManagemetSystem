@extends('layouts.base')
@section('title','Deparments')
@section('content')

<h2>Create Departments</h2>

<form method="post">
    Department name:<br>
    <input type="text" name="dname">
    <br>
    Location:<br>
    <input type="text" name="loc">
    <br><br>
    <input class="btn btn-primary" type="submit" value="Submit">
    <a class="btn btn-success" href="{{route('department.list')}}" role="button">Back To List</a>
</form>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $err)
            <li>{{$err}}</li>
        @endforeach
    </ul>
@endif
    @endsection
