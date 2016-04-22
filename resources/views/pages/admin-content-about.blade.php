@extends('templates/master')

@section('title')
    Admin | Haynie Music Studio
@endsection

@section('css')
    <link rel='stylesheet' href={{URL::asset('css/page-basic.css')}}>
    <link rel='stylesheet' href={{URL::asset('css/admin-content.css')}}>
@endsection

@section('content')
    <div class="page-header">
        <h1>Edit Page Content
            <br>
            <small><span class="warning">Only Submit One Field at a Time!</span></small>
        </h1>
    </div>
    <div>
        <ul class="nav nav-tabs">
            <li roll="presentation" class='' id="edit-nav-home">
                <a href='{{url('/admin/content/home')}}'>Home</a>
            </li>
            <li roll="presentation" class='' id="edit-nav-musikgarten">
                <a href='{{url('/admin/content/musikgarten')}}'>MusikGarten</a>
            </li>
            <li roll="presentation" class='' id="edit-nav-private-lessons">
                <a href='{{url('/admin/content/private-lessons')}}'>Private Lessons</a>
            </li>
            <li roll="presentation" class='' id="edit-nav-events">
                <a href='{{url('/admin/content/events')}}'>Events</a>
            </li>
            <li roll="presentation" class='' id="edit-nav-about">
                <a href='{{url('/admin/content/about')}}'>About</a>
            </li>
            <li roll="presentation" class='' id="edit-nav-contact">
                <a href='{{url('/admin/content/contact')}}'>Contact</a>
            </li>
            <li roll="presentation" class='' id="edit-nav-side-bar">
                <a href='{{url('/admin/content/side-bar')}}'>Side Bar</a>
            </li>
        </ul>
    </div>
    <div class='page-content'>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <h2>About</h2>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Page Title</label>
                            <input type="hidden" name="id" value="14">
                            <input type="text" class="form-control" name="newContent" value="{{$content->find(14)
                        ['content']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Page Sub-Title</label>
                            <input type="hidden" name="id" value="15">
                            <input type="text" class="form-control" name="newContent" value="{{$content->find(15)
                        ['content']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Page Content</label>
                            <input type="hidden" name="id" value="16">
                        <textarea class="form-control" name="newContent">{{$content->find(16)
                        ['content']}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        document.getElementById("edit-nav-about").className = "active";
        document.getElementById("nav-admin").className = "active";
    </script>
@endsection