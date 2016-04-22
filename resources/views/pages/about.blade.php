@extends('templates/master')

@section('title')
About | Haynie Music Studio
@endsection

@section('css')
<link rel='stylesheet' href={{URL::asset('css/page-basic.css')}}>
<link rel='stylesheet' href={{URL::asset('css/about.css')}}>
<link rel='stylesheet' href={{URL::asset('css/side-bar.css')}}>
@endsection

@section('content')
<div class="page-header">
    <h1>{{$content->find(14)['content']}}
        <br>
        <small>{{$content->find(15)['content']}}</small>
    </h1>
</div>
<div class='page-content'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-9">
            	<div class="row">
	            	<div class="col-xs-12 col-md-6 first-col">
		                <div class="rich-text-container">
		                    <div class="rich-text">
		                        {{--{{$content->find(16)['content']}}--}}
		                        <?php echo $content->find(16)['content']; ?>
		                    </div>
		                </div>
	                </div>
	                <div class="col-xs-12 col-md-6">
		                <img src="{{asset("img/PersonalPhotoMG.jpg")}}" class="img-responsive">
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
	document.getElementById("nav-about").className = "active";
</script>
@endsection