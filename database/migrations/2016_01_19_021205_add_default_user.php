<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $content = new \App\User();
        $content->name = 'Hello World';
        $content->email = 'hello@world.com';
        $content->password = '$2y$10$/7U9JsCGhrX38/eiG8nmruIa8KhBPzHcl6iigJGmCh9x2pDJunVaG';
        $content->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
