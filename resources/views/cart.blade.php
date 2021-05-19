<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="userhome">HOME</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="aboutus">T&C</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="userview">BOOKS</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="cartlist">CART</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="order">BOOKING</a></li>
                       
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="myorders">MYORDERS</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/ulogout">LOGOUT</a></li>
                        <MARQUEE style="color:white"><b> welcome {{session('loggeduser')}}</b></a></MARQUEE>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
        <header class="masthead">
            <div class="container">
            <div class="text-center">
            <h2 class="section-heading text-uppercase">mycart</h2>
            <h3 class="section-subheading text-muted">.................................</h3>
        </div>

            <div class="row " style="background-color:black" >

@foreach($products as $item) 

<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br>
<img width="150" height="200" src="{{ URL ::asset('assets/project_img/'.$item->pimage) }}">
</div>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<p class="card-text" style="color:black"><small class="text-muted"><h4>{{$item->abookname}} </h4></small></p>
<h3>{{$item->aauthor}}</h3> 
</div>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br><br>
<h5>₹ {{$item->arent}}</h5>
</div>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br><br>
<a href="/removecart/{{$item->cart_id}}"class="btn btn-warning">Remove</a>
</div>
<br><br>
@endforeach


</div>

</div>
<br><br>
<center><a href="/order" class="btn btn-primary">Order Now<center>
       






    </div>



              
            </div>
        </header>
         


       
        
   
       
     
       
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
