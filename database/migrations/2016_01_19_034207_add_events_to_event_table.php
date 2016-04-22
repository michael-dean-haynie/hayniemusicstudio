<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEventsToEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $event = new \App\Event();
        $event->eventInfo = "This is an event(1)";
        $event->number = 1;
        $event->save();

        $event = new \App\Event();
        $event->eventInfo = "This is an event(2)";
        $event->number = 2;
        $event->save();

        $event = new \App\Event();
        $event->eventInfo = "This is an event(3)";
        $event->number = 3;
        $event->save();

        $event = new \App\Event();
        $event->eventInfo = "This is an event(4)";
        $event->number = 4;
        $event->save();

        $event = new \App\Event();
        $event->eventInfo = "This is an event(5)";
        $event->number = 5;
        $event->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
