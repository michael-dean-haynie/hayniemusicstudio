@extends('templates/master')

@section('title')
Haynie Music Studio
@endsection

@section('css')
<link rel='stylesheet' href={{URL::asset('css/page-basic.css')}}>
<link rel='stylesheet' href={{URL::asset('css/login.css')}}>
@endsection

@section('content')
<div class="page-header">
    <h1>Login<br><small></small></h1>
</div>
<div class='page-content'>
    <form method="post" action={{url("/login")}}>
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type='text' class="form-control" id='email' name='email' required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type='password' class="form-control" id='password' name='password' required>
        </div>
        <button type="submit" class="btn btn-default">Login</button>
    </form>
</div>
@endsection

@section('javascript')

@endsection