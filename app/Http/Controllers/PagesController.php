<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class PagesController extends Controller
{
    private function loadContentToData()
    {
        $content = \App\PageContent::all();
        $data = [];
        $data['content'] = $content;
        return $data;
    }
	public function getLogin(Request $request = null)
	{
        $data = $this->loadContentToData();
		return view('auth/login', $data);
	}

	public function getRegister(Request $request = null)
	{
        $data = $this->loadContentToData();
		// return view('auth/register', $data);
        return $this->getLogin($request);
	}

	public function getHome(Request $request) 
	{
        $data = $this->loadContentToData();
		return view('pages/home', $data);
	}

	public function getContact(Request $request)
	{
        $data = $this->loadContentToData();
        return view('pages/contact', $data);
	}


	public function getAbout(Request $request)
	{
        $data = $this->loadContentToData();
        return view('pages/about', $data);
	}

	public function getEvents(Request $request)
	{
        $data = $this->loadContentToData();
        $events = \App\Event::all()->sortBy('number');
        $data['events'] = $events;
		return view('pages/events', $data);
	}

	public function getPrivateLessons(Request $request)
	{
        $data = $this->loadContentToData();
        return view('pages/private-lessons', $data);
	}

	public function getMusikGarten(Request $request)
	{
        $data = $this->loadContentToData();
        return view('pages/musikgarten', $data);
	}

    public function getAdmin(Request $request)
    {
        $data = $this->loadContentToData();
        return view('pages/admin', $data);
    }

    public function getAdminEvents(Request $request)
    {
        $data = $this->loadContentToData();
        $events = \App\Event::all()->sortBy('number');
        $data['events'] = $events;
        return view('pages/admin-events', $data);
    }

    public function postAdminEventsCreate(Request $request)
    {
        $newEventInfo = $request->input('event-info');
        $newNumber = $request->input('number');
        $newNumberInt = (int)$newNumber;

        $currentEvents = DB::select('SELECT * FROM events');

        foreach($currentEvents as $currentEvent){
            if ($currentEvent->number >= $newNumberInt){
                DB::update('UPDATE events SET number = ? WHERE id = ?', [++$currentEvent->number, $currentEvent->id]);
            }
        }
        $event = new Event();
        $event->eventInfo = $newEventInfo;
        $event->number = $newNumber;
        $event->save();

        $currentNumbersArray = [];
        foreach($currentEvents as $currentEvent){
            array_push($currentNumbersArray, $currentEvent->number);
        }
        $newNum = 1;
        while(count($currentNumbersArray) > 0){
            $min = min($currentNumbersArray);
//            DB::update('UPDATE events SET number = ? WHERE number = ?', [$newNum, $min]);
            $newNum++;
            $i = 0;
            while($i < count($currentNumbersArray)){
                if ($currentNumbersArray[$i] == $min){
                    array_splice($currentNumbersArray, $i, 1);
                }
                $i++;
            }

        }
        return $this->getAdminEvents($request);
    }

    public function postAdminEventsDelete(Request $request)
    {
        $event = \App\Event::find($request->input('id'));
        $event->delete();

        return $this->getAdminEvents($request);
    }


    public function postAdminContent(Request $request)
    {
        \App\PageContent::updateContent($request->input('id'), $request->input('newContent'));

        return \Illuminate\Support\Facades\Redirect::back();
    }

    /////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////

    public function getAdminContentHome(Request $request)
    {
        $data = $this->loadContentToData();
        return view('pages/admin-content-home', $data);
    }

    public function getAdminContentMusikgarten(Request $request)
    {
        $data = $this->loadContentToData();
        return view('pages/admin-content-musikgarten', $data);
    }

    public function getAdminContentPrivateLessons(Request $request)
    {
        $data = $this->loadContentToData();
        return view('pages/admin-content-private-lessons', $data);
    }

    public function getAdminContentEvents(Request $request)
    {
        $data = $this->loadContentToData();
        return view('pages/admin-content-events', $data);
    }

    public function getAdminContentAbout(Request $request)
    {
        $data = $this->loadContentToData();
        return view('pages/admin-content-about', $data);
    }

    public function getAdminContentContact(Request $request)
    {
        $data = $this->loadContentToData();
        return view('pages/admin-content-contact', $data);
    }

    public function getAdminContentSideBar(Request $request)
    {
        $data = $this->loadContentToData();
        return view('pages/admin-content-side-bar', $data);
    }


}
