<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Commentairs;
use Illuminate\Support\Facades\Validator;

class CommentairsController extends Controller
{
    public function store(Request $request)
    {
        
        $comentaire = new Commentairs();
        $comentaire->post_id=$request->idPost;
        $comentaire->user_id=Auth::user()->id;
        $comentaire->comment_body=$request->body;
        $comentaire->name_user=Auth::user()->name;
        $comentaire->user_image=Auth::user()->imagevendeur;
        $comentaire->save();
        $commentaires=Commentairs::where('post_id', '=', $request->idPost)->get();
        $post=Product::find($request->idPost);
        return view('vendeur.product-details',['commentaires' =>$commentaires]); 
      
    }
}
