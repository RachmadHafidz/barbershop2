


<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">Barbershop</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Katalog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Fitur Kami
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
            </div>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" >
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active">
        <img src =<?php echo base_url('assets/img/slider1.png')?> class="d-block w-100" alt="image">
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item">
        <img src =<?php echo base_url('assets/img/slider2.jpg')?> class="d-block w-100" alt="image">
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item">
        <img src =<?php echo base_url('assets/img/slider3.jpg')?> class="d-block w-100" alt="image">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

<div class="container">
<div class="row mt-4">
<?php foreach($paket as $pk) : ?>

  <div class="col-lg-4 col-md-6 mb-4 mt-120px">
  <div class="card-h100 ">
   <div class="card-body" >
      <h5 class="card-title"><?php echo $pk->nama_paket ?></h5>
      <span class="fa-stack fa-3x">
      <i class="fas fa-circle fa-stack-2x text-primary"></i>
      <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
    </span>
      <p class="text-muted"><?php echo $pk->harga ?></p>
      <p class="text-muted"><?php echo $pk->detail_paket ?></p>
      <p class="text-muted"><?php echo $pk->detail_paket ?></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
<?php endforeach; ?>
</div>
</div>
<div class="card-footer">
</div>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Welcome to Modern Business</h1>
  <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>Modern Business Features</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
      </div>
    </div>

  </div>
  <!-- /.container -->

  
