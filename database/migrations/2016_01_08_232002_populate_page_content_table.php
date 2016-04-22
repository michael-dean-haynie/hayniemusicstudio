<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PopulatePageContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    $LI = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    //DO NOT CHANGE THE ORDER OF THESE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

        /*
        |------
        | Home
        |------
        */
        $content = new \App\PageContent();
        $content->page = "home";
        $content->content_name = "Jumbotron Text";
        $content->content = "Haynie Music Studio";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "home";
        $content->content_name = "MusikGarten Snippet";
        $content->content = $LI;
        $content->save();

        $content = new \App\PageContent();
        $content->page = "home";
        $content->content_name = "Private Lessons Snippet";
        $content->content = $LI;
        $content->save();

        $content = new \App\PageContent();
        $content->page = "home";
        $content->content_name = "Events Snippet";
        $content->content = $LI;
        $content->save();
        /*
        |-------------
        | MusikGarten
        |-------------
        */
        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "Page Title";
        $content->content = "MusikGarten";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "Page Sub-Title";
        $content->content = "Your Child Will Know Everything";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "Page Body";
        $content->content = $LI;
        $content->save();
        /*
        |-----------------
        | Private Lessons
        |-----------------
        */
        $content = new \App\PageContent();
        $content->page = "private-lessons";
        $content->content_name = "Page Title";
        $content->content = "Private Lessons";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "private-lessons";
        $content->content_name = "Page Sub-Title";
        $content->content = "Become a Virtuoso";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "private-lessons";
        $content->content_name = "Page Body";
        $content->content = $LI;
        $content->save();
        /*
        |--------
        | Events
        |--------
        */
        $content = new \App\PageContent();
        $content->page = "events";
        $content->content_name = "Page Title";
        $content->content = "Events";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "events";
        $content->content_name = "Page Sub-Title";
        $content->content = "You won't want to be late";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "events";
        $content->content_name = "Page Body";
        $content->content = $LI;
        $content->save();

        /*
        |-------
        | About
        |-------
        */
        $content = new \App\PageContent();
        $content->page = "about";
        $content->content_name = "Page Title";
        $content->content = "About";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "about";
        $content->content_name = "Page Sub-Title";
        $content->content = "We Do What We Love!";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "about";
        $content->content_name = "Page Body";
        $content->content = $LI;
        $content->save();

        /*
        |---------
        | Contact
        |---------
        */
        $content = new \App\PageContent();
        $content->page = "contact";
        $content->content_name = "Page Title";
        $content->content = "Contact";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "contact";
        $content->content_name = "Page Sub-Title";
        $content->content = "We Love to Hear From You!";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "contact";
        $content->content_name = "Page Body";
        $content->content = $LI;
        $content->save();

/////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////

        $content = new \App\PageContent();
        $content->page = "multiple";
        $content->content_name = "Email";
        $content->content = "email@address.com";
        $content->save();

/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////

        $content = new \App\PageContent();
        $content->page = "side-bar";
        $content->content_name = "Heading1";
        $content->content = "Practice at Home";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "side-bar";
        $content->content_name = "content1";
        $content->content = "<ul><li>links and stuff</li><li>even more stuff</li><li>an even loter of stuff</li></ul>";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "side-bar";
        $content->content_name = "Heading2";
        $content->content = "Topics of Interest";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "side-bar";
        $content->content_name = "content2";
        $content->content = "<ul><li>links and stuff</li><li>even more stuff</li><li>an even loter of stuff</li></ul>";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "side-bar";
        $content->content_name = "Heading3";
        $content->content = "Teaching Thoughts";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "side-bar";
        $content->content_name = "content3";
        $content->content = "<ul><li>links and stuff</li><li>even more stuff</li><li>an even loter of stuff</li></ul>";
        $content->save();

///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////

        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "class 1 heading";
        $content->content = "Music Makers At Home";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "class 1 sub-heading";
        $content->content = "Age to Age";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "class 1 content";
        $content->content = $LI;
        $content->save();

        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "class 2 heading";
        $content->content = "Music Makers Aound The World";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "class 2 sub-heading";
        $content->content = "Age to Age";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "class 2 content";
        $content->content = $LI;
        $content->save();

        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "class 3 heading";
        $content->content = "Music Makers Keyboard 1";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "class 3 sub-heading";
        $content->content = "Age to Age";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "class 3 content";
        $content->content = $LI;
        $content->save();

        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "class 4 heading";
        $content->content = "Music Makers Keyboard 2";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "class 4 sub-heading";
        $content->content = "Age to Age";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "class 4 content";
        $content->content = $LI;
        $content->save();

        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "class 5 heading";
        $content->content = "Music Makers Keyboard 3";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "class 5 sub-heading";
        $content->content = "Age to Age";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "musikgarten";
        $content->content_name = "class 5 content";
        $content->content = $LI;
        $content->save();

///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////

        $content = new \App\PageContent();
        $content->page = "private-lessons";
        $content->content_name = "quatrent 1 heading";
        $content->content = "Private Lessons";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "private-lessons";
        $content->content_name = "quatrent 1 content";
        $content->content = $LI;
        $content->save();

        $content = new \App\PageContent();
        $content->page = "private-lessons";
        $content->content_name = "quatrent 2 heading";
        $content->content = "Group Theory";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "private-lessons";
        $content->content_name = "quatrent 2 content";
        $content->content = $LI;
        $content->save();

        $content = new \App\PageContent();
        $content->page = "private-lessons";
        $content->content_name = "quatrent 3 heading";
        $content->content = "Arizona Study Program";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "private-lessons";
        $content->content_name = "quatrent 3 content";
        $content->content = $LI;
        $content->save();

        $content = new \App\PageContent();
        $content->page = "private-lessons";
        $content->content_name = "quatrent 4 heading";
        $content->content = "Recitals";
        $content->save();

        $content = new \App\PageContent();
        $content->page = "private-lessons";
        $content->content_name = "quatrent 4 content";
        $content->content = $LI;
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
