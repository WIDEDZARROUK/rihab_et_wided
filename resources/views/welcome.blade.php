<!DOCTYPE html>
<html lang="fr">

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

        <!-- ****** Header Area Start ****** -->
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
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="{{route('listsearchproduct')}}" >PRODUITS</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="{{url('/listservice')}}" >SERVICES</a>
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
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <!-- Cart Area -->
                                    <div class="cart">
                                       
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="cart">
                                       
                                    </div>
                    </div>
                </div>
            </div>

            <!-- Top Header Area End -->
            
        </header>
      

        <!-- ****** Welcome Slides Area Start ****** -->
        <section class="welcome_area">
            <div class="welcome_slides owl-carousel">
                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/page1.png);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <br></br>
                                    <br></br>
                                    <br></br>
                                    <br></br>
                                  <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms"><br>* Restez à la mode </h6>
                                   <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Tendances </h2>
                                    <a href="{{route('login')}}" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">inscrire maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/bg-4.png);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Restez à la mode</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Collection d'été</h2>
                                    <a href="#" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">inscrire maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/page3.png);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                <br><br><h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Lancez votre boutique en ligne et créez votre service web.</h6>
                                    <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">Obtenez votre service</h2>
                                    <a href="#" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">Choisissez maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****** Welcome Slides Area End ****** -->
        <br>
        <br>
        <h6 align="center"  style="color:Gray" >* Fonctionnement</h6>
        <div class="section_heading text-center">
        
        <h2>Comment ça marche?</h2>
			</div>
<div class="row">
            
<section id="services-section">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-lg-3 col-md-6 col-xs-12 mb-4">
    				<div class="services-details text-center">
    					<img src="img/value.png" alt="">
    					<h6>Ajoutez un article</h6>
    					<p>Ajoutez quelques photos, la description, le prix et en moins de 30 secondes</p>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-6 col-xs-12 mb-4">
    				<div class="services-details text-center">
    					<img src="img/delivery-man.png" alt="">
    					<h6>Livrez</h6>
    					<p>Emballez votre article et laissez une belle note. Un livreur viendra chercher le colis directement à votre domicile.</p>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-6 col-xs-12 mb-4">
    				<div class="services-details text-center">
    					<img src="img/payment.png" alt="">
    					<h6>Encaissez</h6>
    					<p>24h après la livraison de l'article, vous recevrez automatiquement votre argent sur votre compte bancaire ou sur votre carte e-dinar.</p>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-6 col-xs-12 mb-4">
    				<div class="services-details text-center">
    					<img src="img/shopping-basket.png" alt="">
    					<h6>Achetez</h6>
    					<p>A votre tour, dénichez de très beaux articles directement dans les dressings d'autres femmes et faites vous livrer chez vous en toute sécurité.</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
        </div>


        <!-- ****** Quick View Modal Area End ****** -->

        <!-- ****** New Arrivals Area Start ****** -->
        <section class="new_arrivals_area section_padding_100_0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }} <a href="/cart">Carte</a> </p>
                        </div>
                    @endif
                        <div class="section_heading text-center">
                            <h2>NOUVELLES PRODUITS</h2>
                        </div>
                    </div>
                </div>
            </div>

           
            <div class="container">
                <div class="row karl-new-arrivals">

                    <!-- Single gallery Item Start -->
                    @foreach ($records as $record)
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="/uploads/{{ $record->image }}" alt="">
                            <div class="product-quicview">
                            <a href="/product-details/{{ $record->id }}" ><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                      
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

        <!-- ****** pagination ****** -->
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
        <br>
        <!-- ****** Offer Area Start ****** -->
        <section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url(img/bg-img/ddcc.png);">
            <div class="container h-100">
                <div class="row h-100 align-items-end justify-content-end">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                            <h2>PREMIÈRE FOIS EN TUNISIE
                    <span class="karl-level">nouveauté dans samser tounsi</span></h2>
                            <p>* Parlons ensemble de votre projet! </p>
                            <div class="offer-product-price">
                                <h3><span class="regular-price">Perdre du temps </span> Samser Tounsi</h3>
                            </div>
                            <a href="{{ route('listservice') }}" class="btn karl-btn mt-30">Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    

        <!-- ****** Popular Brands Area Start ****** -->
        <section class="karl-testimonials-area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>Les fondateurs</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="karl-testimonials-slides owl-carousel">

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6> Développeur full stack. Solides compétences en organisation et en gestion de projet. 
                                    Maîtrise des langages frontaux fondamentaux tels que HTML, CSS et JavaScript. 
                                    Familiarité avec les frameworks JavaScript tels que Angular JS, 
                                    React et Amber. Maîtrise des langages côté serveur tels queJava, PHP .</h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="img/bg-img/a3c35977-6105-474a-8599-60348cb21cf6.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Zarrouk Wided</p>
                                        <span>Développeur </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6> Développeur full stack. Solides compétences en organisation et en gestion de projet. 
                                    Maîtrise des langages frontaux fondamentaux tels que HTML, CSS et JavaScript. 
                                    Familiarité avec les frameworks JavaScript tels que Angular JS, 
                                    React et Amber. Maîtrise des langages côté serveur tels queJava, PHP .</h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="img/bg-img/241028221_528240948239572_3215001373947399062_n.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Sifaou Rihab</p>
                                        <span>développeur web</span>
                                    </div>
                                </div>
                            </div>

                            

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ****** Popular Brands Area End ****** -->

        <!-- ****** Footer Area Start ****** -->
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