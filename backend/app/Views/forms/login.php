<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bienvenue - Sm@rtDiso</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.9.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Sm@rtDiso</a></h1>

       <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted scrollto" href="<?= base_url() ?>/">Retour</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url() ?>"/>Home</a></li>
          <li>Login</li>
        </ol>
        <h2>Connecter-vous a Sm@rtDiso</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <!-- start login && image -->
          <div class="row">
            <div class="col-lg-6 mt-5 mt-lg-0">
             <form class="col-lg-7" method="post" data-toggle="validator">
                <div class="form-group">
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <!-- Error -->
                    <div class="help-block with-errors"></div>

                    <input type="text" required name="login" data-error="You must have a name." id="inputName" autocomplete="off" class="form-control" />
                    <label class="form-label" for="form2Example1">Login</label>
                  </div>
                </div>
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="password" required name="password" class="form-control" />
                  <label class="form-label" for="form2Example2">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class=" mb-4 text-left">
                  <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password ?</a>
                  </div>
                </div>

                <!-- Submit button -->
                <button type="button" type="submit" class="btn btn-success btn-block mb-9 col-lg-12">Login</button>

                <!-- Register buttons -->
                <div class="text-center py-4">
                  <p>Rassurez-vous que vous avez une autorisation pour acceder à ce site? <a href="<?= base_url() ?>/">Contactez Nous</a></p>
                </div>
              </form>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
              bloc image
            </div>
          </div>
        <!-- start login && image -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

   
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Sm@rtDiso</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>/assets/js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

</body>

</html>