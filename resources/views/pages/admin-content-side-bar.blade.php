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
                    <h2>Side Bar</h2>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Heading 1</label>
                            <input type="hidden" name="id" value="21">
                            <input type="text" class="form-control" name="newContent" value="{{$content->find(21)
                        ['content']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Content 1</label>
                            <input type="hidden" name="id" value="22">
                        <textarea class="form-control" name="newContent">{{$content->find(22)
                        ['content']}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Heading 2</label>
                            <input type="hidden" name="id" value="23">
                            <input type="text" class="form-control" name="newContent" value="{{$content->find(23)
                        ['content']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Content 2</label>
                            <input type="hidden" name="id" value="24">
                        <textarea class="form-control" name="newContent">{{$content->find(24)
                        ['content']}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Heading 3</label>
                            <input type="hidden" name="id" value="25">
                            <input type="text" class="form-control" name="newContent" value="{{$content->find(25)
                        ['content']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Content 3</label>
                            <input type="hidden" name="id" value="26">
                        <textarea class="form-control" name="newContent">{{$content->find(26)
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
        document.getElementById("edit-nav-side-bar").className = "active";
        document.getElementById("nav-admin").className = "active";
    </script>
@endsection