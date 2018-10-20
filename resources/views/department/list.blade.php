@extends('layouts.base')
@section('title','Deparments')
@section('content')
<h2>Department List</h2>

<a class="btn btn-success" href="{{route('home')}}" role="button">Back To Home</a>
</a>
<a class="btn btn-primary" href="{{route('department.create')}}" role="button">Create</a>

<hr><br><br>

<table>
    <tr>
        <th>ID</th>
        <th>Department Name</th>
        <th>Location</th>
        <th>Option</th>
    </tr>
    @foreach($deptlist as $dept)
    <tr>
        <td>{{$dept->id}}</td>
        <td>{{$dept->department_name}}</td>
        <td>{{$dept->location}}</td>
        <td><a class="btn btn-success" href="{{route('department.edit', ['id' => $dept->id])}}" role="button">EDIT</a>
        <td><a class="btn btn-danger" href="{{route('department.delete', ['id' => $dept->id])}}" role="button">DELETE</a>
        </td>
    </tr>
        @endforeach
</table>
    @endsection

