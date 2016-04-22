@extends('templates/master')

@section('title')
 Contact | Haynie Music Studio
@endsection

@section('css')
<link rel='stylesheet' href={{URL::asset('css/page-basic.css')}}>
<link rel='stylesheet' href={{URL::asset('css/contact.css')}}>
<link rel='stylesheet' href={{URL::asset('css/side-bar.css')}}>
@endsection

@section('content')
<div class="page-header">
    <h1>{{$content->find(17)['content']}}
        <br>
        <small>{{$content->find(18)['content']}}</small>
    </h1>
</div>
<div class='page-content'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-9">
                <div class="rich-text-container">
                    <div class="rich-text">
                        {{--{{$content->find(19)['content']}}--}}
                        <?php echo $content->find(19)['content']; ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                @include('sub-views.side-bar')
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
	document.getElementById("nav-contact").className = "active";
</script>
@endsection