@extends('vendeur.listproducts')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> </h2>
               

            </div>
        </div>
    </div>
    <div class="row">
    <div class="container-fluid py-4">
		  <div class="row min-vh-80">
			<div class="col-6 mx-auto">
			  <div class="card mt-4">
				<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
				  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
					<h2 class="text-white text-capitalize ps-3"  align="center">Show Product </h2>
					<p class="mb-0 text-white ps-3">
                   
					  </p>
				  </div>
				</div>
				<div class="card-body">
			
                  
                <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name :   </strong>
                <p class="text-xs text-secondary mb-0">{{ $product->nom }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description :   </strong>
                <p class="text-xs text-secondary mb-0">{{ $product->desc }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price :   </strong>
                <p class="text-xs text-secondary mb-0"> {{ $product->prix }}</p>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price in Sold : </strong>
                <p class="text-xs text-secondary mb-0">{{ $product->solde }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>quantity :   </strong>
                <p class="text-xs text-secondary mb-0">{{ $product->quantite }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Picture: </strong>
                <img src="/uploads/{{ $product->image }}" width="300px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center"><br>
        <a href="{{route('products.index')}}"  class="btn btn-danger" >Back</a>
            </div>

    </div>
                  
				</div>
			  </div>
			</div>
		  </div>

        
                        
@endsection