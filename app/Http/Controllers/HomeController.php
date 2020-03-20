<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
        if (Auth::user()->id != 1) {
            return redirect('http://google.com');
        } else {
            return view('home');
        }
    }

    public function list()
    {
        // dd('ini kesini');
        $users = User::all();

        return view('post/list', compact('users'));
    }
}
