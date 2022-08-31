@extends('vendeur.services.layout')
@section('content')
    <div class="row">
<div align="right">

    <a href="{{url('/services/create')}}"  class="btn btn-success"  >Ajouter</a>

    </div>
    <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h3 class="text-white text-capitalize ps-3" align="center">Tableau des services</h3>
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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nom service</th>
                      <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-7 ps-2">description</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">prix</th>

                  <th class="text-secondary opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
    
        @foreach ($records as $record)
        <tr>
         
            <td>{{ $record->nom }}</td>
             <td>{{ substr($record->desc,0,200) }}</td>
            <td>{{ $record->prix }}</td>
           
            <td>
                <!-- <a class="btn btn-sm btn-info" href="{{ route('services.show',$record->id) }}">Show</a> -->
                <!-- <a class="btn btn-sm btn-primary" href="{{ route('services.edit',$record->id) }}">Modifier</a> -->
                <a href="{{ route('services.edit',$record->id) }}"><img src="../assets/img/edit.png" height ="20" width="20" /></a>
                <a type="submit" class="servideletebtn" data-id="{{$record->id}}"><img src="../assets/img/delete.png" height ="20" width="20" /></a>
             
                <!-- <form action="{{ route('services.destroy',$record->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                </form> -->
            </td>
        </tr>
        @endforeach
    </table></div>
        </div>
    {!! $records->links() !!}
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
  title: "etes vous sûre !?",
  text: "Ce service sera définitivement supprimé! ",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location="/deleteservice"
    swal("oui! votre service a été supprimer!", {
      icon: "success",
    });
  } else {
    swal("Votre sevice est en sécurité !");
  }
});
            });
});

</script>