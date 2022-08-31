@extends('vendeur.listproducts')
@section('content')
<div align="right">
    <a href="{{url('/products/create')}}"  class="btn btn-success"  >Add Product</a>
</div>
<div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h3 class="text-white text-capitalize ps-3" align="center">Products table </h3>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
              @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
  
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price in Sold</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">quantity</th>
                      <th class="text-secondary opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($records as $record)
                  
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="/uploads/{{ $record->image }}" width="100px" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $record->nom }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <p class="text-xs text-secondary mb-0">{{ substr($record->desc,0,200) }}</p>

                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $record->prix }} TND</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $record->solde }} TND</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $record->quantite }}</span>
                      </td>
                      <td class="align-middle">
                      <a  href="{{ route('products.show',$record->id) }}"><img src="../assets/img/show.png" height ="20" width="20" /></a>
                <a href="{{ route('products.edit',$record->id) }}"><img src="../assets/img/edit.png" height ="20" width="20" /></a>
             
                    <a type="submit" class="servideletebtn" data-id="{{$record->id}}"><img src="../assets/img/delete.png" height ="20" width="20" /></a>
                    <!-- <a href="{{url('/products/create')}}"   ><img src="../assets/img/add1.png" height ="20" width="20" /></a>                 -->
                      
                  </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>


 
@endsection
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>
</script>
<script>
    $(document).ready(function (){
        $('.servideletebtn').click(function (e){
            e.preventDefault();
            var pegawaiid = $(this).attr('data-id');
            swal({
  title: "Are you sure?",
  text: "This Product will be permanently deleted ! ",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location="/delete/"+pegawaiid+""
    swal("Yes! Your product has been deleted !", {
      icon: "success",
    });
  } else {
    swal("Your Product is safe !");
  }
});
            });
});

</script>



