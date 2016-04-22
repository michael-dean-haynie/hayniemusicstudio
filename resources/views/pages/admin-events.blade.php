@extends('templates/master')

@section('title')
Admin | Haynie Music Studio
@endsection

@section('css')
    <link rel='stylesheet' href={{URL::asset('css/page-basic.css')}}>
    <link rel='stylesheet' href={{URL::asset('css/admin-events.css')}}>
    <link rel='stylesheet' href={{URL::asset('css/event-board.css')}}>
@endsection

@section('content')
<div class='page-content'>
    <h1 class="option">Existing Events</h1>
    <div class="container-fluid" id="event-board">
        @foreach($events as $event)
            <div class="row event-row">
                <div class="col-xs-12">
                    <form class="delete-button" method="post" action={{url('/admin/events/delete')}}>
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" value={{$event->id}}>
                        <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                    </form>
                    <span class="event-name">({{$event->number}})</span>
                    <span>{{$event->eventInfo}}</span>
                </div>
            </div>
        @endforeach
    </div>

    <h1 class="option">Create New Event</h1>
    <form method="post" action={{url('/admin/events/create')}}>
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="event-info">Event Info</label>
            <input type="text" class="form-control" name="event-info" placeholder="Event Info" required>
        </div>
        <div class="form-group">
            <label for="number">Event Number (Top to Bottom)</label>
            <input type="number" class="form-control" name="number" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

@section('javascript')
    <script>
        document.getElementById("nav-admin").className = "active";
    </script>
@endsection

