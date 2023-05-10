<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\People;

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
        $people->id_users = $request->name;        
        $people->id_documents = $request->type;
        $people->doc = $request->doc;
        $people->id_roles = $request->role; 
        $people->id_contracts = $request->contract;   
        $people->salary = $request->salary;
        $people->pay_per_hour = $request->pay_per_hour;
        $people->id_users=$request->id_users;

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
    public function show(string $id)
    {
        $people = People::find($id);
        
        return view('users.show', compact('people'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $people = People::find($id);
        return view('users.edit', compact('people'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,string $id)
    {
        $people = People::find($id);
        
        $people->doc = $request->doc;
        $people->id_documents = $request->type;
        $people->save();

        return redirect(route('home'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        //
    }
}
