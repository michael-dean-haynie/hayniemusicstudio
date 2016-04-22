@extends('templates/master')

@section('title')
Haynie Music Studio
@endsection

@section('css')
    <link rel='stylesheet' href={{URL::asset('css/home.css')}}>
    <link rel='stylesheet' href={{URL::asset('css/rich-text.css')}}>
@endsection

@section('content')
    <div class="container jumbo-container">
        <div class="row">
            <div class='col-xs-12'>
                <div class="jumbotron">
                    <img class="jumbo-img img-responsive img-rounded" src="{{asset('/img/MomsJumbo2.jpg')}}">
                    @if($content->find(1)['content'])
                    <div class="page-header">
                        <h1>{{$content->find(1)['content']}}</h1>
                    </div>
                    @endif
                    <form class="button-form jumbo-button" method="get" action={{URL::asset('/about')}}>
                        <input type="submit" value="SEE WHAT WE'RE ALL ABOUT!" class="btn-lg btn-default colored-button">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="contents-heading">
        <h2>Join our Program!</h2>
    </div>
    <div class="container-fluid">
        <div class="row thumbnails">
            <div class="col-sm-offset-0 col-sm-4  col-xs-offset-1 col-xs-10 text-center thumbnail">
                <img class="img-responsive center-block" src={{URL::asset("img/content1.jpg")}}>
                <h3>MusikGarten</h3>
                @if(strlen( $content->find(2)['content']))
                    <div class="rich-text-container">
                        <div class="rich-text">
                            {{--{{$content->find(2)['content']}}--}}
                            <?php echo $content->find(2)['content']; ?>
                        </div>
                    </div>
                @endif
                <form class="button-form" method="get" action={{URL::asset('/musikgarten')}}>
                    <input type="submit" value="Learn More" class="btn-lg btn-default colored-button">
                </form>
            </div>
            <div class="col-sm-offset-0 col-sm-4  col-xs-offset-1 col-xs-10 text-center thumbnail">
                <img class="img-responsive img-rounded center-block smaller-thumbnail" src={{URL::asset("img/content2a.jpg")}}>
                <h3>Private Lessons</h3>
                @if(strlen( $content->find(3)['content']))
                    <div class="rich-text-container">
                        <div class="rich-text">
                            {{--{{$content->find(3)['content']}}--}}
                            <?php echo $content->find(3)['content']; ?>
                        </div>
                    </div>
                @endif
                <form class="button-form" method="get" action={{URL::asset('/private-lessons')}}>
                    <input type="submit" value="Learn More" class="btn-lg btn-default colored-button">
                </form>
            </div>
            <div class="col-sm-offset-0 col-sm-4  col-xs-offset-1 col-xs-10 text-center thumbnail">
                <img class="img-responsive center-block" src={{URL::asset("img/content3.jpg")}}>
                <h3>Events</h3>
                @if(strlen( $content->find(4)['content']))
                    <div class="rich-text-container">
                        <div class="rich-text">
                            {{--{{$content->find(4)['content']}}--}}
                            <?php echo $content->find(4)['content']; ?>
                        </div>
                    </div>
                @endif
                <form class="button-form" method="get" action={{URL::asset('/events')}}>
                    <input type="submit" value="Learn More" class="btn-lg btn-default colored-button">
                </form>
            </div>
        </div>
    </div>


@endsection

@section('javascript')
    <script>
        document.getElementById("nav-home").className = "active";
    </script>
@endsection

