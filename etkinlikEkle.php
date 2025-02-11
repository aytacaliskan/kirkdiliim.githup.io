<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ETKİNLİK EKLE</title>
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
                <h3 class="display-4 text-white text-uppercase">ETKİNLİK EKLE</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Anasayfa</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">ETKİNLİK EKLE</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->



    <!-- Detail Start -->
    <div class="container-fluid py-5">

        <div class="container py-5">

            <div class="row">

                <div class="col-lg-8">
                  


                    <!-- Comment Form -->
                    <div class="bg-secondary rounded p-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">ETKİNLİK EKLE</h3>
                        <form>  
                            <div class="form-group">
                            <label for="eventType">Etkinlik Türü *</label>
                            <select class="form-control border-0" id="eventType" name="eventType" required>
                                <option value="" disabled selected>Seçiniz</option>
                                <option value="dugun">Düğün</option>
                                <option value="nisan">Nişan</option>
                            </select>
                        </div>

                                                   <div class="form-group">
                            <label for="brideName">Gelin Ad/Soyad *</label>
                            <input type="text" class="form-control border-0" id="brideName" name="brideName" placeholder="Gelin ad ve soyadını girin" required>
                        </div>

                        <div class="form-group">
                            <label for="groomName">Damat Ad/Soyad *</label>
                            <input type="text" class="form-control border-0" id="groomName" name="groomName" placeholder="Damat ad ve soyadını girin" required>
                        </div>

                        <a href="#" class="text-decoration-none h6 m-0">Kız Tarafı Bilgileri :</a><br>

                        <div class="form-group">
                            <label for="brideMotherName">Gelin Anne Adı *</label>
                            <input type="text" class="form-control border-0" id="brideMotherName" name="brideMotherName" placeholder="Gelin annesinin adını girin" required>
                        </div>

                        <div class="form-group">
                            <label for="brideFatherName">Gelin Baba Adı *</label>
                            <input type="text" class="form-control border-0" id="brideFatherName" name="brideFatherName" placeholder="Gelin babasının adını girin" required>
                        </div>

                        <a href="#" class="text-decoration-none h6 m-0">Erkek Tarafı Bilgileri :</a><br>

                        <div class="form-group">
                            <label for="groomMotherName">Damat Anne Adı *</label>
                            <input type="text" class="form-control border-0" id="groomMotherName" name="groomMotherName" placeholder="Damat annesinin adını girin" required>
                        </div>

                        <div class="form-group">
                            <label for="groomFatherName">Damat Baba Adı *</label>
                            <input type="text" class="form-control border-0" id="groomFatherName" name="groomFatherName" placeholder="Damat babasının adını girin" required>
                        </div>

                        <div class="form-group">
                            <label for="weddingDate">Düğün Tarihi *</label>
                            <input type="date" class="form-control border-0" id="weddingDate" name="weddingDate" required>
                        </div>

                        <div class="form-group">
                            <label for="startTime">Başlangıç Saati *</label>
                            <input type="time" class="form-control border-0" id="startTime" name="startTime" min="09:00" max="23:00" required>
                        </div>

                        <div class="form-group">
                            <label for="endTime">Bitiş Saati *</label>
                            <input type="time" class="form-control border-0" id="endTime" name="endTime" min="09:00" max="23:59" required>
                        </div>

                        <div class="form-group">
                            <label for="venueName">Düğün Salonu Adı *</label>
                            <input type="text" class="form-control border-0" id="venueName" name="venueName" placeholder="Düğün salonu adını girin" required>
                        </div>

                        <div class="form-group">
                            <label for="venueAddress">Düğün Salonu Adresi *</label>
                             <textarea id="message" cols="10" rows="2" class="form-control border-0"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="contactNumber">İletişim Numarası 1*</label>
                            <input type="tel" class="form-control border-0" id="contactNumber" name="contactNumber" placeholder="0XXX XXX XX XX" pattern="0[0-9]{3} [0-9]{3} [0-9]{2} [0-9]{2}" required>
                        </div>
                        <div class="form-group">
                            <label for="contactNumber2">İletişim Numarası 2*</label>
                            <input type="tel" class="form-control border-0" id="contactNumber2" name="contactNumber2" placeholder="0XXX XXX XX XX" pattern="0[0-9]{3} [0-9]{3} [0-9]{2} [0-9]{2}" required>
                        </div>


                            <div class="form-group">
                                <label for="message">Açıklama :</label>
                                <textarea id="message" cols="20" rows="4" class="form-control border-0"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="photoUpload" class="d-block">Fotoğraf Yükleyiniz. (Dikey formda olması gerekmektedir.) *</label>
                                <input type="file" class="form-control-file" id="photoUpload" name="photoUpload" accept=".jpg, .jpeg, .png, .gif" required>
                            </div>

                            <script>
                                // Bugünün tarihini al ve minimum tarih olarak ayarla
                                document.getElementById("weddingDate").setAttribute("min", new Date().toISOString().split("T")[0]);

                                // Başlangıç saatinden önce bitiş saati seçilmesini engelle
                                document.getElementById("startTime").addEventListener("change", function () {
                                    document.getElementById("endTime").setAttribute("min", this.value);
                                });
                            </script>

                            <div class="form-group mb-0">
                                <input type="submit" value="Gönder" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">
<br><br><br>
                                Bir sorun varsa lütfen etkinlik bilgilerini "yozgatcekerekkirkdilim@gmail.com" adresinden bize gönderiniz.
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->


                    <!-- Search Form -->
                    <div class="mb-5">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-transparent text-primary"><i
                                            class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Category List -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Web Design</a>
                                <span class="badge badge-primary badge-pill">150</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Web Development</a>
                                <span class="badge badge-primary badge-pill">131</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Online Marketing</a>
                                <span class="badge badge-primary badge-pill">78</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Keyword Research</a>
                                <span class="badge badge-primary badge-pill">56</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Email Marketing</a>
                                <span class="badge badge-primary badge-pill">98</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Recent Post -->
                   

                    <!-- Tag Cloud -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->


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