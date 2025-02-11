<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ECOURSES - Online Courses HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
 <?php include 'header.php' ;
         ?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">GALERİ</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">ANASAYFA</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">GALERİ</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
<h1 class="gallery-title">Fotoğraf Galerisi</h1>

<div class="gallery-container">
  <div class="gallery-img-container">
    <img src="img/yukari1.png" alt="Yukarı 1" class="gallery-img">
  </div>
  <div class="gallery-img-container">
    <img src="img/yukari2.png" alt="Yukarı 2" class="gallery-img">
  </div>
  <div class="gallery-img-container">
    <img src="img/orta.png" alt="Orta" class="gallery-img">
  </div>
  <div class="gallery-img-container">
    <img src="img/orta2.png" alt="Orta 2" class="gallery-img">
  </div>
  <div class="gallery-img-container">
    <img src="img/koy1.png" alt="Koy 1" class="gallery-img">
  </div>
  <div class="gallery-img-container">
    <img src="img/koy2.png" alt="Koy 2" class="gallery-img">
  </div>
    <div class="gallery-img-container">
    <img src="img/orta2.png" alt="Orta 2" class="gallery-img">
  </div>
  <div class="gallery-img-container">
    <img src="img/koy1.png" alt="Koy 1" class="gallery-img">
  </div>
  <div class="gallery-img-container">
    <img src="img/koy2.png" alt="Koy 2" class="gallery-img">
  </div>
    <div class="gallery-img-container">
    <img src="img/orta2.png" alt="Orta 2" class="gallery-img">
  </div>
  <div class="gallery-img-container">
    <img src="img/koy1.png" alt="Koy 1" class="gallery-img">
  </div>
  <div class="gallery-img-container">
    <img src="img/koy2.png" alt="Koy 2" class="gallery-img">
  </div>
</div>

<!-- Modal (Büyütülen Fotoğraf) -->
<div id="imageModal" class="modal">
  <span class="close">&times;</span>
  <img id="modalImage" src="" alt="Büyütülmüş Fotoğraf">
  <button id="prevBtn">&#10094;</button>
  <button id="nextBtn">&#10095;</button>
</div>

   


    <!-- Footer Start -->
 <?php include 'footer.php' ;
         ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>