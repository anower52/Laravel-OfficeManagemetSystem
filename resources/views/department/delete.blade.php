@extends('layouts.base')
@section('title','Home')
@section('content')

<h2>Delete Departments</h2>


<form method="post">
    <input type="hidden" name="did" value="{{$department->id}}">
    DEPARTMENT NAME : {{$department->department_name}}
    <br><br>
    LOCATION : {{$department->location}}
    <br><br>
    <div>
        <font size="3" color="red">Are You Sure You Want To Delete !</font>
    </div>
    <input class="btn btn-danger" type="submit" value="DELETE">
    <a class="btn btn-success" href="{{route('department.list')}}" role="button">Back To List</a>
</form>
    @endsection
