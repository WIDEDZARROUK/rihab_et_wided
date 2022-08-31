<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Commadmins;
use App\Models\Product;

class ProfilevenderController extends Controller
{
    public function acc()
    {
        return view('vendeur.profile');
    }

    public function UpdateProfile(Request $request){
        $user=User::find(Auth::user()->id);
        if($user){
           $user->name=$request->name;
           $user->email=$request->email; 
           $user->imagevendeur=$request->imagevendeur;
           $user->nomsociete=$request->nomsociete;
           $user->prenom=$request->prenom;
           $user->numerosiret=$request->numerosiret;
           $user->numerocart=$request->numerocart;
           $user->phone=$request->phone;
           $user->description=$request->description;
           $user->address=$request->address;
           

           $user->save();
           return Redirect()->back()->with('success', 'User Profile Is update
                Successfully');
      }
      else {  return Redirect()->back();  }
   }

  //  public function listvendor()
  //  {
    
  //   $user = User::all()
  //   ->where('role_id',2)
  //   ->where('statut', 1);
  //   return view('admin.vendorlist', ['records'=> $user]);
  //  }
   
//   
  

 
//    public function debloquelistdelivery()
//    {
    
//     $user = DB::table('users')
//     ->join('role_user', 'users.id', '=', 'role_user.user_id')
//     ->join('roles', 'role_user.role_id', '=', 'roles.id')
//     ->where('role_user.role_id', 3)
//     ->where('users.statut',0)
//     ->select('users.*','role_user.*');

//     $user = $user->get();

// return view('admin.debloquerdelivery', ['donnees'=> $user]);

//    }

 
   

  public function listcommend()
  {
    $commadmins = Commadmins::all();
    return view ('admin.list-commend', ['commadmins'=> $commadmins]);
  }

  
  public function acceptecommande(Request $req, $id)
    {
      $commadmins = Commadmins::find($id);
      $commadmins->statut=1;
      $commadmins->save();
      return Redirect()->back()->with('success', 'commande passée');
    }
    
  public function refusecommande( Request $req, $id)
      {
        $commadmins = Commadmins::find($id);
        $commadmins->statut = 0;
        $commadmins->save();
        return Redirect()->back()->with('success', 'commande refusé');
      }

// public function noconfirmedproducts()
  // {
  //     return view ('admin.noconfirmedproducts');
  // }

  //  public function listdelivery()
//    {
    
//     $user = DB::table('users')
//     ->join('role_user', 'users.id', '=', 'role_user.user_id')
//     ->join('roles', 'role_user.role_id', '=', 'roles.id')
//     ->where('role_user.role_id', 3)
//     ->where('users.statut',1)
//     ->select('users.*','role_user.*');

// $user = $user->get();

// return view('admin.deliverylist', ['donnees'=> $user]);

//    }
}
