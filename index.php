<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
        <title>THE ZURI</title>

        <style>

            nav{
                background-color: #DC0000;
            }

            a{
                color: white;
            }
          </style>

    </head>
    <body>
        <nav class="navbar fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="/HOTEL">THE ZURI</a>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary me-2" type="button" >
                        <a class="text-light" style="text-decoration: none" href="./page/registerPage.php">Sign Up</a>
                    </button>
                    <button class="btn btn-warning ms-2" type="button" href="./loginPage.php">
                        <a class="text-light" style="text-decoration: none" href="./page/loginPage.php">Login</a>
                    </button>
                </div>
            </div>
        </nav>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="thezuri.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h1>Selamat Datang di The Zuri</h1>
        <p>Selamat Menikmati Pelayanan Kami</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="lounge.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
      <h1>Selamat Datang di The Zuri</h1>
        <p>Selamat Menikmati Pelayanan Kami</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="kolam.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
      <h1>Selamat Datang di The Zuri</h1>
        <p>Selamat Menikmati Pelayanan Kami</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

        
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
        MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>