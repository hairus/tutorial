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

        return view('home');
    }

    public function list()
    {
        // dd('ini kesini');
        $users = User::get();

        return view('post/list', compact('users'));
    }

    public function input()
    {
        return view('input');
    }

    public function save(Request $request)
    {
        $simpan = new User();
        $simpan->name = $request->nama;
        $simpan->email = $request->emailla;
        $simpan->password = bcrypt($request->passwordta);
        $simpan->save();

        return redirect('/list');
    }
}
