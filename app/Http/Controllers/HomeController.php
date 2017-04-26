<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $courses = Course::where('id',1)->first();
        return view('client.home.index')->with([
            'course' => $courses,
        ]);
    }
}
