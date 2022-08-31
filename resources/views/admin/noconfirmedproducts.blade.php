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
                      <h6 class="mb-0">All Products</h6>
                    </div>
                  </div>
                </div>
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">product name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">created_at</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">name Society</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Picture</th>
                      <th class="text-center opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($records as $record)   
                      <tr>
                          <td>{{ $record->nom }}</td>
                          <td >
                          <i class="material-icons me-2 text-lg">date_range</i>
                          {{ $record->created_at }}
                        </td>
                          <td></td>
                          <td align="center" >
                            <img src="/uploads/{{ $record->image }}" width="100px" class="avatar avatar-sm me-3 border-radius-lg" alt="picture">
                          </td>
                          <td align="center">
                          <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="novalidproducts/{{$record->id}}"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                          <a class="btn btn-link text-success px-3 mb-0" href="validproducts/{{$record->id}}"><i class="material-icons text-sm me-2">public</i>public</a>
                 
                          </td>
                      </tr>
                 @endforeach
                 </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
       
      </div>

      <!--       Products Validate     -->
      
      <div class="container-fluid py-4">
      <div class="row">
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0">Products Validate</h6>
                  </div>
                  <table class="table align-items-center mb-0">
                        <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">product name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">created_at</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">name Society</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Picture</th>
                      <th class="text-center opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($products1 as $products10)
                      <tr>
                          <td>{{ $products10->nom }}</td>
                          <td >
                          <i class="material-icons me-2 text-lg">date_range</i>
                          {{ $products10->created_at }}
                        </td>
                          <td></td>
                          <td align="center" >
                            <img src="/uploads/{{ $products10->image }}" width="100px" class="avatar avatar-sm me-3 border-radius-lg" alt="picture">
                          </td>
                          <td align="center">
                          <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="novalidproducts/{{$record->id}}"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                          </td>
                      </tr>
                 @endforeach
                 </tbody>
                </table>
                </div>
        </div>
       </div>
       </div>
      </div>
      </div>

        <!--          Products No Validate         -->
        <div class="container-fluid py-4">
      <div class="row">
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0">Products No Validate</h6>
                  </div>
                  <table class="table align-items-center mb-0">
                        <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">product name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">created_at</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">name Society</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Picture</th>
                      <th class="text-center opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($products2 as $products20)
                      <tr>
                          <td>{{ $products20->nom }}</td>
                          <td >
                          <i class="material-icons me-2 text-lg">date_range</i>
                          {{ $products20->created_at }}
                        </td>
                          <td>{{$products20->nom_soc}}</td>
                          <td align="center" >
                            <img src="/uploads/{{ $products20->image }}" width="100px" class="avatar avatar-sm me-3 border-radius-lg" alt="picture">
                          </td>
                          <td align="center">
                          <a class="btn btn-link text-success px-3 mb-0" href="validproducts/{{$record->id}}"><i class="material-icons text-sm me-2">public</i>public</a>
 </td>
                      </tr>
                 @endforeach
                 </tbody>
                </table>
                </div>
        </div>
       </div>
       </div>
      </div>

       
@endsection