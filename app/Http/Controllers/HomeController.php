<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        switch ($user->id_roles) {
            case '2':
                return view('users.admins.index');
                break;

            case '':
                return view('error', compact('error'));
                break;
            
            default:
            $user = DB::table('people')->where('id_users', $user->id)->first();
            return view('users.show', compact('user'));
                break;
        }
    }
    public function historial()
    {
        return view('historial');
    }
}
