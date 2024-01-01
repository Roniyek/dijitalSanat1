<?php
include("dijital.php");

if(isset($_POST["email"], $_POST["password"])){
    $kullaniciMail = $_POST["email"];
    $sifre = $_POST["password"];

    // Kullanıcıyı veritabanında kontrol et
    $sorgu = "SELECT * FROM kullanicibilgileri WHERE email='$kullaniciMail' AND sifre='$sifre'";
    $sonuc = $baglan->query($sorgu);

    if($sonuc->num_rows > 0){
        // Giriş başarılı
        echo "<script>alert('Giriş başarılı')</script>";
        header("Location: index.html");
        exit();
    } else {
        // Kullanıcı bulunamadı veya şifre hatalı
        echo "<script>alert('Giriş başarısız. Kullanıcı adı veya şifre hatalı')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- css -->
    <link rel="stylesheet" href="css/main.css" />
    <!-- document icon -->
    <link
      rel="shortcut icon"
      href="../img/alıntıatlası.png"
      type="image/x-icon"
    />
    <link rel="shortcut icon" href="img/alıntıatlası.png" type="image/x-icon" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Giriş Yap</title>
    <!-- icon kütüphanesi -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <style>
      body {
        font-size: 62.5%;
        margin: 0;
      }
      main {
        height: 80vh;
        background-image: linear-gradient(#fff, #d9d9d9);
        margin-top: 10rem;
      }
      .h1 {
        text-align: center;
        font-size: 2rem;
        margin-top: 20rem;
      }
      .bilgiler {
        font-size: 2rem;
        font-weight: 600;
        width: 30%;
        margin: auto;
        display: flex;
        margin-top: 2rem;
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
      #password {
        width: 100%;
        border: 2px solid rgb(175, 174, 174);
        padding: 1rem 1.5rem;
        border-radius: 2rem;
      }
      #email:focus,
      #password:focus {
        background-color: rgb(193, 192, 192);
        color: white;
      }
      #search-btn{
        margin-bottom: 0.6rem;
      }
      .girisBtn{
        width: 15rem;
        background-color: black;
        color: white;
        height: 3rem;
        border-radius: 3rem;
        padding: 2rem 0;
        display: flex;
        align-items: center;
        align-items: center;
        justify-content: center;
        cursor: pointer;
      }
      #checkbox {
        display: flex;
      }
      .farkli-giris {
        text-align: center;
        font-size: 1.2rem;
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
      #a-sifreunutma {
        margin-left: 2rem;
        font-size: 1.5rem;
        color: rgb(53, 51, 51);
      }
      #a {
        color: black;
      }
      #a:hover {
        color: white;
      }

      @media (max-width: 576px) {
        
        .h1 {
          font-size: 1rem;
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
          text-align: center;
          font-size: 0.3rem;
        }
        .giris {
          padding: 0rem 1rem;
        }
        h4 {
          font-size: 0.6rem;
        }
      }
      @media (min-width: 577px) and (max-width: 992px) {
        
        .h1 {
          font-size: 1.5rem;
        }
        .bilgiler {
          width: 40%;
          font-size: 1.5rem;
          margin-top: 1.5rem;
        }
        p {
          font-size: 1.2rem;
        }
        .farkli-giris {
          text-align: center;
          font-size: 0.8rem;
        }
        .giris {
          padding: 0rem 2rem;
        }
        h4 {
          font-size: 0.9rem;
        }
      }
    </style>
  </head>
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
    <div id="user-buttons" class="user-buttons" style="display: none;">
            <button id="button1">Giriş Yap</button>
            <button id="button2">Kayıt Ol</button>
    </div>   
    <main>
    <a href="https://wa.me/5464317500" target="_blank"  class="whatsapp-icon">
            <i class="fa-brands fa-whatsapp fa-2xl"></i>
        </a>
      <div class="h1">
        <h1>Giriş Bilgileri</h1>
      </div>
      <form action="girisYap.php" method="post" class="signin-formu">
        <div class="bilgiler">
          <h3>E-posta</h3>
        </div>
        <div class="bilgiler">
          <input type="email" id="email" required name="email" />
        </div>
        <div class="bilgiler">
          <h3>Şifreniz</h3>
        </div>
        <div class="bilgiler">
          <input type="password" id="password" required name="password" />
        </div>
        <div class="bilgiler" id="checkbox">
          <input type="checkbox" id="benihatırla" />
          <h5>Beni Hatırla</h5>
        </div>
        <div class="bilgiler">
          <button class="girisBtn" type="submit">Giriş Yap</button>
          <label for="sifremiunuttum"
            ><a href="../index.php" id="a-sifreunutma"
              >Şifremi unuttum</a
            ></label
          >
        </div>
        <div class="bilgiler">
          <p>
            Bu form dijitalsanatgalerisi tarafından korunmaktadır ve onun
            <a href="../footer/gizlilikPolitikasi.html">Gizlilik Politikası </a>
            ve
            <a href="../footer/kullaniciSozlesmesi.html">Hizmet Şartları</a>
            geçerlidir.
          </p>
        </div>
      </form>
      <div class="farkli-giris">
        <button class="giris b1">
          <a href="../index.html.html" id="a"> <h4>Google İle Giriş Yap</h4></a>
        </button>
        <button class="giris b2">
          <a href="../index.html.html" id="a"> <h4>Meta İle Giriş Yap</h4></a>
        </button>
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

