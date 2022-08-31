<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductCtrl;
use App\Http\Controllers\LivreurCtrl;
use App\Http\Controllers\ProfilevenderController;
use App\Http\Controllers\CommentairsController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PasserCommandeController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ServiceCtrl;

//  le 1 ere page 
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'App\Http\Controllers\ProductCtrl@index2');
Route::post('/','App\Http\Controllers\ProductCtrl@addcommentaires');


// search product 
Route::get('/search',[ShopController::class, 'search'])->name('search');
Route::get('/listsearchproduct',[ProductCtrl::class, 'index3'])->name('listsearchproduct');
Route::get('/listservice',[ServiceCtrl::class, 'indexservice'])->name('listservice');



//panier et commande  
Route::get('cart', [ProductCtrl::class,'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductCtrl::class,'addToCart'])->name('add-to-cart');
Route::patch('update-cart', [ProductCtrl::class,'updatepanier']);
Route::get('remove-from-cart',[ProductCtrl::class,'remove'])->name('remove-from-cart');


//profile vendeur 
Route::get('/profile', function () {
    return view('vendeur/profile');
})->name('profile');

//rote services
Route::get('/services', function () {
    return redirect('/services');
});
Route::resource('services', ServiceCtrl::class);


Route::get('/deleteservice', [ServiceCtrl::class, 'destroy'])->name('deleteservice');

//products route
Route::get('/products', function () {
    return redirect('/products');
});
Route::resource('products', ProductCtrl::class);
Route::get('/delete/{id}', [ProductCtrl::class, 'destroy'])->name('delete');

Route::get('/product-details/{id}', [ProductCtrl::class, 'productdetails'])->name('product-details');


// partie commentaire utilisateur 
Route::post('/addcommentaires',[ProductCtrl::class,'addcommentaires'])->name('addcommentaires');
Route::get('/destroycommenter/{id}',[ProductCtrl::class,'destroycommenter'])->name('destroycommenter');
Route::get('/modifcommenter',[ProductCtrl::class,'modifcommenter'])->name('modifcommenter');


// partie admin 

//blade tout les utilisateurs
Route::get('/listdelivery', [DashboardController::class, 'tousutilisateurs'])->name('listdelivery');

Route::get('/bloqueUser/{id}', [DashboardController::class, 'bloqueUser'])->name('bloqueUser');
Route::get('/debloqueUser/{id}', [DashboardController::class, 'debloqueUser'])->name('debloqueUser');


Route::get('/listcommend', [ProfilevenderController::class, 'listcommend'])->name('listcommend');
// Route::get('/noconfirmedproducts', [ProfilevenderController::class, 'noconfirmedproducts'])->name('noconfirmedproducts');
Route::get('/acceptecommande/{id}', [ProfilevenderController::class, 'acceptecommande'])->name('acceptecommande');
Route::get('/refusecommande/{id}', [ProfilevenderController::class, 'refusecommande'])->name('refusecommande');




Route::get('/noconfirmedproducts',[ProductCtrl::class, 'total'])
->name('noconfirmedproducts');





Route::get('/novalidproducts/{id}', [ProductCtrl::class, 'novalidproducts'])->name('novalidproducts');
Route::get('/validproducts/{id}', [ProductCtrl::class, 'validproducts'])->name('validproducts');



Route::get('/delivery', function () {
    return view('admin/deliverylist');
})->name('delivery');

route::post('/passercommand',[PasserCommandeController::class,'passercomm'])
->name('passercommande');


//partie societe de livraison 
Route::get('/livreurs', function () {
    return redirect('/livreurs');
});
Route::resource('livreurs', LivreurCtrl::class);
Route::get('/destroy/{id}', [LivreurCtrl::class, 'destroy'])->name('destroy');

Route::get('/listcommendSL', [PasserCommandeController::class,'listcommendSL'])->name('listcommendSL');

Route::get('/invoice/{id}', [PasserCommandeController::class, 'facture'])->name('facture');



//profile vendeur 
Route::get('/profilesl', function () {
    return view('sl/profile');
})->name('profilesl');

Route::get('/acc', [ProfilevenderController::class, 'acc'])->name('acc');
Route::post('/acc/update', [ProfilevenderController::class, 'UpdateProfile'])->name('acc.update');


//auth route for both
Route::group(['middleware' =>['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard')->middleware('verified');
// Route::get ( '/dashboard' ,'App\Http\Controllers\DashboardController@statistics')->name('dashboard');
      
});

 Route::get('/charts1', [ChartController::class,'index'])->name('charts1');
 Route::get('/charts2', [ChartController::class,'index2'])->name('charts2');
 Route::get('/charts3', [ChartController::class,'index3'])->name('charts3');
 Route::get('/charts4', [ChartController::class,'index4'])->name('charts4');


// Route::get('/dashboard', [ChartController::class,'index'])->name('charts');
// Route::get('/dashboard', [ChartController::class,'index2'])->name('charts');

require __DIR__.'/auth.php';
