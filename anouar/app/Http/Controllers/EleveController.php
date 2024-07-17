<?php

namespace App\Http\Controllers;

use App\Models\Activte;
use App\Models\Club;
use App\Models\Eleve;
use Illuminate\Http\Request;
use DB;
class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eleves=Eleve::all();
        return view('eleves/index',compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clubs=Club::all();
       
        return view('eleves/create',compact('clubs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate_data=$request->validate([
            'nom'=>'required|max:15',
            'prenom'=>'required|max:15',
            'id_club'=>'required',

        ]);
        Eleve::create($validate_data);
        return redirect()->route('eleves.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eleve=Eleve::findOrFail($id);
        $activites=DB::table('activtes')
        ->join('participations','participations.id_activite','activtes.id')
        ->where('id_eleve',$id)->get();
        return view('eleves/show',['eleve'=>$eleve,'activites'=>$activites]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clubs=Club::all();
        $eleve=Eleve::findOrFail($id);
        return view('eleves/edit',['clubs'=>$clubs,'eleve'=>$eleve]);
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
        $eleve=Eleve::findOrFail($id);
        $validate_data=$request->validate([
            'nom'=>'required|max:15',
            'prenom'=>'required|max:15',
            'id_club'=>'required',

        ]);
        $eleve->update($validate_data);
        return redirect()->route('eleves.index');
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
