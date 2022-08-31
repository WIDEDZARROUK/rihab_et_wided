@extends('sl.adddelivery')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
		  <div class="row min-vh-80">
			<div class="col-6 mx-auto">
			  <div class="card mt-4">
				<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
				  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
					<h2 class="text-white text-capitalize ps-3"  align="center">Show delivery person</h2>
					<p class="mb-0 text-white ps-3">
                   
					  </p>
				  </div>
				</div>
				<div class="card-body">
			
                  
               <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>first Name :  </strong>
                {{ $livreur->prenom }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>last Name :  </strong>
                {{ $livreur->nom }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone Number :  </strong>
                {{ $livreur->numtel }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>password:</strong>
                {{ $livreur->password }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>City :  </strong>
                {{ $livreur->ville }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <a href="{{route('livreurs.index')}}"  class="btn btn-danger" >Back</a>
            </div>
    </div>
                  
				</div>
			  </div>
			</div>
		  </div>
    
@endsection