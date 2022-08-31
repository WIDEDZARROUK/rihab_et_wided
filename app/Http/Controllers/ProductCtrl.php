<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Commentairs;
use DB;

class ProductCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Product::latest()->paginate(5);
      $produit = Product::all()->where('id_user', Auth::user()->id);
        return view('vendeur.index', ['records'=> $produit]) ->with('i', (request()->input('page', 1) - 1) * 5);
            
    }

    public function index2()
    { 
        $records =Product::all()
        ->where('statut',1);
        return view('welcome',['records'=>$records]);  
    }

     public function index3()
    {
        $records = Product::latest()
        ->where('statut',1)
        ->paginate(5);
        return view('client.searchlistproduit',compact('records'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    
    public function create()
    {
        return view('vendeur.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'min:3|max:255',
            'desc' => 'min:4|max:4096',
            'prix' => 'integer',
            'solde' => 'integer',
            'quantite'=> 'integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_user'=> 'integer',
            'nomsociete'=>'string',

        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $imageDestinationPath = 'uploads/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postImage);
            $input['image'] = "$postImage";
        }
        Product::create($input);
        return redirect()->route('products.index')->with('success','Produit créé avec succès.');
    }

    
    public function show(Product $product)
    {
        return view('vendeur.show',compact('product'));
    }

    
    public function edit(Product $product)
    {
        return view('vendeur.edit',compact('product'));
    }

   
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nom' => 'min:3|max:255',
            'desc' => 'min:4|max:4096',
            'prix' => 'integer',
            'solde' => 'integer',
            'quantite'=> 'integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nomsociete'=>'string'

        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $imageDestinationPath = 'uploads/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postImage);
            $input['image'] = "$postImage";
        }else{
            unset($input['image']);
        }
        $product->update($input);
        return redirect()->route('products.index')->with('success','Produit mis à jour avec succès');
    
    }

    
    public function destroy( $id)
    {
        $product = Product::findOrfail($id);
        $product->delete();
        return redirect()->route('products.index')->with('danger', 'supprimé !');

    }

    //les commentaires
    public function productdetails($id)
    {
        //$commentaires=Commentairs::where('post_id', '=', $request->idPost)->get();
        $commentaires = Commentairs::all();
        $comm= DB::table('commentairs')->count( );
        
        //$post=Product::find($request->post_id);
        //return view('vendeur.product-details',['commentaires' =>$commentaires]); 
        $product =  Product::find($id);
        return view('vendeur.product-details',['donnees'=>$product, 'commentaires'=>$commentaires,'comm'=>$comm]);

    }

    public function addcommentaires(Request $request)
    {

        $comentaire = new Commentairs();
        $comentaire->post_id=$request->post_id;
        $comentaire->user_id=Auth::user()->id;
        $comentaire->body=$request->body;
        $comentaire->user_name=Auth::user()->name;
        $comentaire->user_image=Auth::user()->imagevendeur;
        $comentaire->save();
        return redirect()->back()->with('success','Crée Commentaire');

    }
    public function destroycommenter( $id)
    {
        $product = Commentairs::findOrfail($id);
        $product->delete();
        return redirect()->back()->with('success', ' supprimé commentaire ');

    }
    public function modifcommenter( Request $request, Commentairs $comentaire)
    {
        $request->validate([
            'body' => 'min:3|max:255',
        ]);
        $input = $request->all();
        $comentaire->update($input);
        return redirect()->back()->with('success', ' Modifier commentaire ');


    }


         // partie panier et commande
         
         public function cart()
    {
        return view('client.cart');
    }
    
    public function addToCart($id)
    {
        $product = Product::find($id);
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "nom" => $product->nom,
                        "quantity" => 1,
                        "prix" => $product->prix,
                        "image" => $product->image,
                        "nomsociete" => $product->nomsociete
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Produit ajouté au panier !');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Produit ajouté au panier!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "nom" => $product->nom,
            "quantity" => 1,
            "prix" => $product->prix,
            "image" => $product->image
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Produit ajouté au panier!');
    }

    public function updatepanier(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Panier mis à jour avec succès!');
        }
    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            return redirect()->back();
        }
    }

  

  public function total()
  {
    $products1 = Product::all()
    ->where('statut',1);

    $products2 = Product::all()   
    ->where('statut',0);

    $records = Product::all();

     return view('admin.noconfirmedproducts',
     ['products1'=>$products1, 'products2'=>$products2,'records'=>$records]);
     
  }

  public function novalidproducts( Request $req, $id){

    $user = Product::find($id);
    $user->statut = 0;
    $user->save();
    return Redirect()->back()->with('success', 'produit non validé');
   }

   public function validproducts(Request $req, $id)
  {
    $user = Product::find($id);
    $user->statut=1;
    $user->save();
    return Redirect()->back()->with('success', 'debloquée utilisateurs');
  }

}
