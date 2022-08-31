<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ShopController extends Controller
{
    public function search(Request $request)
    {
        $request->validate([
            'query'  =>  'min:3',
    
            ]);

        $query = $request->input('query');

        $products = Product::where('nom', 'like', "%$query%")->paginate(10);

        return view('vendeur.search',compact('products'));
    }

}
