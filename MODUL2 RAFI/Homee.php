<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<title>Halaman utama</title>

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .bawah {
        text-align: center;
      }
    </style>

    
  </head>
  <body>
    

    <header class="p-3 text-bg-dark">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>     
               <a href="home.php" class="nav-link px-2 text-white">Home</a>
               <a href="booking.php" class="nav-link px-2 text-white">Booking</a>
          </div>
        </div>
      </header>

<main>
    <?php 
    $nama = "Rafi";
    ?> 
  <section class="py-5 text-center container">
    <div >
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 >Welcome To EAD RENT</h1>
        <p class="lead text-muted">Find Your Best Deal, Here!</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
        <div class="card" style="width: 18rem;">
            <img src="https://www.toyota.astra.co.id/sites/default/files/2021-08/1-white.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Toyota Rush</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"> 7 kursi</li>
              <li class="list-group-item">1500 CC</li>
              <li class="list-group-item">Manual</li>
            </ul>
            
            <a type="button" class="btn btn-outline-primary" href="mesen.php">Book Now</a>
          
          </div>
          <div class="card" style="width: 18rem;">
            <img src="https://www.toyota.astra.co.id/sites/default/files/2022-08/4-agya-2022-white.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Toyota Agya</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"> 5 kursi</li>
              <li class="list-group-item">1200 CC</li>
              <li class="list-group-item">Manual</li>
            </ul>
            <a type="button" class="btn btn-outline-primary" href="mesen.php">Book Now</a>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="https://asset.honda-indonesia.com/variants/images/Vos4HUL6XFLHnM2dhTzGbzdNHpvNTnBNBKhZwxc0.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Honda Brio</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"> 5 kursi</li>
              <li class="list-group-item">1200 CC</li>
              <li class="list-group-item">Automatic</li>
            </ul>
            <a type="button" class="btn btn-outline-primary" href="mesen.php">Book Now</a>
          </div>   
       
      </div>
    </div>
  </div>

</main>

<footer>
    <div class="card-footer text-muted">
        <p class="bawah"> <?php echo "RAFI_1202200029" ?></p>
      </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
