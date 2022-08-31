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
<link rel="shortcut icon" href="assets/img/samser.png" type="image/png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
    

    <div id="wrapper">

          <!-- ****** Header de samser tounsi ****** -->
          <header class="header_area">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                
                <div class="container h-100">
                    
                    <div class="row h-100 align-items-center ">
                    <a href="http://127.0.0.1:8000/"><img src="img/core-img/Sans-titre---2.png" alt=""></a>
                    &emsp; &emsp;
                    &emsp;&emsp;
                    &emsp;&emsp;
                    &emsp;&emsp;
                    &emsp;
                        <div class="">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div class="top_logo">
                                <nav class="navbar navbar-expand-lg align-items-start">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>
                                <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                    <ul class="navbar-nav animated" id="nav">
                                        <li class="nav-item active"><a class="nav-link" href="http://127.0.0.1:8000/">ACCUEIL</a></li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{route('listsearchproduct')}}" >PRODUITS</a>
                                         </li>
                                         <li class="nav-item dropdown">
                                            <a class="nav-link" href="{{route('listservice')}}" >SERVICES</a>
                                        </li>
                                        @if (Route::has('login'))

                                @auth
                                <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link">PROFILE</a></li>
                                @else
                                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">CONNEXION</a></li>

                                @if (Route::has('register'))
                                <li class="nav-item"> <a href="{{ route('register') }}" class="nav-link">S'inscrire</a></li>
                                @endif
                                @endauth

                                @endif
                                    </ul>
                                </div>
                                </nav>
                                </div>
                                <!-- function search produit-->
                                @if (session()->has('success_message'))
              <div class="alert alert-success">
                    {{ session()->get('success_message') }}
             </div>
            @endif @if(count($errors) > 0)
            <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif
                       <div class="help-line">
                            <form action="{{route('search')}}" method="GET" class="form-inline md-form form-sm mt-0">
                             <i class="fa fa-search" aria-hidden="true"></i>
                          <input name="query" id="query" value="{{ request()->input('query')}}" class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search" >
                         </form>
                            </div>
                            </div>
                        </div>
                        &emsp; &emsp;
                    &emsp;&emsp;
                    &emsp;&emsp;
                    &emsp;&emsp;
                    &emsp;&emsp;
                    &emsp;&emsp;
                       
                    </div>
                </div>
            </div>

            <!-- Top Header Area End -->
            
        </header>
       
        <!-- ****** Quick View Modal Area End ****** -->
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }} <a href="/cart">voir panier</a> </p>
        </div>
    @endif
        <section class="shop_grid_area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="shop_sidebar_area">
                           
                            
                        </div>
                    </div>

                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="shop_grid_product_area">
                            <div class="row">

                                 <!-- recupere Product a la base de donnee  -->
                                @foreach ($records as $record)
                     <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                            <div class="product-img">
                            <img src="/uploads/{{ $record->image }}" alt="">
                            <div class="product-quicview">
                            <a href="/product-details/{{ $record->id }}" ><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="product-description">
                <strike><P class="price" name="prix">{{ $record->prix }} TND</P></strike>

                            <h4 class="product-price">{{ $record->solde }} TND</h4>
                            <p>{{ $record->nom }}</p>
                            <i class="fa fa-star " aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i> 
                                                <i class="fa fa-star " aria-hidden="true"></i>  3.9/5
                                        
                            <!-- Add to Cart -->
                             @guest
                           @if (Route::has('login'))
                            <a href="{{route('login') }}" class="add-to-cart-btn">
                             🛒AJOUTER AU PANIER</a>
                            @endif
                            @else
                            <a href="/add-to-cart/{{$record->id}}" class="add-to-cart-btn">🛒AJOUTER AU PANIER</a>

                            @endguest
                        </div>
                    </div>
                    @endforeach
                            </div>
                        </div>
                              <!-- pagination -->

                        <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-sm">
                                {{$records->Links()}}
                                   
                            </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_footer_area">
                            <div class="footer-logo">
                                <img src="img/core-img/Sans-titre---2.png" alt="">
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
</html>

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

</html>