<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Mikrotik\Connection;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $API =new Connection();
        if ($API->connect('45.179.197.61', 'hotspot', '12345')) {
        $usermk = $API->comm("/ip/hotspot/active/getall");

        //dd($users['user']);
        
        }
        
        $user = User::all();
        $customer = Customer::all();
      //return view('dashboard.pages.main' , ['user'=> $user]);
        return view('dashboard.pages.main' )->with('user',$user)->with('usermk',$usermk)->with('customer',$customer);
        //return view('dashboard.pages.main');
        //return view('home');
    }

    public function getmkUsers(){
        $API =new Connection();
        if ($API->connect('45.179.197.61', 'hotspot', '12345')) {
        $usermk = $API->comm("/ip/hotspot/active/getall");

        //dd($users['user']);
        
        }
        return view('dashboard.pages.customer.customer' , ['usermk'=> $usermk]);
    }
}
