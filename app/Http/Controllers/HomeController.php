<?php

namespace App\Http\Controllers;

use App\Course_category;
use Illuminate\Http\Request;
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
        if(Auth::user()->role == "admin"){
            //$category = Course_category::all();
            return view('admin.site_admin.course')->with([
                'url'=>'course',
                //'category'=>$category
            ]);
        }else{
            return redirect('teacher/blog');
        }

    }
}
