@extends('vendeur.listproducts')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" align="center" >
            <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
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
					<h2 class="text-white text-capitalize ps-3"  align="center">Edit Product </h2>
					<p class="mb-0 text-white ps-3">
                   
					  </p>
				  </div>
				</div>
				<div class="card-body">
			
                  
                <form action=" {{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data" > 
        @csrf    
        @method('PUT')
         <div cl4="row" >
            <div class="col-xs-12 col-sm-12 col-md-12 " >
                <div class="form-group" >
                    <strong>Name :  </strong>
                    <div class="centre"><input type="text" text-align="center" name="nom" value="{{ $product->nom }}" class="form-control" placeholder="Post Nom">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description : </strong>
                    <textarea class="form-control" name="desc" placeholder="Post Desc">{{ $product->desc }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price : </strong>
                    <input type="text" name="prix" value="{{ $product->prix }}" class="form-control" placeholder="Post Prix">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price in Sold : </strong>
                    <input type="text" name="solde" value="{{ $product->solde }}" class="form-control" placeholder="Post Solde">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>quantity : </strong>
                    <input type="text" name="quantite" value="{{ $product->quantite }}" class="form-control" placeholder="Post quantite">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>picture : </strong>
                    <input type="file" name="image" class="form-control" placeholder="Post Image" onchange="previewFile(this)">
                    <img id="previewImg" src="/uploads/{{$product->image }}" width="200px">
                 </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a href="{{route('products.index')}}"  class="btn btn-primary" >Back</a>
              <button type="submit" class="btn btn-info">Update Post</button>
          
        
                </div>
                 </div>
                 </form>
                  
				</div>
			  </div>
			</div>
		  </div>


    
   
    
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