<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        return view('home');
    }

    public function show()
    {
        return view('index');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $posts = DB::table('technicians')->where('category','like', '%'.$search.'%')->paginate(2);
        return view('home',['posts' => $posts]);
    }

}
