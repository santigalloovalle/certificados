<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\People;

use App\Models\User;

use App\Models\Document;

class PeopleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $user = new User();
        $user->id = $request->name;
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
        $user->id=$request->id_users;

        //$work->id_redes = $request->id_redes;

        $people->save();

        return redirect(route('users.index'));
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
        return view('users.show', compact('people','users'));
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
        $documents = Document::all();
        return view('users.edit', compact('people','users','documents'));
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
            'doc' => 'required|min:10|max:12',
            'type' => 'required|in:2,3,4,5',
            'date' => 'required|before_or_equal:today',
        ],[
            'doc.required' => 'Se requiere número de documento',
            'type.in' => 'Se requiere tipo de documento',
            'date.required' => 'Se requiere fecha de expedición del documento',
            'date.before' => 'La fecha de expedición del documento no puede exceder la fecha actual',
            'doc.min' => 'Caracteres mínimos:10',
            'doc.max' => 'Caracteres máximos:12',
        ]);

        $people = People::find($id);
        $users = User::find($id);
        $people->id_documents = $request->type;
        $people->doc = $request->doc; 
        $people->date = $request->date;
        $users->id = $request->id_users;
        $people->save();
        $users->save();

        return redirect(route('home'));
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
}
