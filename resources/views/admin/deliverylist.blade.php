@extends('admin.index')
@section('content')
<div class="container-fluid py-4">
    @if ($message = Session::get('success'))
                     <div class="alert alert-success">
                        <p>{{ $message }} </p>
                     </div>
                  @endif
      <div class="row">
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                  
                      <!-- utilisateur debloque -->
                      <h6 class="mb-0">Utilisateurs non bloqué </h6>
                    </div>
                  </div>
                </div>
                <table class="table align-items-center mb-0">
                  <thead>
                  <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                      <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7 ">nom</th>
                      <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7 ">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tel</th>
                      <th class="text-center opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                 <!-- foreach -->
                  @foreach($user1 as $user10)
               
                      <tr>
                          <td>
                          <img src="uploads/{{$user10->imagevendeur}}" width="100px" class="avatar avatar-sm me-3 border-radius-lg" alt="picture">
                          </td>
                          <td align="center">{{$user10->name}} </td>
                       
                          <td align="center" >{{$user10->email}}</td>
                          <td align="center">{{$user10->phone}}</td>
                          <td align="center">
                          <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="debloqueUser/{{$user10->id}}">
                            <i class="material-icons text-sm me-2">delete</i>Bloqué</a>
                          </td>
                      </tr>
                      @endforeach
                <!--  end -->
                 </tbody>
                </table>
                <div class="row">
            
                  <div class="col-lg-3 col-md-6 col-xs-12 mb-4"></div>
                  <div class="col-lg-3 col-md-6 col-xs-12 mb-4"></div>
                      <div class="col-lg-3 col-md-6 col-xs-12 mb-4"></div>
                      <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                                      <nav aria-label="Page navigation">
                                    <ul class="pagination pagination-sm">
                                   
                                       
                                </ul>
                                </nav>
                            </div>
            </div>
              </div>
            </div>
          </div>
        </div>
       
      </div>

      <!--       utilisateur bloques     -->
      
      <div class="container-fluid py-4">
      <div class="row">
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
              
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0">utilisateurs bloqué </h6>
                  </div>
                  <table class="table align-items-center mb-0">
                        <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                      <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7 ">nom</th>
                      <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7 ">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tel</th>
                      <th class="text-center opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                 <!-- foreach -->
                 @foreach($user2 as $user20)
                      <tr>
                      <td>
                          <img src="uploads/{{$user20->imagevendeur}}" width="100px" class="avatar avatar-sm me-3 border-radius-lg" alt="picture">
                          </td>
                          <td align="center">{{$user20->name}} </td>
                       
                          <td align="center" >{{$user20->email}}</td>
                          <td align="center">{{$user20->phone}}</td>
                          <td align="center">
                          <a class="btn btn-link text-success px-3 mb-0" href="bloqueUser/{{$user20->id}}"> <i class="material-icons text-sm me-2">
                      done</i>Debloque</a>
                   
                          </td>
                      </tr>
                      @endforeach
                <!--  end -->
                 </tbody>
                </table>
                </div>
                <div class="row">
            
            <div class="col-lg-3 col-md-6 col-xs-12 mb-4"></div>
            <div class="col-lg-3 col-md-6 col-xs-12 mb-4"></div>
                <div class="col-lg-3 col-md-6 col-xs-12 mb-4"></div>
                <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                                <nav aria-label="Page navigation">
                              <ul class="pagination pagination-sm">
                            
                                 
                          </ul>
                          </nav>
                      </div>
      </div>
        </div>
      </div>
    </div>
  </div>
      </div>

       

       
@endsection