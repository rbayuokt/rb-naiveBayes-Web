<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="img/nbc.png" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- font awsome -->
  <link rel="stylesheet" href="css/fontawesome.css" />
  <link rel="stylesheet" href="css/brands.css" />
  <link rel="stylesheet" href="css/solid.css" />

  <link rel="stylesheet" href="css/gaya.css">

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">

  <title>Tubes A.I</title>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
            <img src="img/nbc.png" alt="" width=50 height=50>
          </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Naive Bayes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_simulasi.php">Data Latih</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.php">About  <span class="sr-only">(current)</span> </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="container" style='margin-top:90px'>
      <div class="row">

        <div class="col-12 mt-5">
          <center><h2 class="tebal mb-5">Anggota Kelompok 1</h2></center>
          <hr>

          <div class="row mt-5">
          <div class="col-md-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/bayu1.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">
                    <b>Rizky Bayu Oktavian</b><br>
                    3411161124
                    <br><br>
                    - Programer -
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/bayu2.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">
                    <b>Rizky Bayu Oktavian</b><br>
                    3411161124
                    <br><br>
                    - Tester -
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/bayu3.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">
                    <b>Rizky Bayu Oktavian</b><br>
                    3411161124
                    <br><br>
                    - Documentator -
                  </p>
                </div>
              </div>
            </div>
          </div>
          
        </div><!-- end col -->
      </div><!-- end row -->

      <div class="row mt-5">
          <div class="col-12">
            <h3 class="text-center text-abu1 mt-4">'' <b>Besok libur</b> is my favorite word ''</h3>
          </div>
        </div>
    </div><!-- end container -->

<!-- Footer -->
<footer class="page-footer font-small abu1 mt-5">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 d-flex justify-content-center">
          
          <!--Instagram-->
          <a class="icn" href="https://www.instagram.com/rbayuokt/" target="_blank">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>

          <!-- Github -->
          <a class="icn" href="https://github.com/rbayuokt" target="_blank">
            <i class="fab fa-github fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>

          <!--Linkedin -->
          <a class="icn" href="https://www.linkedin.com/in/rizky-bayu-oktavian" target="_blank">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>

          <!--Pinterest-->
          <a class="icn" href="https://dribbble.com/rbayuokt_" target="_blank">
            <i class="fab fa-dribbble fa-lg white-text fa-2x"> </i>
          </a>
        </div>

        <div class="text-center">
          Made with <i class="fa fa-heart" style="color:#dc3545"></i> in Cimahi
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 abu2">© <?php echo date('Y'); ?> Copyright
    <a href="https://github.com/rbayuokt">rbayuokt</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script src="js/jquery.js"></script>

<!-- validasi -->
<script>
  $(document).ready(function(){
    $('.toggle').click(function(){
      $('ul').toggleClass('active');
    });
  });
</script>
</body>
</html>
