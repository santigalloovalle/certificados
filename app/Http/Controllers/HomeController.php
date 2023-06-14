<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $people = Auth::user();
        switch ($people->id_roles) {
            case '2':
                return view('users.admins.index');
                break;
            case '1':
                $error = ['name'=>"423",'desc'=>"Locked"];
                $people = DB::table('people')->where('id_users', $people->id)->first();
                $users = Auth::user();
                if ($people->doc == '0') {
                    return redirect(route('people.edit',$people->id));
                }
                else{
                    if ($people->id_contracts == '0'){
                        return view('home');
                    }
                    elseif($users->id_roles == '1'){
                        return redirect(route('auth.error', compact('error')));
                    }
                    else{
                        return redirect(route('users.index', compact('people')));
                    }
                }
                break;
            default:
            return view('users.index');
            break;
        }
    }
    public function historial()
    {
        return view('historial');
    }

    public function error()
    {
        return view('auth.error');
    }
}
