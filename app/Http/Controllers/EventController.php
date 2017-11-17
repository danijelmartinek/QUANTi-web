<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function events()
    {
      $events = Event::orderBy('date', 'ASC')->where('status', '==', "1")->where('date', '>=', date("Y-m-d"))->get();
      $past_events = Event::orderBy('date', 'DESC')->where('status', '==', "1")->where('date', '<', date("Y-m-d"))->get();
    	return view('events', ['allEvents' => $events, 'allPastEvents' => $past_events]);
    }

}
