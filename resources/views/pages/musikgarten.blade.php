@extends('templates/master')

@section('title')
 MusikGarten | Haynie Music Studio
@endsection

@section('css')
<link rel='stylesheet' href={{URL::asset('css/page-basic.css')}}>
<link rel='stylesheet' href={{URL::asset('css/musikgarten.css')}}>
<link rel='stylesheet' href={{URL::asset('css/side-bar.css')}}>
@endsection

@section('content')
<div class="page-header">
    <div class='container'>
        <div class='row'>
            <div class='col-xs-12 col-sm-9'>
                <h1>{{$content->find(5)['content']}}
                    <br>
                    <small>{{$content->find(6)['content']}}</small>
                </h1>
            </div>
            <div class='col-xs-0 col-sm-3'>
                <img class="img-responsive img-rounded" src="{{asset('/img/MGclassphoto.jpg')}}">
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
                        <div class="rich-text">
                            <?php echo $content->find(7)['content']; ?>
                        </div>
                    </div>
                </div>
                <div class="row classes">
                    <div class="col-xs-12 class" id="class1">
                        <h3><?php echo $content->find(27)['content']; ?> <small><?php echo $content->find(28)
                        ['content']; ?></small></h3>
                        <hr>
                        <div class="rich-text-container">
                            <div class="rich-text">
                                <?php echo $content->find(29)['content']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 class" id="class2">
                        <h3><?php echo $content->find(30)['content']; ?> <small><?php echo $content->find(31)
                        ['content']; ?></small></h3>
                        <hr>
                        <div class="rich-text-container">
                            <div class="rich-text">
                                <?php echo $content->find(32)['content']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 class" id="class3">
                        <h3><?php echo $content->find(33)['content']; ?> <small><?php echo $content->find(34)
                        ['content']; ?></small></h3>
                        <hr>
                        <div class="rich-text-container">
                            <div class="rich-text">
                                <?php echo $content->find(35)['content']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 class" id="class4">
                        <h3><?php echo $content->find(36)['content']; ?> <small><?php echo $content->find(37)
                        ['content']; ?></small></h3>
                        <hr>
                        <div class="rich-text-container">
                            <div class="rich-text">
                                <?php echo $content->find(38)['content']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 class" id="class5">
                        <h3><?php echo $content->find(39)['content']; ?> <small><?php echo $content->find(40)
                        ['content']; ?></small></h3>
                        <hr>
                        <div class="rich-text-container">
                            <div class="rich-text">
                                <?php echo $content->find(41)['content']; ?>
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
	document.getElementById("nav-musikgarten").className = "active";
</script>
@endsection