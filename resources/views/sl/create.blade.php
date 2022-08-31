@extends('sl.adddelivery')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2></h2>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container-fluid py-4">
		  <div class="row min-vh-80">
			<div class="col-6 mx-auto">
			  <div class="card mt-4">
				<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
				  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
					<h2 class="text-white text-capitalize ps-3"  align="center">Add a new delivery person</h2>
					<p class="mb-0 text-white ps-3">
                   
					  </p>
				  </div>
				</div>
				<div class="card-body">
			
                  
               <form action="{{ route('livreurs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
     <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>First Name</strong>
                <input type="text" name="prenom" class="form-control" placeholder="first Name" value="{{ old('prenom') }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Last Name</strong>
                <input type="text" name="nom" class="form-control" placeholder=" last Name" value="{{ old('nom') }}">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Phone Number</strong>
                <input type="text" name="numtel" class="form-control" placeholder="Phone Number" value="{{ old('numtel') }}">
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Password</strong>
                <input type="text" name="password" class="form-control" placeholder="password" value="{{ old('password') }}">
            </div>
        </div> <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>City</strong>
                <input type="text" name="ville" class="form-control" placeholder="City" value="{{ old('ville') }}">
            </div>
        </div>
        <input type="text" name="id_user" value="{{ Auth::user()->id }}" hidden>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <br>
        <a href="{{route('livreurs.index')}}"  class="btn btn-danger" >Back</a>
            
                <button type="submit" class="btn btn-info">Add </button>
        </div>
    </div>
</form>
                  
				</div>
			  </div>
			</div>
		  </div>


@endsection