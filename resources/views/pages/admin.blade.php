@extends('templates/master')

@section('title')
Admin | Haynie Music Studio
@endsection

@section('css')
    <link rel='stylesheet' href={{URL::asset('css/page-basic.css')}}>
    <link rel='stylesheet' href={{URL::asset('css/admin.css')}}>
@endsection

@section('content')
    <div class="page-header">
        <h1>Administrative<br><small>"I got the POWER!"</small></h1>
    </div>
    <div class='page-content'>
        <form method="get" action={{url('/admin/events')}}>
            <input type="submit" class="btn btn-primary btn-lg" value="Edit Events">
        </form>
        <form method="get" action={{url('/admin/content/home')}}>
            <input type="submit" class="btn btn-primary btn-lg" value="Edit Page Content">
        </form>
    </div>
@endsection

@section('javascript')
    <script>
        document.getElementById("nav-admin").className = "active";
    </script>
@endsection