@extends('admin.index')
@section('content')
<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h3 class="text-white text-capitalize ps-3" align="center">Delivery List </h3>
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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Picture</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">name Society</th>
                      <th class="text-secondary opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($donnees as $donnee)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="/uploads/{{$donnee->imagevendeur}}" width="100px" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$donnee->name}}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <p class="text-xs text-secondary mb-0">{{$donnee->email}}</p>

                      </td>
                      
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$donnee->nomsociete}}</span>
                      </td>
                      <td class="align-middle">
                    <a href="debloqueUser/{{$donnee->id}}" class="servideletebtn " data-id=""><img src="../assets/img/blockk.png" height ="20" width="20" /></a>  
                  </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
@endsection