<!DOCTYPE html>

<head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>E-Shopper</title>
    <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]--> 
 </head>
 <body>
  <script type="js/jquery-1.9.1.min.js"></script>
 <script type="js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light  fixed-top"
style="background-color:#74bfc2";"
  >
    <div class="container">
      <a class="navbar-brand" href="#"><img src="img/logo.png" class="logo">
E_shopper

      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">All categories</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">men shirt & T_shirt</a>
          <a href="#" class="list-group-item">men suit </a>
          <a href="#" class="list-group-item">men accesseries</a>
          <a href="#" class="list-group-item">men shoes</a>
          <a href="#" class="list-group-item">women shirt & T_shirt</a>
         <a href="#" class="list-group-item">women accesseries </a>
         <a href="#" class="list-group-item">women shoes </a>
         <a href="#" class="list-group-item">women dresses</a>
         <a href="#" class="list-group-item">women jumpsuit</a>
        
          
        </div>

      </div>
      <!-- /.col-lg-3 -->
        <!--CAROUSEL-->
      <div class="col-lg-9">

       <div id="myproducet" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myproducet" data-slide-to="0" class="active"></li>
            <li data-target="#myproducet" data-slide-to="1" ></li>
            <li data-target="#myproducet" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
         
       <div class="carousel-item active">
      <img src="img/cover2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>E_shopper</h3>
        <p>Welcom </p>
      </div>
    </div>
    <!--2-->
      <div class="carousel-item">
      <img src="img/cover.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
<!--3-->
 <div class="carousel-item">
      <img src="img/cover3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>

<!--inner-->
          </div>
           <a class="carousel-control-prev" href="#myproducet" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myproducet" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/mtsh1.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item One</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
               <button type="button" class="btn btn-info">add cart</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/mt.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Two</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
             <div class="card-footer">
               <button type="button" class="btn btn-info">add cart</button>
              </div>
             
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/am3.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Three</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <button type="button" class="btn btn-info">add cart</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/d2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Four</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <button type="button" class="btn btn-info">add cart</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/shw5.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Five</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="card-footer">
                <button type="button" class="btn btn-info">add cart</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/sw9.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Six</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <button type="button" class="btn btn-info">add cart</button>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5  " style="background-color: #74bfc2;">
    <div class="container">

    <div class="row">
<div class="col-md-4 text-center">
<div class="contact-widget  wow animated zoomIn animated" data-wow-delay="0.3s">
    <i class="fa fa-map-marker fa-4x text-white"></i>
    <h5 class="main-item text-white">Main Office</h5>
    <p class="text-white">
       Assiut 
    </p>
</div>
</div>
<div class="col-md-4 text-center">
<div class="contact-widget wow animated zoomIn animated" data-wow-delay="0.6s">
    <i class="fa fa-phone fa-4x text-white"></i>
    <h5 class="main-item text-white">Call</h5>
    <p class="text-white">
    01024461139
    </p>
</div>
</div>
<div class="col-md-4 text-center">
<div class="contact-widget  wow animated zoomIn animated" data-wow-delay="0.9s">
    <i class="fa fa-envelope fa-4x text-white"></i>
    <h5 class="main-item text-white">Email us</h5>
    <p class="text-white">
      info@ASD_EMAIL.net 
    </p>
</div>
</div>

    </div>
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript 
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
-->

 </body>

 </html>