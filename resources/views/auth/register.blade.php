@extends('templates/master')

@section('title')
hayniemusicstudio
@endsection

@section('css')
<link rel='stylesheet' href={{URL::asset('css/page-basic.css')}}>
<link rel='stylesheet' href={{URL::asset('css/register.css')}}>
@endsection

@section('content')
<div class="page-header">
    <h1>Register an Administrator<br><small></small></h1>
</div>
<div class='page-content'>
    <form method="post" action={{url("/register")}}>
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="first-name">First Name</label>
            <input type='text' class="form-control" id='first-name' name='first-name' required>
        </div>
        <div class="form-group">
            <label for="last-name">Last Name</label>
            <input type='text' class="form-control" id='last-name' name='last-name' required>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type='email' class="form-control" id='email' name='email' required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type='password' class="form-control" id='password' name='password' required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type='password' class="form-control" id='password_confirmation' name="password_confirmation" required>
        </div>
        <button type="submit" class="btn btn-default">Register</button>
    </form>
</div>
@endsection

@section('javascript')

@endsection