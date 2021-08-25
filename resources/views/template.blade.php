<!doctype html>
<html lang="fr">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <link rel="stylesheet" href="../assets/css/maicons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="../assets/css/theme.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <header>
        <!--Bare de navigation/nav-bar-->
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <form action="#">
                <div class="input-group input-navbar">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search.." aria-label="Username" aria-describedby="icon-addon1">
                </div>
                </form>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="index"><span font color="red"> Home </span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="revenue/create">New Revenue</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="depense/create">New Depense</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="depense">Détail des Depenses</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="revenue">Détail Des Revenues</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/@yield('bgimage'));">
        <div class="hero-section">
          <div class="container text-center wow zoomIn">

            <h1 class="display-4">@yield('titre')</h1>
            <a href="#" class="btn btn-primary">@yield('sousTitre')</a>
          </div>
        </div>
      </div>
    <div class="bg-light">
        <div class="page-section py-3 mt-md-n5 custom-index">
          <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-primary text-white">
                        <span class="mai-shield-checkmark"></span>
                        </div>
                        <p><span>Reveneue Total restant: </span></p>
                    </div>
                </div>
              <div class="col-md-3 py-3 py-md-0">
                <div class="card-service wow fadeInUp">
                  <div class="circle-shape bg-accent  text-white">
                    <span class="mai-basket"></span>
                  </div>
                  <p><span>Depense</span>-Journalier: </p>
                </div>
              </div>
              <div class="col-md-3 py-3 py-md-0">
                <div class="card-service wow fadeInUp">
                  <div class="circle-shape bg-accent  text-white">
                    <span class="mai-basket"></span>
                  </div>
                  <p><span>Depense</span>-Mois</p>
                </div>
              </div>
              <div class="col-md-3 py-3 py-md-0">
                <div class="card-service wow fadeInUp">
                  <div class="circle-shape bg-accent text-white">
                    <span class="mai-basket"></span>
                  </div>
                  <p><span>Depense</span>-Année</p>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!--contenue-->
    <div class="container mt-4"> @yield('content') </div>
    <!--footer-->
    <footer class="page-footer">
        <div class="container">
          <div class="row px-md-3">
            <div class="col-sm-6 col-lg-3 py-3">
                <div class="ml-8">
                    <h5>Contact Our-Team</h5>
                    <p class="footer-link mt-2">Site vcn, Thies University</p>
                    <a  class="footer-link">77 298 36 28</a>
                    <a  class="footer-link">sarrelhadjiamath@gmail.com</a>
                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                      <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                      <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                      <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                      <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                      <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>
          </div>
          <hr>
           <p id="copyright">Copyright &copy; 2021 tout droit reservé</p>
        </div>
    </footer>
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/js/theme.js"></script>

</body>
</html>
