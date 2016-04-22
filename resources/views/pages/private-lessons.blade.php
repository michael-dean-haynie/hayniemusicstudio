@extends('templates/master')

@section('title')
Private Lessons | Haynie Music Studio
@endsection

@section('css')
<link rel='stylesheet' href={{URL::asset('css/page-basic.css')}}>
<link rel='stylesheet' href={{URL::asset('css/private-lessons.css')}}>
<link rel='stylesheet' href={{URL::asset('css/side-bar.css')}}>
@endsection

@section('content')
<div class="page-header">
    <div class='container'>
        <div class='row'>
            <div class='col-xs-12 col-sm-9'>
                <h1>{{$content->find(8)['content']}}
                    <br>
                    <small>{{$content->find(9)['content']}}</small>
                </h1>
            </div>
            <div class='col-xs-0 col-sm-3'>
                <img class="img-responsive img-rounded" src="{{asset('/img/pianohands.jpg')}}">
            </div>
        </div>
    </div>
</div>
<div class='page-content'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-9">
                <div class="row">
                    <div class="rich-text-container">
                        @if($content->find(10)['content'])
                        <div class="rich-text">
                            {{--{{$content->find(10)['content']}}--}}
                            <?php echo $content->find(10)['content']; ?>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row quadrants">
                                        <div class="row">
                        <div class="col-xs-12 col-sm-5 quadrant" id="quadrant1">
                            <h3><?php echo $content->find(42)['content']; ?></h3>
                            <hr>
                            <div class="rich-text-container">
                                <div class="rich-text">
                                    <?php echo $content->find(43)['content']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 quadrant" id="quadrant2">
                            <h3><?php echo $content->find(44)['content']; ?></h3>
                            <hr>
                            <div class="rich-text-container">
                                <div class="rich-text">
                                    <?php echo $content->find(45)['content']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 quadrant" id="quadrant3">
                            <h3><?php echo $content->find(46)['content']; ?></h3>
                            <hr>
                            <div class="rich-text-container">
                                <div class="rich-text">
                                    <?php echo $content->find(47)['content']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 quadrant" id="quadrant4">
                            <h3><?php echo $content->find(48)['content']; ?></h3>
                            <hr>
                            <div class="rich-text-container">
                                <div class="rich-text">
                                    <?php echo $content->find(49)['content']; ?>
                                </div>
                            </div>
                        </div>
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
	document.getElementById("nav-private-lessons").className = "active";
</script>
@endsection