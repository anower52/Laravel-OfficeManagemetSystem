@extends('layouts.base')
@section('title','Home')
@section('content')

<h1>Home View</h1>
{{--
<p>Name: {{$name}}</p>
<p>Email: {{$email}}</p>

<p>
    Hobbiee:

    <ul>
     @foreach($hobbies as $h)
         <li>{{$h}}</li>
         @endforeach
    </ul>
</p>--}}
{{--<a href="{{route('department.list')}}">Department</a>--}}
<a class="btn btn-primary" href="{{route('department.list')}}" role="button">Department</a>
<br><br>
<a class="btn btn-primary" href="{{route('employee.list')}}" role="button">Employee</a>

<br><br>
{{--<a href="{{route('employee.list')}}">Employee</a>--}}

@endsection
