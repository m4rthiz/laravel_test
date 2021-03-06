<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Calendar;

class EventController extends Controller
{
    public function index() {
        $events = [];
        $data = Event::all();
        if ($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date . ' +1 day')
                );
            }
        }
        $calendar = Calendar::addEvents($events);

//        $calendar = \Calendar::addEvents($events)
//                             ->setOptions([ //set fullcalendar options
//                                 'header' => array('left' => 'prev,next today', 'center' => 'title', 'right' => ''),
//
//                                 'locale' => 'fr',
//                                 'editable'=> true,
//                                 'navLinks'=> true,
//                                 'selectable'  => true,
//                                 'defaultView' => 'month'
//                             ]);  //add an array with addEvents



        return view('calendar', compact('calendar'));
    }
}
