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
                    <h2>MusikGarten</h2>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Page Title</label>
                            <input type="hidden" name="id" value="5">
                            <input type="text" class="form-control" name="newContent" value="{{$content->find(5)
                        ['content']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Page Sub-Title</label>
                            <input type="hidden" name="id" value="6">
                            <input type="text" class="form-control" name="newContent" value="{{$content->find(6)
                        ['content']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Page Content</label>
                            <input type="hidden" name="id" value="7">
                        <textarea class="form-control" name="newContent">{{$content->find(7)
                        ['content']}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Class 1</h2>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Class 1 Heading</label>
                            <input type="hidden" name="id" value="27">
                            <input type="text" class="form-control" name="newContent" value="{{$content->find(27)
                        ['content']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Class 1 Sub-Heading (Ages)</label>
                            <input type="hidden" name="id" value="28">
                            <input type="text" class="form-control" name="newContent" value="{{$content->find(28)
                        ['content']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Class 1 Content</label>
                            <input type="hidden" name="id" value="29">
                        <textarea class="form-control" name="newContent">{{$content->find(29)
                        ['content']}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Class 2</h2>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Class 2 Heading</label>
                            <input type="hidden" name="id" value="30">
                            <input type="text" class="form-control" name="newContent" value="{{$content->find(30)
                        ['content']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Class 2 Sub-Heading (Ages)</label>
                            <input type="hidden" name="id" value="31">
                            <input type="text" class="form-control" name="newContent" value="{{$content->find(31)
                        ['content']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Class 2 Content</label>
                            <input type="hidden" name="id" value="32">
                        <textarea class="form-control" name="newContent">{{$content->find(32)
                        ['content']}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Class 3</h2>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Class 3 Heading</label>
                            <input type="hidden" name="id" value="33">
                            <input type="text" class="form-control" name="newContent" value="{{$content->find(33)
                        ['content']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Class 3 Sub-Heading (Ages)</label>
                            <input type="hidden" name="id" value="34">
                            <input type="text" class="form-control" name="newContent" value="{{$content->find(34)
                        ['content']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Class 3 Content</label>
                            <input type="hidden" name="id" value="35">
                        <textarea class="form-control" name="newContent">{{$content->find(35)
                        ['content']}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Class 4</h2>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Class 4 Heading</label>
                            <input type="hidden" name="id" value="36">
                            <input type="text" class="form-control" name="newContent" value="{{$content->find(36)
                        ['content']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Class 4 Sub-Heading (Ages)</label>
                            <input type="hidden" name="id" value="37">
                            <input type="text" class="form-control" name="newContent" value="{{$content->find(37)
                        ['content']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Class 4 Content</label>
                            <input type="hidden" name="id" value="38">
                        <textarea class="form-control" name="newContent">{{$content->find(38)
                        ['content']}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Class 5</h2>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Class 5 Heading</label>
                            <input type="hidden" name="id" value="39">
                            <input type="text" class="form-control" name="newContent" value="{{$content->find(39)
                        ['content']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Class 5 Sub-Heading (Ages)</label>
                            <input type="hidden" name="id" value="40">
                            <input type="text" class="form-control" name="newContent" value="{{$content->find(40)
                        ['content']}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <form method="post" action={{url('/admin/content')}}>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="newContent">Class 5 Content</label>
                            <input type="hidden" name="id" value="41">
                        <textarea class="form-control" name="newContent">{{$content->find(41)
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
        document.getElementById("edit-nav-musikgarten").className = "active";
        document.getElementById("nav-admin").className = "active";
    </script>
@endsection