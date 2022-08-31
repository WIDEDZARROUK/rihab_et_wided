@extends('vendeur.listproducts')
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
<div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> </h2>
               
                <link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
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
					<h2 class="text-white text-capitalize ps-3"  align="center">Add New Product</h2>
					<p class="mb-0 text-white ps-3">
                   
					  </p>
				  </div>
				</div>
				<div class="card-body">
			
                  
                
          <div class="row">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
             @csrf
                <div class="column">
                <strong>Name</strong>
              <input type="text" name="nom" class="form-control" placeholder=" name" value="{{ old('nom') }}">
              <strong>Price</strong>
              <input type="text" name="prix" class="form-control" placeholder=" Price" value="{{ old('prix') }}">
                           
                </div>
                <div class="column" >
                <strong>quantity</strong>
                <input type="text" name="quantite" class="form-control" placeholder="quantity" value="{{ old('quantite') }}">
                <strong>Price in Sold</strong>
                <input type="text" name="solde" class="form-control" placeholder="Price in Sold" value="{{ old('solde') }}">
                           
                </div>
                <strong>Description</strong>
                <textarea class="form-control" name="desc" placeholder=" Description">{{ old('desc') }}</textarea>
                
                <input type="text" name="nomsociete" value='{{Auth::user()->nomsociete}}' >
                <br>
                <strong>Picture</strong>
                <input type="file" name="image" class="form-control" onchange="previewFile(this)">
                <img id="previewImg" alt="profile image" src="../assets/img/addc.png" style="max-width:100px;margin-top:20px;" />
                <input type="text" name="id_user" value="{{ Auth::user()->id }}" hidden>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <a href="{{route('products.index')}}"  class="btn btn-danger" >Back</a>
                            <button type="submit" class="btn btn-info">Add </button>          
                </div>
                      
				</div>
			  </div>
			</div>
        </form>
		  </div>

<script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<script>
     function previewFile(input)
     {
            var file=$("input[type=file]").get(0).files[0];
            if(file)
            {
                var reader = new FileReader();
                reader.onload = function(){
               $('#previewImg').attr("src",reader.result);}
               reader.readAsDataURL(file);


            }
            
     }

</script>

@endsection