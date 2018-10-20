@extends('base')
@section('title','login')
@section('content')

    <form  method="post">
        User Name:<br>
        <input type="text" name="username">
        <br>
        password:<br>
        <input type="password" name="password">
        <br><br>
        <input class="btn btn-primary" type="submit" value="Login">
        {{--<input type="submit" value="Login">--}}
    </form>

    @if(session ('message'))
        {{session('message')}}
    @endif

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $err)
                <li>{{$err}}</li>
            @endforeach
        </ul>
    @endif

@endsection


