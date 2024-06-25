<?php
$A=
[
  [
    "gambar" =>"img/j.jpeg" ,
  "menu"=> "Cangkir Desain",
  "harga"=>" IDR 35K"
],
[
  "gambar" =>"img/OIP.jpeg",
  "menu"=> "Id Card",
  "harga"=>"IDR 25k"
],
[
  "gambar" => "img/k.jpg",
  "menu"=> "Sablon Kaos",
  "harga"=>"IDR 55k"
]

];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>penjualan</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- My Style -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Navbar start -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">Unit<span>Produksi</span>.</a>

    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#products">Produk</a>
    
      
    </div>

    <div class="navbar-extra">
      <a href="#" id="search-button"><i data-feather="search"></i></a>
      <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>

    <!-- Search Form start -->
    <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box"><i data-feather="search"></i></label>
    </div>
    <!-- Search Form end -->

    

  </nav>
  <!-- Navbar end -->

  <!-- Hero Section start -->
  <section class="hero" id="home">
    <div class="mask-container">
      <main class="content">
        <h1>Unit <span>Produksi</span> MAKN Ende</h1>
        <p>Menyediakan Berbagai Desain Kreatif Siswa/Siswi MAKN Ende.</p>
      </main>
    </div>
  </section>
  <!-- Hero Section end -->

  <!-- About Section start -->
  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/IMG_0624-1024x683.jpg" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>apa itu unit produksi?</h3>
        <p>Unit Produksi adalah suatu Divisi yang bertugas untuk menjualkan
            hasil desain siswa/siswi MAKN Ende. diunit Produksi tersedia
            berbagai produk desain , anda bisa bisa memesannya sesuai keinginan
            dan kemauan anda .</p>
        <p>dengan harga terjangkau tak membuat dompet kosong , desain kece dan
            trampil hasil kreativitas siswa/siswa MAKN Ende. Tak akan membuat
            anda kecewa .Produk yang kami tawarkan antara lain, cangkir, kaos,
            topi, Id Card dan masih banyak lagi. silahkan dilihat dan jangan
            lupa Chenkout.</p>
      </div>
    </div>
  </section>
  <!-- About Section end -->

  
 

  <!-- Products Section start -->
  <section class="products" id="products">
    <h2><span>Produk Unggulan</span> Kami</h2>
    

    <div class="row">
    <?php foreach ($A as $a) :?>
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src=<?php echo $a["gambar"] ?> alt="Product 1"/>
        </div>
        <div class="product-content">
          <h3><?= $a["menu"] ?></h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price"><?= $a["harga"] ?></div>
        </div>
      </div>
      <?php  endforeach; ?> 
    </div>
  </section>
  <!-- Products Section end -->
   
  <!-- Contact Section end -->


 

  <!-- Footer start -->
  <footer>
    <div class="socials">
      <a href="https://www.instagram.com/fika_lamadike/"><i data-feather="instagram"></i></a>
      <a href="https://www.youtube.com/channel/UC072LPnp0mWeKB4Zn2MBDeA"><i data-feather="youtube"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      
    </div>

    <div class="credit">
      <p>Created by <a href="">Najwa Alwi</a>. | &copy; 2024.</p>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- Modal Box Item Detail start -->
  <div class="modal" id="item-detail-modal">
    
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/IMG_0624-1024x683.jpg" alt="Product 1">
        <div class="product-content">
          <h3>Produk Desain</h3>
          <p>Silahkan Pesan dan Costum Sebelum Kehabisan</p>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          
          <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a>
        </div>
      </div>
    </div>
    
  </div>
  <!-- Modal Box Item Detail end -->

  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>

  <!-- My Javascript -->
  <script src="js/script.js"></script>
</body>

</html>