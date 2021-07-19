<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title>Landing covid 19</title>
  </head>
  <body>

    <!--navbar-->

      <img class="shape" src="assets/bg.png">
    <div class="container">
      
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand" href="#">
              <img class="mr-3" src="assets/shield.png" width="30" height="40" class="d-inline-block align-top" alt="" loading="lazy" />
              <h1>Covid19 <span>Terkini</span> </h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="indo.php">National<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="country.php">Global</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="city.php">province</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Prevention</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://www.google.com/search?q=covid+19&rlz=1C1CHZN_enID939ID939&oq=covid+19&aqs=chrome..69i57j0i131i433l4j0i3j69i60j69i61.2905j0j1&sourceid=chrome&ie=UTF-8">News</a>
                </li>
              </ul>
            </div>
          </nav>
          <!--akhir navbar-->

          <!--row-->
          <div class="row mt-3">
              <div class="col-4">
                <img class="img-people" src="assets/Doctors-bro.png" alt="">
              </div>
              <div class="col-8">
                <div class="row wrap-card">
                    <div class="col-6 mt-4">
                        <div class="card bg-card-1">
                            <div class="shape-hr"></div>
                            <img class="shape-card" src="assets/1.png" alt="">
                            <h3>Indonesia</h3>
                            <p>2,567,630 positif, 2,119,478 </p>
                            <p>sembuh, 67,355 meninggal</p>
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="card bg-card-2">
                            <div class="shape-hr"></div>
                            <img class="shape-card" src="assets/2.png" alt="">
                            <h3>Total Positif</h3>
                            <p>2,567,630</p>
                            <p>Orang</p>
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="card bg-card-3">
                            <div class="shape-hr"></div>
                            <img class="shape-card" src="assets/3.png" alt="">
                            <h3>Total Sembuh</h3>
                            <p>2,119,478</p>
                            <p>Orang</p>
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="card bg-card-4">
                            <div class="shape-hr"></div>
                            <img class="shape-card" src="assets/4.png" alt="">
                            <h3>Total Meninggal</h3>
                            <p>67,355</p>
                            <p>Orang</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--akhir row-->

            <!--carousel-->
          </div>
          <div class="row w-50">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <img class="shape-carousel" src="assets/5.png" alt="">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <h5>Dikarenakan kasus Covid19 yang sedang melonjak Diharapkan untuk tetap dirumah saja </h5>
                      <p><?php echo date('m/j/Y'); ?></p>
                    <!--img src="..." class="d-block w-100" alt="...">-->
                  </div>
                  <div class="carousel-item">
                    <h5>Apabila diharuskan keluar rumah, jangan lupa terapkan protokol kesehatan ketat </h5>
                    <p><?php echo date('m/j/Y'); ?></p>
                     <!--img src="..." class="d-block w-100" alt="...">-->
                  </div>
                  <div class="carousel-item">
                    <h5>Stay safe dan jangan sakit karena Rumah sakit sudah penuh</h5>
                    <p><?php echo date('m/j/Y'); ?></p>
                     <!--img src="..." class="d-block w-100" alt="...">-->
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <img src="assets/previus.png" alt="">
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <img src="assets/next.png" alt="">
                </a>
              </div>
          </div>
    </div>
    
    </body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
