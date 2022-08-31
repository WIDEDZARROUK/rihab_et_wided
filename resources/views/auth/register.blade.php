


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/samser.png">
  <title>
    Samser Tounsi
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="http://127.0.0.1:8000/">
              samser Tounsi
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="http://127.0.0.1:8000/">
                    <i class="fa fa-angle-left opacity-6 text-dark me-1 "></i>
                    retour
                  </a>
                </li>
               
                <li class="nav-item">
                  <a class="nav-link me-2" href="{{route('register')}}">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    S'inscrire
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="{{route('login')}}">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    S'identifier
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
               
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('../assets/img/delivery11.png');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">S'inscrire</h4>
                  <div class="row mt-3">
                   
                   
                  </div>
                </div>
              </div>
              <div class="card-body">
                 <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

<form method="POST" action="{{ route('register') }}">
    @csrf

                <div class="input-group input-group-outline my-3">
                    <label class="form-label" for="name" :value="__('Name')" ></label>
                    <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autofocus placeholder="Nom">
                  </div>

                  <div class="input-group input-group-outline my-3">
                    <label class="form-label" for="email" :value="__('Email')" ></label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" :value="old('email')" required >
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label" value="__('Password')" ></label>
                    <input type="password" class="form-control" id="password" placeholder="Mot de passe"
                                name="password" required autocomplete="new-password" >
                  </div>

                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label" value="__('Confirm Password')" ></label>
                    <input type="password" class="form-control" placeholder="Confirmez le mot de passe"
                                 id="password_confirmation"
                                name="password_confirmation" required >
                  </div>

                   <!-- Select Option Rol type -->
           <div class="input-group input-group-outline mb-3 " >
              <!-- <x-label for="role_id" value="{{ __('Register As ') }}" /> -->
              <select name="role_id" class=" form-control block mt-1 w-full Iborder-gray-300
              Ifocus:border-indigo-300 focus:ring focus:ring-indigo-200
              focus:ring-opacity-50 rounded-md shadow-sm ">
                  <option value="client">client</option>
                  <option value="vendeur">vendeur</option>
                  <option value="sl">sociéte de livraison</option>
                  </select>
              </div>

                  <!-- <div class="form-check form-switch d-flex align-items-center mb-3">
                  <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">

                    <label class="form-check-label mb-0 ms-2" for="rememberMe">{{ __('Remember me') }}</label>
                  </div> -->
                  
                  <div class="text-center">
                       <x-button class="btn bg-gradient-primary w-100 my-4 mb-2">
                    {{ __('inscrire') }}
                </x-button>
                     </div>
                  
                  <p class="mt-4 text-sm text-center">
                  Vous avez un compte?
                    <a href="http://127.0.0.1:8000/login" class="text-primary text-gradient font-weight-bold">Connexion</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
               fabriqué avec <i class="fa fa-heart" aria-hidden="true"></i> par
                <a href="http://127.0.0.1:8000/register" class="font-weight-bold text-white" target="_blank">Rihab & wided</a>
                pour BBC.
              </div>
            </div>
            
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>

