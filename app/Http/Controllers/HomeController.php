<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use Auth;
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
        $banner= Banner::where('status','active')->limit(3)->orderBy('id','DESC')->get();
        return view('home')->with('banners',$banner);
    }


    public function logout(){
        // Session::forget('user');
        Auth::logout();
        request()->session()->flash('success','Logout successfully');
        return redirect('/');
    }
}
