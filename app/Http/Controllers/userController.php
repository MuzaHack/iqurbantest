<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Session;
use Hash;

use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    function all(){

        return user::all();    
    }
    //return user::all();

    function list(){

        $data = user::find(1000);
        return view('profile',['userdata'=>$data]);
        
    }

    function login(Request $req){

        //return $user = user::find($req->use_email);

        //$user = User::where('user_email',$req->input('user_email'))->get();
  
       // if($user)
        //return ($user);

        //else
        //return view('home');
        $req->validate([

            'user_email'=>'required|email',
            'user_password'=>'required'
        
        ]);

        $user = User::where('user_email','=', $req->user_email)->first();

        if($user){
            if (Hash::check($req->user_password, $user->user_password)) {
                $req->session()->put('loginid',$user->id);
                return redirect('home');
            }
            else
                return back()->with('fail','Password not match.');
        }

        else
            return back()->with('fail','This email is not registered.');
        //$email -> user_email=$req->user_email;
        

       // if (DB::table('orders')->where('user_email', 1)->exists()) {
            //return view ('home');
        //}

    }

    function addUser(Request $req){

        $req->validate([

            'user_name'=>'required',
            'user_ic'=>'required',
            'user_email'=>'required|email|unique:users',
            'user_phone'=>'required',
            'user_address'=>'required',
            'user_password'=>'required | min:6'
        
        ]);

        $user = new User;
        $user -> user_name=$req->user_name;
        $user -> user_ic=$req->user_ic;
        $user -> user_email=$req->user_email;
        $user -> user_phone=$req->user_phone;
        $user -> user_address=$req->user_address;
        //$user -> user_password=$req->user_password;
        $user -> user_password = Hash::make($req->user_password);
      
        $res = $user->save();

        if($res)
            //return back() -> with('success','You have registered successfully');
            return view ('usercreated');

        else 
            return back() -> with('fail','Something is wrong');

        //return view ('usercreated');
    }

    function edit($id){

        $data = user::find($id);
        return view('editprofile',['events'=>$data]);
    }

    function update(Request $req){

        $user = user::find($req->id);
        $user -> user_name=$req->user_name;
        $user -> user_ic=$req->user_ic;
        $user -> user_email=$req->user_email;
        $user -> user_phone=$req->user_phone;
        $user -> user_address=$req->user_address;
        
        $user->save();

        return redirect('/profile');
    }


    public function profile(){

        $data = array();
        if (Session::has('loginid')) {
            $data = user::where('id', '=', Session::get('loginid'))->first();
        }
        return view('profile', compact('data'));
    }


    function logout(){

        if(Session::has('loginid'))
            Session::pull('loginid');

        return redirect('iqurban');
    }

    function pass($id){

        $data = user::find($id);
        return view('organize',['pass'=>$data]);
    }
}


