@extends('layouts.base')
@section('title','Employee')
@section('content')

<h2>Employee List</h2>
<a class="btn btn-success" href="{{route('home')}}" role="button">Back To Home</a>
<a class="btn btn-primary" href="{{route('employee.create')}}" role="button">Create</a>

<hr><br><br>

<table>
    <tr>
        <th>ID</th>
        <th>Employee Name</th>
        <th>Email</th>
        <th>Salary</th>
        <th>Department</th>
    </tr>
    @foreach($emplist as $emp)
        <tr>
            <td>{{$emp->id}}</td>
            <td>{{$emp->employee_name}}</td>
            <td>{{$emp->email}}</td>
            <td>{{$emp->salary}}</td>
            <td>{{$emp->department_name}}</td>
            {{--<td>{{$emp->department->department_name}}</td>--}}
            {{--<td><a href="{{route('department.edit', ['id' => $dept->department_id])}}">Edit</a>|
                <a href="{{route('department.delete', ['id' => $dept->department_id])}}">Delete</a>
            </td>--}}
        </tr>
    @endforeach
</table>
@endsection
