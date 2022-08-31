<?php

namespace App\Http\Controllers;

use App\Models\Livreur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LivreurCtrl extends Controller
{

    public function test()
    {

    }
    
   public function apilivreur()
    {
        return Livreur::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Livreur::latest()->paginate(5);
      $livreur = Livreur::all()->where('id_user', Auth::user()->id);

        return view('sl.index',compact('records'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
   
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sl.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|min:3|max:255',
            'prenom' => 'required|min:4|max:4096',
            'numtel' => 'required',
            'password' => 'required',
            'ville' => 'required|min:3|max:255',
            'id_user'=> 'integer',
        ]);
        $input = $request->all();
        Livreur::create($input);

        return redirect()->route('livreurs.index')->with('success','delivery created successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livreur  $livreur
     * @return \Illuminate\Http\Response
     */
    public function show(Livreur $livreur)
    {
        return view('sl.show',compact('livreur'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livreur  $livreur
     * @return \Illuminate\Http\Response
     */
    public function edit(Livreur $livreur)
    {
        return view('sl.edit',compact('livreur'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livreur  $livreur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livreur $livreur)
    {
        $request->validate([
            'nom' => 'required|min:3|max:255',
            'prenom' => 'required|min:4|max:4096',
            'numtel' => 'required',
            'password' => 'required',
            'ville' => 'required|min:3|max:255'
        ]);
        $input = $request->all();
        
        $livreur->update($input);
        return redirect()->route('livreurs.index')->with('success','Delivery updated successfully');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livreur  $livreur
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $product = Livreur::findOrfail($id);
        $product->delete();
        return redirect()->route('livreurs.index')->with('danger', 'Aéroport supprimé !');

    }
}
