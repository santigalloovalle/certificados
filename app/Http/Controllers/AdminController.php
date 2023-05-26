<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\People;

use App\Models\User;

use App\Models\Role;

use App\Models\Document;

use App\Models\Contract;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }
     
    public function index()
    {
        $people = Auth::user();
        if ($people->id_roles != 2) {
            return redirect(route('users.index'));
        }
        return view('users.admins.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $people = new People();  
        $people->id_users = $request->name;        
        $people->id_documents = $request->type;
        $people->doc = $request->doc;
        $people->id_roles = $request->role; 
        $people->id_contracts = $request->contract;   
        $people->date_i = $request->date_i;
        $people->date_f = $request->date_f;
        $people->onus = $request->onus;
        $people->area = $request->area;
        $people->salary = $request->salary;
        $people->pay_per_hour = $request->pay_per_hour;
        $people->id_users=$request->id_users;

        //$work->id_redes = $request->id_redes;

        $people->save();

        return redirect(route('users.admins.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $people = People::find($id);
        $users = User::find($id);
        if ($users->id_roles != 2) {
            return redirect(route('users.index'));
        }
        return view('users.admins.show', compact('people','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $people = People::find($id);
        $users = User::find($id);
        $roles = Role::all();
        $contracts = Contract::all();
        $documents = Document::all();
        $people2 = Auth::user();
        if ($people2->id_roles != 2) {
            return redirect(route('users.index'));
        }
        return view('users.admins.edit', compact('people','users','roles'
        ,'documents','contracts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $people = People::find($id);
        $users = User::find($id);
        $users->name = $request->name;        
        $people->id_documents = $request->type;
        $people->doc = $request->doc; 
        $people->id_contracts = $request->contract;   
        $people->date_i = $request->date_i;
        $people->date_f = $request->date_f;
        $people->onus = $request->onus;
        $people->area = $request->area;
        $people->salary = $request->salary;
        $people->pay_per_hour = $request->pay_per_hour;
        $users->id_roles = $request->role;
        $people->id_users=$request->id_users;
        $people->save();
        $users->save();

        return redirect(route('admins.show', $id));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function histories()
    {
        $users = User::all();
        $roles = Role::all();
        $people = Auth::user();
        if ($people->id_roles != 2) {
            return redirect(route('users.index'));
        }
        return view('users.admins.histories', compact('users','roles'));

    }

    public function certificates()
    {
        $people = Auth::user();
        if ($people->id_roles != 2) {
            return redirect(route('users.index'));
        }
        return view('users.admins.certificates');
    }

    public function show_users()
    {
        $users = User::all();
        $roles = Role::all();
        $people = Auth::user();
        if ($people->id_roles != 2) {
            return redirect(route('users.index'));
        }
        return view('users.admins.show_users', compact('users','roles'));

    }
    
}
