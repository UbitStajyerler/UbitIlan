
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="keywords" content="HTML,CSSJAVASCRİPT"/><!-- burası insaanlr html yazdığımnda önerilen olarak gösterme-->
<meta name="description" content="Staj eğitimşnde gördüklerim"/><!-- Burası aramada altta yazan açıklama -->
<meta name="author" content="Selahattin"/><!-- Yazarın adını yazdığımız kısım-->
<link rel="stylesheet" type="text/css" href="BS4/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="still.css"/>
<script src="kontrol.js" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/3aa3356454.js" crossorigin="anonymous"></script>



<!--<link rel="shortcut icon" href="http://www.yusufsezer.com.tr/favicon.ico" type="image/x-icon" />-->
<!-- 
    css ayarla
    mail okey(uye_kayit sonuc)
    databes yeniden oluşturduk
    login ve kayit yap
-->

<title>Staj eğitim</title>

</head>
<body style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/Others/images/91.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;" >
<!--- Kullanici:<i class="fas fa-user fa-4x fa-spin"></i> --->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a href="sayfam.php" class="navbar-brand p-0"><img class="pr-0 mr-0"src="resimler/sk_logo.jpg" style="width:60px;border-radius: 50%;" alt=""> Selahattin Karaca</a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="sayfam.php">Anasayfa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kimsinsen.php">Hakkımızda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cv.php">Iletişim</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog_sayfa.php">Blog</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Uygulamalar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="sozluk.php">Sozluk</a>
          <a class="dropdown-item" href="kutuphane.php">Kutuphane</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <i class="fas fa-user fa-2x mr-3"></i>
    <a href="giris.php"><button type="button" class="btn btn-primary mr-2" >Giriş</button></a>
    <a href="kayit.php"><button type="button" class="btn btn-success mr-2">Kayıt Ol</button></a>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


    <!--CAROUSEL BAŞLANGIC --->
   <!--- <div id="CarouselEx" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img class="d-block w-100" src="resimler/manzara1.jpg" alt="first slide" height="60%">
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="resimler/manzara2.jpg" alt="first slide" height="60%">
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="resimler/manzara3.jpg" alt="first slide" height="60%">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="resimler/manzara4.jpg" alt="first slide" height="60%">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="resimler/manzara5.jpg" alt="first slide" height="60%">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="resimler/manzara6.jpg" alt="first slide" height="60%">
            </div>
        </div>
        <a class="carousel-control-prev" href="#CarouselEx"  role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Önceki</span>
        </a>
        <a class="carousel-control-next" href="#CarouselEx"  role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Önceki</span>
        </a>
    </div>--->
   

