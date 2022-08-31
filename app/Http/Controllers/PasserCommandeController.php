<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Commadmins;

use DB;

class PasserCommandeController extends Controller
{
    public function index()
    {
        return view('client.cart');
    }

    public function passercomm(Request $request)
    {
        
        $product = new Commadmins();
           
        $product->nom_user=Auth::user()->name;
        $product->nom_prduit=$request->nom_prduit;
        $product->image_produit=$request->image_produit;
        $product->prix_total=$request->prix_total;
        $product->nom_soc=$request->nom_soc;
        $product->adresse_user=Auth::user()->address;
        $product->phone_user=Auth::user()->phone;

        
        $product ->save(); 
        
        return redirect()->back()->with('success','Order Successfully');
      
    }
    
    public function listcommendSL()
    {
        // $commadmins = Commadmins::join('products', 'commadmins.nom_soc', '=', 
        // 'products.nomsociete')
        //  ->where('statut',1)
        //  ->get(['commadmins.*','products.*']);

      $commadmins = Commadmins::all()
      ->where('statut',1);

      return view ('sl.listcommende', ['commadmins'=> $commadmins]);
    }

    public function facture($id)
    {
        $commadmins = Commadmins::find($id);
     

        return view('sl.facture',['commadmins'=>$commadmins]);
    }

   

}
