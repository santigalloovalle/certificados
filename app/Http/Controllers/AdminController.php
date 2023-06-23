<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\People;

use App\Models\User;

use App\Models\Role;

use App\Models\Document;

use App\Models\Contract;

use App\Models\Certificates;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $users = new User();
        $users->id = $request->name; 
        $users->last = $request->last;        
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
        $users->id=$request->id_users;

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
        $people2 = Auth::user();
        if ($people2->id_roles != 2) {
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

        $request->validate([
            'doc' => 'required|min:4|max:15',
            'type' => 'required|in:2,3,4,5',
            'role' => 'required|in:2,3,4,5,6',
            'contract' => 'required|in:2,3,4',
            'name' => 'required|min:2|max:100',
            'last' => 'required|min:2|max:100',
            'date_i' => 'required',
            'date_f' => 'required',
            'onus' => 'required',
            'area' => 'required',
            'salary' => 'required',
            'pay_per_hour' => 'required',
        ],[
            'doc.required' => 'Se requiere número de documento',
            'type.in' => 'Se requiere tipo de documento',
            'doc.min' => 'Caracteres mínimos:4',
            'doc.max' => 'Caracteres máximos:15',
            'name.min' => 'Caracteres mínimos:2',
            'name.max' => 'Caracteres máximos:100',
            'name.required' => 'Se requiere nombre',
            'last.min' => 'Caracteres mínimos:2',
            'last.max' => 'Caracteres máximos:100',
            'last.required' => 'Se requiere apellido',
            'role.in' => 'Se requiere rol',
            'contract.in' => 'Se requiere tipo de contrato',
            'onus.required' => 'Se requiere cargo',
            'area.required' => 'Se requiere área',
            'date_f.required' => 'Se requiere fecha de fin',
            'date:i.required' => 'Se requiere fecha de inicio',
            'salary.required' => 'Se requiere salario',
            'pay_per_hour.required' => 'Se requiere pago por hora',
        ]);

        $people = People::find($id);
        $users = User::find($id);
        $users->name = $request->name;   
        $users->last = $request->last;        
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
        $people->save();
        $users->save();
        
        $users = User::all();
        $roles = Role::all();
        $people = Auth::user();
        if ($people->id_roles != 2) {
            return redirect(route('users.index'));
        }
        
        return view('users.admins.show_users', compact('users','roles'));
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
        $certificate = Certificates::all();
        $people = People::all();        
        $people2 = Auth::user();
        if ($people2->id_roles != 2) {
            return redirect(route('users.index'));
        }
        return view('users.admins.histories', compact('users','roles','certificate','people')); 

    }

    public function certificates($id)
    {
        $users = DB::table('users')->where('id', $id)->first();
        $people = Auth::user();
        if ($people->id_roles != 2) {
            return redirect(route('users.index'));
        }
        return view('users.admins.certificates', compact('users'));
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
