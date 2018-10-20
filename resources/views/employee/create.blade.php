@extends('layouts.base')
@section('title','Home')
@section('content')
<h2>Employee Create</h2>

<form method="post">
    Name:<br>
    <input type="text" name="ename" value="{{old('ename')}}">
    <br>
    Email:<br>
    <input type="email" name="email" value="{{old('email')}}">
    <br>
    Salary:<br>
    <input type="text" name="sal" value="{{old('sal')}}">
    <br><br>
    <select name="dept">
        @foreach($deptlist as $dept)
        <option value="{{$dept->id}}">{{$dept->department_name}}</option>
            @endforeach
    </select>
    <br><br>
    <input class="btn btn-primary" type="submit" value="Submit">
    <a class="btn btn-success" href="{{route('employee.list')}}" role="button">Back To List</a>
</form>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $err)
            <li>{{$err}}</li>
        @endforeach
    </ul>
@endif
@endsection
