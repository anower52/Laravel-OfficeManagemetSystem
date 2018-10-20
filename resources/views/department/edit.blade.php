@extends('layouts.base')
@section('title','Home')
@section('content')

<h2>Edit Departments</h2>


<form method="post">
    <input type="hidden" name="did" value="{{$department->id}}">
    Department name:<br>
    <input type="text" name="dname" value="{{$department->department_name}}">
    <br>
    Location:<br>
    <input type="text" name="loc" value="{{$department->location}}">
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
