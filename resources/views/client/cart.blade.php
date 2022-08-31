<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

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
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{route('listsearchproduct')}}" >PRODUITS</a>
                                         </li>
                                         <li class="nav-item dropdown">
                                            <a class="nav-link" href="#" >SERVICES</a>
                                        </li>
                                        @if (Route::has('login'))

                                @auth
                                <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link">Profile</a></li>
                                @else
                                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Connexion</a></li>

                                @if (Route::has('register'))
                                <li class="nav-item"> <a href="{{ route('register') }}" class="nav-link">Register</a></li>
                                @endif
                                @endauth

                                @endif
                                    </ul>
                                </div>
                                </nav>
                                </div> &emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;   
                                <!-- panier de produit navbar -->
                               
                   <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Panier <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>
                        <?php $total = 0 ?>
                        @foreach((array) session('cart') as $id => $details)
                            <?php $total += $details['prix'] * $details['quantity'] ?>
                        @endforeach
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info"> {{ $total }}TDN</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="uploads/{{ $details['image'] }}" width="80" height="70" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['nom'] }}</p>
                                    <span class="price text-info"> {{ $details['prix'] }} TDN</span> 
                                    <span class="count"> Quantité:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ url('cart') }}" class="btn btn-primary btn-block">Afficher tout</a>
                        </div>
                    </div>
                </div>
            </div>
       
        </header>
      

        <!-- ****** panier des produit ****** -->
        <div class="cart_area section_padding_100 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cart-table clearfix">

                  @if ($message = Session::get('success'))
                     <div class="alert alert-success">
                        <p>{{ $message }} </p>
                     </div>
                  @endif

                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Produits</th>
                                        <th>Prix</th>
                                        <th>Quantité</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $total = 0 ?>
                                    @if(session('cart'))
                                
                                
                                <div hidden>{{$key=1}}</div>
                                @foreach(session('cart') as $id => $details)
                                <form action="passercommand" method="POST">
                                    @csrf
                                    <?php $total += $details['prix'] * $details['quantity'] ?>
                                <tr>
                                        <td class="cart_product_img d-flex align-items-center">
                                            <a href="#"><img src="uploads/{{ $details['image'] }}" alt="Product"></a>
                                            <input type="hidden" value="{{ $details['image'] }}" name="image_produit">
                                            <h6>{{ $details['nom'] }}</h6>
                                            <input type="hidden" value="{{ $details['nom'] }}" name="nom_prduit" >

                                        </td>
                                        <td class="price"><span>{{ $details['prix'] }} TND</span></td>
                                        <input type="hidden" value="{{ $details['prix'] * $details['quantity'] }}" name="prix_total" >
                                        <td data-th="Quantity">
                                         <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                                        </td>
                                        <td class="total_price"><span>{{ $details['prix'] * $details['quantity'] }}</span></td>

                                        <input type="hidden" value="{{$details['nomsociete']}}" name="nom_soc"/>
                                        <input type="hidden" value="{{Auth::user()->address}}" name="adresse_user"/>
                                        <input type="hidden" value="{{Auth::user()->phone}}" name="phone_user"/>
                                       
                                        <td class="actions" data-th="">
                                           <!--  commende ligne wa7da  -->
                                           
                                            <button type="submit" class="btn btn-success">
                                           <i class="fa fa-cart-plus"></i>
                                           </button>
                                       </form>
                                           <br>
                                             <!--  update total qty  -->
                                         <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}">
                                             <i class="fa fa-refresh"></i>
                                            </button>
<br>    
                                           

                                            <!-- destroy ligne de panier  -->
                                            <a type="submit" 
                                            class="btn btn-danger btn-sm remove-from-cart servideletebtn" data-id="{{$id}}">
                                                <i class="fa fa-trash-o"></i>
                                            </a>

                                        </td>
                                    <input type="text" name="counKey" value="{{$key++}}" hidden />
                                </tr>
                                    @endforeach
                                 @endif 
                                    
                                </tbody>
                            </table>
                           
                        </div>

                        <div class="cart-footer d-flex mt-30">
                            <div class="back-to-shop w-50">
                                <a href="{{ url('/listsearchproduct') }}"><i class="fa fa-reply-all" aria-hidden="true"></i> Continue </a>
                            </div>
                            <div class="update-checkout w-50 text-right">
                            
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                       
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                       
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-total-area mt-70">
                            <div class="cart-page-heading">
                                <h5>TOTAL PANIER</h5>
                                <p>Informations finales</p>
                            </div>

                            <ul class="cart-total-chart">
                                <li><span>Prix</span> <span>{{ $total}} TND</span></li>
                                <li><span>Livraison</span> <span>8 TND</span></li>
                                <li><span><strong>Total</strong></span> <span><strong> {{ $total +8 }}  TND</strong></span></li>
                            </ul>
                            <button type="submit" class="btn karl-checkout-btn">  
                               Passer Commande
                             </button>
                    
                                   
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Cart Area End ****** -->

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


    


 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
        $(".update-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
        // $(".remove-from-cart").click(function (e) {
        //     e.preventDefault();
        //     var ele = $(this);
        //     if(confirm("Are you sure")) {
        //         $.ajax({
        //             url: '{{ url('remove-from-cart') }}',
        //             method: "DELETE",
        //             data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
        //             success: function (response) {
        //                 window.location.reload();
        //             }
        //         });
        //     }
        // });
    
    
    $(document).ready(function (){
        $('.servideletebtn').click(function (e){
            e.preventDefault();
        
      swal({
        title: "Are you sure?",
        text: " will be permanently deleted ! ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location="/remove-from-cart"
            swal("Yes!shopping cart has been deleted !", {
            icon: "success",
            });
        } else {
            swal("Your shopping cart is safe !");
        }
        });
        });
        });

</script>

</body>

</html>