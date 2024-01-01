<?php
include("dijital.php");

if(isset($_POST["name"], $_POST["nickname"], $_POST["email"], $_POST["number"], $_POST["password"], $_POST["date"])){
  $adSoyad = $_POST["name"];
  $kullaniciAdi = $_POST["nickname"];
  $kullaniciMail = $_POST["email"];
  $telefon = $_POST["number"];
  $sifre = $_POST["password"];
  $dogumTarihi = $_POST["date"];
  $eklem="";
  $eklem = "INSERT INTO kullanicibilgileri(adsoyad, kullaniciAdi, email, telefon, sifre, dogumTarihi) VALUES ('".$adSoyad."', '".$kullaniciAdi."', '".$kullaniciMail."', '".$telefon."', '".$sifre."', '".$dogumTarihi."')";

  if($baglan->query($eklem) === TRUE){
    echo "<script>alert('Kayıt başarıyla oluşturuldu.')</script>";
    header("Location: girisYap.php");
    exit();

  } 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- icon kütüphanesi -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <!-- css -->
    <link rel="stylesheet" href="css/main.css" />
    <!-- document icon -->
    <link
      rel="shortcut icon"
      href="img/alıntıatlası.png"
      type="image/x-icon"
    />
    <link rel="shortcut icon" href="img/alıntıatlası.png" type="image/x-icon" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KayıtOl</title>
  </head>
  <style>
    body {
      font-size: 62.5%;
      margin: 0;
    }

    main {
      background-image: linear-gradient(#fff, #d9d9d9);
      margin-top: 10rem;
    }
    h1 {
      margin-top: 20rem;
      text-align: center;
      font-size: 4rem;
    }
    .bilgiler {
      font-size: 1.4rem;
      font-weight: 600;
      width: 40%;
      margin: auto;
      display: block;
      margin-top: 1rem;
    }
    p {
      font-size: 1.4rem;
      margin-bottom: 2rem;
    }
    a {
      color: red;
      text-decoration: none;
    }
    a:hover {
      color: rgb(91, 90, 90);
    }

    #email,
    #nickname,
    #date,
    #number,
    #name,
    #password {
      width: 100%;
      border: 2px solid rgb(175, 174, 174);
      padding: 1rem 1.5rem;
      border-radius: 2rem;
    }
    #email:focus,
    #number:focus,
    #name:focus,
    #date:focus,
    #nickname:focus,
    #password:focus {
      background-color: rgb(193, 192, 192);
      color: white;
    }
    #search-btn{
        margin-bottom: 0.6rem;
    }
    .kayitBtn{
      cursor: pointer;
    }
    .farkli-giris {
      text-align: center;
      font-size: 1.2rem;
      padding-bottom: 2rem;
    }
    .giris {
      border-radius: 4rem;
      padding: 0rem 3rem;
    }
    .b1 {
      background-image: linear-gradient(white, #ffe6e6);
    }
    .b1:hover {
      background-image: linear-gradient(#f4bdbd, black);
      transform: translateY(-5px);
      transition: 0.5s;
    }

    .b2 {
      background-image: linear-gradient(white, #99d6ff);
    }
    .b2:hover {
      background-image: linear-gradient(#7bc5f7, black);
      transform: translateY(-5px);
      transition: 0.5s;
    }
    #a {
      color: black;
    }
    #a:hover {
      color: white;
    }
    @media (max-width: 576px) {
      button {
        padding: 1px;
        margin-bottom: 2rem;
      }
      h1 {
        font-size: 1.5rem;
      }
      .bilgiler {
        width: 50%;
        font-size: 1rem;
        margin-top: 1rem;
      }
      p {
        font-size: 1rem;
      }
      .farkli-giris {
        font-size: 0.3rem;
      }
      .giris {
        padding: 0rem 1rem;
      }
      h4 {
        font-size: 0.8rem;
      }
    }
    @media (min-width: 577px) and (max-width: 992px) {
      button {
        padding: 1px;
        margin: 0;
      }
      .h1 {
        font-size: 2rem;
      }
      .bilgiler {
        width: 40%;
        font-size: 1.7rem;
        margin-top: 1.7rem;
      }
      p {
        font-size: 1.2rem;
      }
      .farkli-giris {
        font-size: 1rem;
        padding-bottom: 2rem;
      }
      .giris {
        padding: 0rem 2rem;
      }
      h4 {
        font-size: 1.1rem;
      }
    }
  </style>
  <body>
  <header class="header">
        <div class="logo">
            <a href="index.html"><img src="image/Dijital (1).png" alt="Logo"></a>
        </div>
        <div class="navbar">
            <a href="index.html">Anasayfa</a>
            <a href="etkinlik.html">Keşfet</a>
            <a href="sanatcilar.html">Sanatçılar</a>
            <a href="etkinlik.html">Sergiler</a>
            <a href="#footer">Hakkımızda</a>
        </div>
        <div class="kayit">
            <!-- icon kullanıcı-->    
            <button  id="search-btn"><i  class="fa-solid fa-magnifying-glass fa-2xl" style="color: #000000;"></i></button>
            <div id="user-icon" class="user-icon">
                <i class="fa-regular fa-user fa-lg" style="color: #000000;"></i>
            </div>
            <button id="navbar-btn"><i  class="fa-solid fa-bars fa-2xl" style="color: #000000;"></i></button>
            <a href="sepet.html" class="btn">Sepete Git</a>   
            
            <!-- icon sepet -->
            <!-- üye olunca beğenilenleri gösteren icon konulacak -->
        </div>
        
        <div class="search-form">
            <input type="text" class="search-input"
            id="search-box" placeholder="Arama Yapınız">
            <i class="fas fa-search" style="color: #000000;">
            </i>
        </div>
    </header>
    <div class="bosluk"></div>

    <main>
    <div id="user-buttons" class="user-buttons" style="display: none;">
            <button id="button1">Giriş Yap</button>
            <button id="button2">Kayıt Ol</button>
        </div> 
    <a href="https://wa.me/5464317500" target="_blank"  class="whatsapp-icon">
            <i class="fa-brands fa-whatsapp fa-2xl"></i>
        </a>
      <div class="div-ana">
        <div class="giris-h1">
          <h1>Kayıt OL</h1>
        </div>
        <form action="kayitOl.php" method="post">
          <div class="ana-form">
            <div class="genel">
              <div class="bilgiler">
                <h3>İsminiz ve Soyisminiz</h3>
              </div>
              <div class="bilgiler">
                <input type="text" placeholder="isminizi ve Soyisminizi Giriniz" id="name" required name="name" />
              </div>
              <div class="bilgiler">
                <h3>Kullanıcı Adınız</h3>
              </div>
              <div class="bilgiler">
                <input type="text" placeholder="Kullanıcı Adınızı Giriniz" id="nickname" required name="nickname" />
              </div>
              <div class="bilgiler">
                <h3>E-mail</h3>
              </div>
              <div class="bilgiler">
                <input type="email" placeholder="Email Giriniz" id="email" required name="email" />
              </div>
              <div class="bilgiler">
                <h3>Telefon Numaranız</h3>
              </div>
              <div class="bilgiler">
                <input type="tel" placeholder="Telefon Numaranızı Giriniz" id="number" required name="number" />
              </div>
              <div class="bilgiler">
                <h3>Şifreniz</h3>
              </div>
              <div class="bilgiler">
                <input type="password" placeholder="Şifrenizi Giriniz" id="password" required name="password" />
              </div>
              <div class="bilgiler">
                <h3>Doğum Tarihiniz</h3>
              </div>
              <div class="bilgiler">
                <input type="date" id="date" required name="date" />
              </div>
            </div>
            <div class="bilgiler">
              <button class="btn kayitBtn" type="submit">Kayıt Ol</button>
            </div>
          </div>
        </form>
        <div class="bilgiler">
          <p>
            Kaydolarak ve alıntıatlası'nı kullanarak alıntıatlası
            <a href="../footer/kullaniciSozlesmesi.html">Kullanım Şartlarını</a>
            ve
            <a href="../footer/gizlilikPolitikasi.html">Topluluk Kurallarını</a>
            kabul ettiğinizi beyan etmiş olursunuz.
          </p>
        </div>
        <div class="farkli-giris">
          <button class="giris b1">
            <a href="../index.html.html" id="a">
              <h4>Google İle Kayıt Ol</h4></a
            >
          </button>
          <button class="giris b2">
            <a href="../index.php" id="a"> <h4>Meta İle Kayıt Ol</h4></a>
          </button>
        </div>
      </div>
    </main>

    <section class="footer">
        <div class="logo">
            <a href="index.html"><img src="image/Dijital-footer.png" alt=""></a>
        </div>
        <div class="container">
            <div class="share">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
           </div>
           <div class="links">
            <a href="index.html">Anasayfa</a>
            <a href="#footer">Keşfet</a>
            <a href="sanatcilar.html">Sanatçılar</a>
            <a href="online-muze.html">Sergiler</a>
            <a href="#footer">Hakkımızda</a>
            <a href="#footer">İletişim</a>
       </div>
           <div class="credit">
            created by <span>Dijital Sanat Galerisi </span> | all rigths reserved
           </div>
        </div>
        <div class="footer-icerik">
            <p>İletişim :</p><br>
            <p>TEL: 90 444 56 56</p><br>
            <p>E-Posta: DijitalSanatGalerisi@gmail.com</p>
        </div>
    </section>
    <script src="js/script.js"></script>
  </body>
</html>

