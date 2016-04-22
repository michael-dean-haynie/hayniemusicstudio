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
            <h2>Home</h2>
                <form method="post" action={{url('/admin/content')}}>
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="newContent">Jumbotron Text</label>
                        <input type="hidden" name="id" value="1">
                        <input type="text" class="form-control" name="newContent" value="{{$content->find(1)
                        ['content']}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <form method="post" action={{url('/admin/content')}}>
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="newContent">Musik Garten Snippet</label>
                        <input type="hidden" name="id" value="2">
                        <textarea class="form-control" name="newContent">{{$content->find(2)
                        ['content']}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <form method="post" action={{url('/admin/content')}}>
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="newContent">Private Lessons Snippet</label>
                        <input type="hidden" name="id" value="3">
                        <textarea class="form-control" name="newContent">{{$content->find(3)
                        ['content']}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <form method="post" action={{url('/admin/content')}}>
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="newContent">Events Snippet</label>
                        <input type="hidden" name="id" value="4">
                        <textarea class="form-control" name="newContent">{{$content->find(4)
                        ['content']}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <form method="post" action={{url('/admin/content')}}>
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="newContent">Footer Email</label>
                        <input type="hidden" name="id" value="20">
                        <input type="text" class="form-control" name="newContent" value="{{$content->find(20)
                        ['content']}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
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
                <h2>Private Lessons</h2>
                <form method="post" action={{url('/admin/content')}}>
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="newContent">Page Title</label>
                        <input type="hidden" name="id" value="8">
                        <input type="text" class="form-control" name="newContent" value="{{$content->find(8)
                        ['content']}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <form method="post" action={{url('/admin/content')}}>
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="newContent">Page Sub-Title</label>
                        <input type="hidden" name="id" value="9">
                        <input type="text" class="form-control" name="newContent" value="{{$content->find(9)
                        ['content']}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <form method="post" action={{url('/admin/content')}}>
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="newContent">Page Content</label>
                        <input type="hidden" name="id" value="10">
                        <textarea class="form-control" name="newContent">{{$content->find(10)
                        ['content']}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h2>Events</h2>
                <form method="post" action={{url('/admin/content')}}>
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="newContent">Page Title</label>
                        <input type="hidden" name="id" value="11">
                        <input type="text" class="form-control" name="newContent" value="{{$content->find(11)
                        ['content']}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <form method="post" action={{url('/admin/content')}}>
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="newContent">Page Sub-Title</label>
                        <input type="hidden" name="id" value="12">
                        <input type="text" class="form-control" name="newContent" value="{{$content->find(12)
                        ['content']}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <form method="post" action={{url('/admin/content')}}>
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="newContent">Page Content</label>
                        <input type="hidden" name="id" value="13">
                        <textarea class="form-control" name="newContent">{{$content->find(13)
                        ['content']}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
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
        <div class="row">
            <div class="col-xs-12">
                <h2>Contact</h2>
                <form method="post" action={{url('/admin/content')}}>
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="newContent">Page Title</label>
                        <input type="hidden" name="id" value="17">
                        <input type="text" class="form-control" name="newContent" value="{{$content->find(17)
                        ['content']}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <form method="post" action={{url('/admin/content')}}>
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="newContent">Page Sub-Title</label>
                        <input type="hidden" name="id" value="18">
                        <input type="text" class="form-control" name="newContent" value="{{$content->find(18)
                        ['content']}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <form method="post" action={{url('/admin/content')}}>
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="newContent">Page Content</label>
                        <input type="hidden" name="id" value="19">
                        <textarea class="form-control" name="newContent">{{$content->find(19)
                        ['content']}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
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
        document.getElementById("edit-nav-home").className = "active";
        document.getElementById("nav-admin").className = "active";
    </script>
@endsection