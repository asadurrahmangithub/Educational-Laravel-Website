<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventHeader;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function header(){
        return view('admin.event.header-event',[
            'eventHeader' => EventHeader::first()
        ]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'event_title' => 'required',
            'event_subtitle' => 'required',
            'image' => 'nullable',
        ]);
        $eventHeader = EventHeader::first();
        if ($eventHeader){
            $eventHeader->event_title = $validated['event_title'];
            $eventHeader->event_subtitle = $validated['event_subtitle'];
            if ($request->file('image')) {
                if (file_exists($eventHeader->image)) {
                    unlink($eventHeader->image);
                }
                $eventHeader->image = $this->image($request);
            }
            $eventHeader->save();
            return redirect()->back()->with('message','Event Header Section Update Successfully');
        }
        else{
            EventHeader::create([
                'event_title' =>$validated['event_title'],
                'event_subtitle' =>$validated['event_subtitle'],
                'image' =>$this->image($request),
            ]);
            return redirect()->back()->with('message','Event Header Section Add Successfully');
        }
    }
    private function image(Request $request){
        $image = $request->file('image');
        $imageNewName = 'event-header'.'-'.rand().'.'.$image->extension();
        $directory = 'adminAssets/assets/custom-image/event-header/';
        $imgUrl = $directory.$imageNewName;
        $image->move($directory, $imageNewName);
        return $imgUrl;
    }

    /*********************** Add Event Section Function *******************************/
    public function index(){
        return view('admin.event.add-event');
    }
    public function saveEvent(Request $request){
        Event::saveEventContent($request);
        if($request->id){
            return redirect('admin/manage-event')->with('message','Event Section Update Successfully');
        }else{
            return redirect('admin/manage-event')->with('message','Event Section Add Successfully');
        }
    }
    public function manage(){
        return view('admin.event.manage-event',[
            'events' => Event::all(),
        ]);
    }
    public function edit($id){
        return view('admin.event.edit-event',[
            'event' => Event::find($id),
        ]);
    }
    public function status($id){
        Event::status($id);
        return back()->with('message','Status changes successfully');
    }
    public function deleteEvent($id){
        $event = Event::find($id);
        $event->delete();
        return redirect('admin/manage-event')->with('message','Event Section Delete Successfully');
    }

}
