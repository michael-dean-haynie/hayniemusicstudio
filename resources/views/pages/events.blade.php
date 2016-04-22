@extends('templates/master')

@section('title')
Events | Haynie Music Studio
@endsection

@section('css')
<link rel='stylesheet' href={{URL::asset('css/page-basic.css')}}>
<link rel='stylesheet' href={{URL::asset('css/events.css')}}>
<link rel='stylesheet' href={{URL::asset('css/event-board.css')}}>
@endsection

@section('content')
<div class="page-header">
    <h1>{{$content->find(11)['content']}}
        <br>
        <small>{{$content->find(12)['content']}}</small>
    </h1>
</div>
<div class='page-content'>
    <div class="rich-text-container">
        @if($content->find(13)['content'])
        <div class="rich-text">
            {{--{{$content->find(13)['content']}}--}}
            <?php echo $content->find(13)['content']; ?>
        </div>
        @endif
    </div>
	<div class="container-fluid" id="event-board">
        @foreach($events as $event)
        <div class="row event-row">
            <div class="col-xs-12">
                <span class="event-name">{{$event->eventInfo}}</span>
            </div>
        </div>
        @endforeach
	</div>
</div>
@endsection

@section('javascript')
<script>
	document.getElementById("nav-events").className = "active";
</script>
@endsection


