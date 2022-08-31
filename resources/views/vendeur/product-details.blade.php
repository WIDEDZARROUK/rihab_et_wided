<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Samser Tounsi</title>

    <!-- Favicon  -->
    <link rel="shortcut icon" href="../assets/img/samser.png" type="image/png">


    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('css/core-style.css')}}">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

</head>

<body>
     <div id="wrapper">
        <!-- ****** Header Area Start ****** -->
        <header class="header_area">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                
                <div class="container h-100">
                    
                    <div class="row h-100 align-items-center ">
                    <a href="http://127.0.0.1:8000/"><img src="../img/core-img/Sans-titre---2.png" alt=""></a>
                    &emsp; &emsp;
                    &emsp;&emsp;
                    &emsp;&emsp;
                    &emsp;&emsp;
                    &emsp;
                        <div >
                            <div class="top_single_area d-flex align-items-center">
                                
                                <div class="top_logo">
                                <nav class="navbar navbar-expand-lg align-items-start">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>
                                <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                    <ul class="navbar-nav animated" id="nav">
                                        <li class="nav-item active"><a class="nav-link" href="http://127.0.0.1:8000/">ACCUEIL</a></li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="{{route('listsearchproduct')}}" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PRODUITS</a>
                                           
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="#" >SERVICES</a>
                                        </li>
                                        <!--route login  -->
                               @if (Route::has('login'))

                                @auth
                                <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link">Profile</a></li>
                                @else
                                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Connexion</a></li>

                                @if (Route::has('register'))
                                <li class="nav-item"> <a href="{{ route('register') }}" class="nav-link">S'inscrire</a></li>
                                @endif
                                @endauth

                                @endif
                                    </ul>
                                </div>
                                </nav>
                                </div>
                                &emsp; &emsp;&emsp; &emsp;&emsp;   
                                <!-- panier des produit navbar -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    
                <div class="cart">                     
                <div class="dropdown">
                @guest
                @if (Route::has('login'))
                <a href="{{route('login')}}" type="button" class="btn btn-info">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>  panier
                <span class="badge badge-pill badge-danger">S'inscrire</span>
                </a>
                @endif 

                @else
                <a href="{{ url('/cart')}}">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> panier 
                    <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
                </a>
                @endguest
               
                
            </div>
            </div>
                                
                      
                </div>
            </div>

            <!-- Top Header Area End -->
            
        </header>

        <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area Start <<<<<<<<<<<<<<<<<<<< -->
        <div class="breadcumb_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
                            <li class="breadcrumb-item"><a href="#">PRODUITS</a></li>
                            <li class="breadcrumb-item active">{{ $donnees->nom }}</li>
                        </ol>
                        <!-- btn -->
                        <a href="#" class="backToHome d-block"><i class="fa fa-angle-double-left"></i> retour</a>
                    </div>
                </div>
            </div>
        </div>

      
                              <!--   test  -->
                              <br>
                            
             <div class="row">
                  @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="col-lg-3 col-md-6 col-xs-12 mb-4"></div>
    			<div class="col-lg-3 col-md-6 col-xs-12 mb-4">
                <a  href="/uploads/{{ $donnees->image }}">
                <img src="/uploads/{{ $donnees->image }}" alt="First slide">
                                    
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 mb-4">
                <div class="card-body">
                
                <h4 name="nom">{{ $donnees->nom }}</h4>
                <strike><P class="price" name="prix">{{ $donnees->prix }} TND</P></strike>
                <p class="price" name="solde">{{ $donnees->solde }} TND</p>
                <p class="available">Disponible : <span class="text-muted">en stock</span></p>
                <br><hr>
                <div class="reviews_product p-3 mb-2 ">
                        {{$comm}} Commentaires &emsp;   <i class="fa fa-comment"></i>
                       
                        &emsp; 
                        
                    </div>
                  
                     <br><hr>
                        <div id="accordion" role="tablist">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h6 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Détails
                                            </a>
                                        </h6>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>" {{ $donnees->desc }} "</p>
                                        </div>
                                      
                                    </div>
                                </div>
                                </div>
                                
                       <br> 
                       @guest
                       @if (Route::has('login'))
                       <a href="{{route('login') }}" class="btn btn-danger btn-lg btn-block text-uppercase">
                            <i class="fa fa-shopping-cart"></i> Ajouter au panier
                        </a>
                        @endif
                        @else
                        <a href="{{route('add-to-cart',$donnees->id) }}" class="btn btn-danger btn-lg btn-block text-uppercase">
                            <i class="fa fa-shopping-cart"></i>Ajouter au panier
                        </a>
                        @endguest
                    <br>
                </form>
                    
                                      
                </div>
                </div>
                 
    			<div class="col-lg-3 col-md-6 col-xs-12 mb-4"></div>
             </div>
    		
        <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                           <br> <h2>Commentaires</h2>
                        </div>
                    </div>
                </div>
        <div class="single_gallery_item">
        <div class="comment-area mt-4">
     <div class="card card-body">

     @guest
        @if (Route::has('login'))
           <a class="nav-link" href="{{ route('login') }}">
           <button type="submit" class="btn btn-danger mt-3">{{ __('inscrire') }}</button>
           </a>
        @endif
     @else
          <form action="{{ url('addcommentaires')}}" method="POST">
              @csrf
              <input type="hidden"name="idPost" value="{{$donnees->id}}">

               <textarea name="body"class="form-control"rows="3"required placeholder="cree un commentaire ..."  ></textarea>
               <button type="submit" class="btn btn-danger mt-3">Crée</button>
          </form>
         
    @endguest
    </div>
     
   
     @foreach ($commentaires as $commentaire)
        <div class="card card-body shadow-sm mt-3">
          <div class="detail-area">
         
               <h6 class="user-name mb-11">
          <img src="/uploads/{{$commentaire->user_image}}" alt="profile_image" width="50" height="50">
               {{$commentaire->user_name}}
                    <small class="ms-3text-primary">{{$commentaire->created_at}}</small>
               </h6>
               <p class="user-comment mb-1">
              <input type="text" name="body" value=" {{$commentaire->body}}" >
               </p>
          </div>
          <div>
               <a href="/modifcommenter" class="btn btn-primary btn-sm me-2"> Modifier </a>
               <a href="/destroycommenter/{{$commentaire->id}}" class="btn btn-danger btn-sm me-2"> Supprimer </a>
          </div>
     </div>
       @endforeach
      
       </div>
       </div>
       
        <!-- ****** Footer Area Start ****** -->
        <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_footer_area">
                            <div class="footer-logo">
                                <img src="/img/core-img/Sans-titre---2.png" alt="">
                            </div>
                            <div class="copywrite_text d-flex align-items-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Fabriqué avec <i class="fa fa-heart-o" aria-hidden="true"></i> by Rihab & wided </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">About</a></li>
                                <li><a href="http://127.0.0.1:8000/">accueil</a></li>
                                <li><a href="/listsearchproduct">shopping</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="{{route('login')}}">Mon compte</a></li>
                                <li><a href="{{route('register')}}">S'inscrire</a></li>
                                <li><a href="{{route('login')}}">Connexion</a></li>
                            
                            </ul>
                        </div>
                    </div>
                   
                </div>
                <div class="line"></div>

                <!-- Footer Bottom Area Start -->
                <div class="footer_bottom_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_social_area text-center">
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>


    


  </body>     
<script>
     $(document).ready(function(){
        var quantity = 1;

        $('.quantity-right-plus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            $('#quantity').val(quantity + 1);
        });

        $('.quantity-left-minus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            if(quantity > 1){
                $('#quantity').val(quantity - 1);
            }
        });

    });
</script>
</body>

</html>