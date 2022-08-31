<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ServiceCtrl extends Controller
{
    public function indexservice()
    {
        $records = Service::latest() 
        ->where('statut',1)
       ->paginate(5);
        return view('vendeur.listeservice',compact('records'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $records = Service::latest()->paginate(5);
            return view('vendeur.services.index',compact('records'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendeur.services.create');
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
            'nom' => 'min:3|max:255',
            'desc' => 'min:10|max:4096',
            'prix' => 'required|integer',
            'phone' => 'required|integer',


        ]);
        // $input->phone=Auth::user()->phone;

        
        $input = $request->all();
        Service::create($input);

        return redirect()->route('services.index')->with('success','services a cree .');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('vendeur.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'nom' => 'min:3|max:255',
            'desc' => 'min:10|max:4096',
            'prix' => 'integer',

        ]);
        $input = $request->all();
        
        $service->update($input);

        return redirect()->route('services.index')->with('success','services a cree .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $service->delete();
        // return redirect()->route('services.index')
        // ->with('success','services a suppimer');
        $service = Service::findOrfail($id);
        $service->delete();
        return redirect()->route('services.index')->with('danger', 'services a suppimer!');

    }
}
