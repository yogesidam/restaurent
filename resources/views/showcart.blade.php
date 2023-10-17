<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <style>
        .container{margin-bottom: 100px}
       button{position: relative;left:}
    </style>
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 

                            <li class="scroll-to-section">
                               @auth
                               <a href="{{ url('/showcart',Auth::user()->id) }}"> 
                                   Cart <sup class="text-danger">{{$count}}</sup> 
                                @endauth

                                @guest
                                   Cart <sup class="text-danger">0</sup>  
                                @endguest
                               </a>
                            </li> 
                            <li>
                                @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                    @auth
                                       <li>  <x-app-layout>
    
                                       </x-app-layout></li> 
                                    @else
                                    <li> <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li> 
                
                                        @if (Route::has('register'))
                                        <li>  <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li> 
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            </li>
                        </ul>        
                   
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header><br>

    <div id="top" class="container">
        {{-- <a  id="order" style="position: relative;left:600px"><button class="btn btn-danger">Order Now</button></a><br><br> --}}
        <table class="table table-striped">
            <thead class="bg-danger text-light">
                <tr align="center">
                    <th>Food name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            {{-- <form id="appear" class="form" action="{{ url('/order/store') }}" method="post" style="position: relative;left: 350px;
            width: 600px;display: none;"> --}}
            <tbody>
                    @csrf
                @foreach ($data as $d)
                <tr align="center">
                    <td> {{$d->title}}</td>
                    <td>{{$d->price}}</td>
                    <td>{{$d->quantity}}</td>
                    <td><img src="{{asset('FoodImages/'.$d->image)}}" width="200px" alt=""></td>
                    <td><a href="{{ url('/order',$d->id) }}" class="btn btn-danger">Order</a></td>
                    <td><a href="{{ url('/remove',$d->id) }}" class="btn btn-warning">Delete</a></td>
                </tr>
                    @endforeach
            </tbody>
        </table>
        {{-- <div style="display: none">
            <div class="form-group">
                <label for="inputname">Name</label>
                <input type="text" id="inputname" class="form-control" name="name" placeholder="Enter name" hidden>
            </div>
            <div class="form-group">
                <label for="inputphone">Phone</label>
                <input type="number" id="inputphone" class="form-control" name="phone" placeholder="Enter phone number" hidden>
            </div>
            <div class="form-group">
                <label for="inputaddress">Address</label>
                <input type="address" id="inputaddress" class="form-control" name="address" placeholder="Enter email address"hidden>
            </div>
            <button type="submit" class=" btn bg-success text-light" style="position: relative;left:150px">Order Conform</button>
            <button id="close" class=" btn bg-danger text-light" style="position: relative;left:200px">close | x</button>
        </div>
    </form> --}}
    </div>

    <!-- jQuery -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(document).ready(function (){
        $('#order').on('click', function(){
            $('#appear').show();

        });
        $('#close').on('click', function(){
            $('#appear').hide();
            
        })
      })
    </script> --}}
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>