<div class="container bg-dark mt-3 mb-4 pb-4">

      <!--beyaz iç çerçeve-->
      <br>
      <div class="container bg-light p-4 mb-2 mt-3">
        <!--beyaz başlangıc-->
        <div class="row">
          <div class="col-sm col-md-3">
            <h2>Col1 sol</h2>
           
            <!--emlak-->
            
            <div class="row">
                  <div class="col-sm col-md-2 mb-0"><i class="fa fa-home" aria-hidden="true"></i></div>
                  <div class="col-sm col-md-8 mb-0"><b>Emlak</b></div>
                  
                  
              </div>
              <hr class="color-dark">
                <!--row1son-->
                <div class="row ">
 

                    <ul style="list-style-type: none;">
                      
                      <li><a  class="text-dark"href="">Konut(608.183)</a></li>
                      <li><a   class="text-dark" href="">İş Yeri (114.318)</a></li>
                      <li><a  class="text-dark" href="">Arsa (192.700)</a></li>
                      <li><a  class="text-dark" href="">Projeler (599)</a></li>
                      <li><a  class="text-dark" href="">Bina (10.300)</a></li>
                      <li><a  class="text-dark" href="">Devre Mülk (3.210)</a></li>
                      <li><a  class="text-dark" href="">Turistik Tesis (1.741)</a></li>
                    </ul>
               </div>
            
                
            
            <!--sol emlak son-->
            
                <div class="row  ">
                  <div class="col-sm col-md-2 mb-0"><i class="fa fa-car" aria-hidden="true"></i></div>
                  <div class="col-sm col-md-8 mb-0"><b>Araç</b></div>
                  
                  
                </div>
                <hr class="color-dark">
                <!--row1son-->
                <div class="row ">
 

                  <ul style="list-style-type: none;">
                   
                    <li><a  class="text-dark"href="">Vasıta (587.181)</a></li>
                    <li><a   class="text-dark" href="">Otomobil (365.309)</a></li>
                    <li><a  class="text-dark" href="">Arazi, SUV & Pickup (59.077)</a></li>
                    <li><a  class="text-dark" href="">Motosiklet (41.824)</a></li>
                    <li><a  class="text-dark" href="">Minivan & Panelvan (54.987)</a></li>
                    <li><a  class="text-dark" href="">Kiralık Araçlar (7.194)</a></li>
                    <li><a  class="text-dark" href="">Deniz Araçları (6.469)</a></li>
                    <li><a  class="text-dark" href="">Hasarlı Araçlar (3.604)</a></li>
                  </ul>
                </div>
            
            <!--vasıta son-->

            <div class="row">
                  <div class="col-sm col-md-2 mb-0"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                  <div class="col-sm col-md-8 mb-0"><b>İkinci El ve Sıfır Eşya</b></div>
                  
                  
              </div>
              <hr class="color-dark">
                <!--row1son-->
                <div class="row ">
 
                    <ul style="list-style-type: none;">
                      
                      <li><a  class="text-dark"href="">Bilgisayar (266.643)</a></li>
                      <li><a   class="text-dark" href="">Cep Telefonu (198.638)</a></li>
                      <li><a  class="text-dark" href="">Ev Dekorasyon (176.410)</a></li>
                      <li><a  class="text-dark" href="">Ev Elektroniği (78.657)</a></li>
                      <li><a  class="text-dark" href="">Elektrikli Ev Aletleri (71.166)</a></li>
                      <li><a  class="text-dark" href="">Giyim & Aksesuar (90.654)</a></li>
                      <li><a  class="text-dark" href="">Saat (38.116)</a></li>
                      <li><a  class="text-dark" href="">Anne & Bebek (42.176)</a></li>
                      <li><a  class="text-dark" href="">Kişisel Bakım & Kozmetik (31.841)</a></li>
                      <li><a  class="text-dark" href="">Hobi & Oyuncak (44.174)</a></li>
                      <li><a  class="text-dark" href="">Oyun & Konsol (37.238)</a></li>
                      <li><a  class="text-dark" href="">Kitap, Dergi & Film (23.191)</a></li>
                      <li><a  class="text-dark" href="">Müzik (61.224)</a></li>
                      <li><a  class="text-dark" href="">Spor (78.603)</a></li>
                      <li><a  class="text-dark" href="">Takı, Mücevher & Altın (6.860)</a></li>
                      <li><a  class="text-dark" href="">Koleksiyon (31.011)</a></li>
                      <li><a  class="text-dark" href="">Antika (30.716)</a></li>
                      <li><a  class="text-dark" href="">Bahçe & Yapı Market (104.905)</a></li>
                      <li><a  class="text-dark" href="">Teknik Elektronik (46.126)</a></li>
                      <li><a  class="text-dark" href="">Ofis & Kırtasiye (52.316)</a></li>
                      <li><a  class="text-dark" href="">Yiyecek & İçecek (13.790)</a></li>
                    </ul>
               </div>
            <!--İkinci el ve sıfır eşya son-->
          </div>
          <!--col1 sol1 son-->
          <div class="col-sm col-md-9">
              <h2>Col2 sağ</h2>
              <div class="row">
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2"style="   width: 10em; height: 2em;">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/kimsinsen.jpg"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2" >Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/kimsinsen.jpg"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/kimsinsen.jpg"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/kimsinsen.jpg"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/kimsinsen.jpg"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/manzara5.jpg"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2 mb-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/manzara5.jpg"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2 mb-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/manzara5.jpg"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2 mb-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/manzara5.jpg"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2 mb-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/manzara5.jpg"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2 mb-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-3"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-3"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-3"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-3"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div><div class="col-sm col-md-2 mr-2 mt-3"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">justfy olan resim bura</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Margin resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span  class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <div class="col-sm col-md-2 mr-2 mt-2"> 
                    <a href="">
                        <img src="resimler/Amoungus.png"  class="" width="80%" height="70%" >
                        <span class="text_yaz text-justify text-dark mt-2">Ağaç resimi burda gözükğr</span>
                    </a>
                </div>
                <!--Row resimler olan sağ son-->
              </div>
          </div>
          <!--col sağ1 son-->
          <!--row1 son-->
        </div>
        <!--beyaz son-->
      </div>

 
</div>


<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://instagram/selahattin0." role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/selahattinkaraca" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
       Bu sayfa şuan için doğa reesimleri göstermektedir.Takipte kal..
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        

       

        <!--Grid column-->

        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 offset-md-4 mb-4 mb-0">
          <h5 class="text-uppercase">Linkler</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="https://github.com/selahattinkaraca" class="text-white">Github</a>
            </li>
            <li>
              <a href="selahattinkaraca7880@gmail.com" class="text-white">Gmail</a>
            </li>
            <!--
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
    -->
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  © 2021 :
    <a class="text-white" href="">Selahattin.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>