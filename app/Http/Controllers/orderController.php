<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Event;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;

class orderController extends Controller
{
    //

    function addOrder(Request $req){


        $req->validate([

            'package_amount'=>'required',
            'order_name'=>'required'
            
        ]);

        $x = Session::get('loginid');

        $order = new order;
        $order -> package_amount=$req->package_amount;
        $order -> order_name=$req->order_name;
        $order -> order_date=$req->order_date;
        $order -> order_note=$req->order_note;
        //$order -> payment_proof=$req->payment_proof;
        $order -> user_id=$x;
        $order -> event_id=$req->event_id;
        $order->save();
        

        $latestorder = DB::table('orders')->max('id');

        //$data = order::find($latestorder);

        $a = DB::table('orders')
            ->where('id',$latestorder)
            ->value('event_id');


        $event = event::find($a);

        $amount = DB::table('orders')
            ->where('id',$latestorder)
            ->value('package_amount');

        $price = DB::table('events')
            //->select('event_id')
            ->where('id',$a)
            ->value('livestock_price');

        $total =  $price * $amount;

        $total = number_format((float)$total, 2, '.', '');

        $order -> order_total=$total;

        $order->save();

        //$data = DB::table('orders')
        //    ->join('events', 'orders.event_id', '=', 'events.id')
        //    ->join('orders', 'users.id', '=', 'orders.user_id')
        //    ->select('orders.*', 'events.*')
        //    ->where('event_id',$a)
        //    ->get();

        //return view ('confirmorder',['ordersdata'=>$order, 'eventdata'=>$event]);
        //return view ('confirmorder',['data'=>$data]);
        //return view('confirmorder', compact('order','event'));
        //return redirect()->route('confirmorder')->with( 'event', $event )
		//->with( 'order', $order );


        return view('confirmorder',['order'=>$order])
		->with( 'event', $event );
		//->with( 'order', $order );
    }


    function deletecurrorder($id){

        $a = DB::table('orders')
            ->where('id',$id)
            ->value('event_id');

        $data = order::find($id);

        $data -> delete();

        return redirect('viewevent/'.$a);

    }

    function submitorder(Request $req){

        $req->validate([

            'id' => 'required',
            'proof' => 'required | max: 10000'
        
        ]);


        $orderproof = time().'-'.$req->name.'.'.$req->proof->extension();

        $req->proof->move(public_path('payment proof') , $orderproof);

        $data = order::find($req->id);
        $data -> payment_proof = $orderproof;
        $data -> save();

        return view('home');
        
        
        
    }

    function orderlist(){

        $a = Session::get('loginid');

        $data = order::all()->where('user_id',$a);

        

        //$data = DB::table('orders')
        //    ->where('user_id',$a)
        //    ->get();

        //$data = (array)$data;

        //$data = DB::table('orders')
         //  ->join('events', 'orders.event_id', '=', 'events.id')
        //    ->join('orders', 'orders.id', '=', 'event.user_id')
        //    ->select('orders.*', 'events.*')
        //    ->where('orders.user_id',$a)
        //    ->get();

        return view('orderhistory', compact('data'));
            
        //return view('orderhistory',['ordersdata'=>$data]);
        
    }

    function orderdetail($id){

        
        $order = order::find($id);

        $a = DB::table('orders')
            ->where('id',$id)
            ->value('event_id');

        $event = event::find($a);

        return view('orderdetail', compact('order','event'));


    }


    function participants($id){


        $data = order::all()->where('event_id',$id);
        return view('participants',['participant'=>$data]);

    }

    
}
