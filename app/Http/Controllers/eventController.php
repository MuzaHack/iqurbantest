<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

use Illuminate\Support\Facades\Session;

class eventController extends Controller
{
    function addEvent(Request $req){


        $req->validate([

            'organization_name'=>'required',
            'organization_type'=>'required',
            'bank_name'=>'required',
            'account_name'=>'required',
            'account_no'=>'required',
            'event_title'=>'required',
            'event_description'=>'required',
            'event_location'=>'required',
            'event_contact'=>'required',
            'livestock_price'=>'required',
            'image' => 'required | mimes:jpg,png,jpeg | max: 10000'
        
        ]);

        $eventimage = time().'-'.$req->name.'.'.$req->image->extension();

        $req->image->move(public_path('img') , $eventimage);

        $a = Session::get('loginid');

        $event = new Event;
        $event -> organization_name=$req->organization_name;
        $event -> organization_type=$req->organization_type;
        $event -> bank_name=$req->bank_name;
        $event -> account_name=$req->account_name;
        $event -> account_no=$req->account_no;
        $event -> event_type=$req->event_type;
        $event -> event_date=$req->event_date;
        $event -> event_title=$req->event_title;
        $event -> event_description=$req->event_description;
        $event -> event_location=$req->event_location;
        $event -> event_contact=$req->event_contact;
        $event -> event_image=$req->event_image;
        $event -> livestock_type=$req->livestock_type;
        $event -> livestock_price=$req->livestock_price;
        $event -> event_image=$eventimage;
        $event -> user_id=$a;
        $event->save();

        return view ('eventcreated');
    }


    function list(){

        $a = Session::get('loginid');

        $data = event::all()->where('user_id',$a);
        return view('registeredevent',['eventsdata'=>$data]);
        
        //$data = DB::table('events')->get();
        //$data = events::all()->toArray();
        //return view('registeredevent', ['events' => $data]);

        
    }

    function event(){

        $data = event::all();
        return view('eventlist',['eventsdata'=>$data]);
        
    }

    function deleteconfirm($id){

        $data = event::find($id);
        return view('eventdeleteconfirmation',compact('data'));
    }

    function delete($id){

        $data = event::find($id);
        $data -> delete();
        return redirect('registeredevent');
        //return view('registeredevent');
        //return event::find($id);
    }

    function eventdetail($id){

        //return event::find($id);
        $data = event::find($id);
        return view('eventdetails',['events'=>$data]);

    }

    //function participants($id){


    //    $data = order::all()->where('event_id',$id);
    //    return view('participants',['participant'=>$data]);

   // }


    function viewevent($id){

        //return event::find($id);
        $data = event::find($id);
        return view('viewevent',['events'=>$data]);

    }


    function edit($id){

        $data = event::find($id);
        return view('editevent',['events'=>$data]);
    }

    

    function update(Request $req){

        $a = Session::get('loginid');

        $event = event::find($req->id);
        $event -> organization_name=$req->organization_name;
        $event -> organization_type=$req->organization_type;
        $event -> bank_name=$req->bank_name;
        $event -> account_name=$req->account_name;
        $event -> account_no=$req->account_no;
        $event -> event_type=$req->event_type;
        $event -> event_date=$req->event_date;
        $event -> event_title=$req->event_title;
        $event -> event_description=$req->event_description;
        $event -> event_location=$req->event_location;
        $event -> event_contact=$req->event_contact;
        $event -> event_image=$req->event_image;
        $event -> livestock_type=$req->livestock_type;
        $event -> livestock_price=$req->livestock_price;
        $event -> user_id=$a;
        $event->save();

        return redirect('/registeredevent');
    }

    function index(){

        $data = event::all();
        return view('eventlist',['events'=>$data]);
    }


}
