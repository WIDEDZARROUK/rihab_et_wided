<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('client')){
            return view('client.clientdashboard');
        }
        elseif(Auth::user()->hasRole('vendeur')){

            return view('vendeur.statistique');
        }
        elseif(Auth::user()->hasRole('sl')){
          return view('sl.sldashboard');
      }

      elseif(Auth::user()->hasRole('admin')){
       
        $users= DB::table('users')->count( );
        $products= DB::table('products')->count( );
        $commentairs= DB::table('commentairs')->count( );
        $commandes=DB::table('commadmins')->count( );
        return view('dashboard',compact('users','products','commentairs','commandes'));
        
      }
    }

   public function tousutilisateurs()
   {
    $user1 = User::all()
         ->where('statut',1);//debloque

    $user2 = User::all()   
        ->where('statut',0);//bloquée

    $records=User::all();

    return view('admin.deliverylist',['user1'=>$user1,'user2'=>$user2,'records'=>$records]);
   }

   public function bloqueUser( Request $req, $id){

    $user = User::find($id);
    $user->statut = 0;
    $user->save();
    return Redirect()->back()->with('success', 'bloquée utilisateurs');
   }

 public function debloqueUser(Request $req, $id)
  {
    $user = User::find($id);
    $user->statut=1;
    $user->save();
    return Redirect()->back()->with('success', 'debloquée utilisateurs');
  }
}
