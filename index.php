<?php
include 'controllers.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happinness Slice</title>

<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,700;1,300;1,700&display=swap" rel="stylesheet">
<!-- feather icons -->
<script src="https://unpkg.com/feather-icons"></script>

<!-- my style -->
    <link rel=" stylesheet" href="css/style.css">
</head>


<body>

<!-- navbar start -->
<nav class="navbar">
<a href="#" class="navbar-logo">Happinnes<span>Slice</span>.</a>

<div class="navbar-nav">
<a href="#">Home</a>
<a href="#about">Tentang Kami</a>
<a href="#menu">Menu</a>
<a href="#products">Products</a>
<a href="#contact">Kontak</a>
</div>

<div class="navbar-extra">
    <a href="#" id="search"><i data-feather="search"></i></a>
    <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
    <a href="" id="hamburger-menu"><i data-feather="menu"></i></a>
</div>

</nav>
<!-- navbar end -->

<!-- hero section start -->
<section class="hero" id="home">
    <main class="content">
        <h1>Happinness Starts <span>Here</span></h1>
        <p>Making life sweet is the purpose of our existence</p>
        <a href="#" class="cta">Beli Sekarang</a>
    </main>
</section>
<!-- hero section end -->

    <!--about section start  -->
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>

        <div class="row">
            <div class="about-img">
                <img src="../project akhir/image/bakery/abc.jpeg" alt="Tentang Kami">
            </div>
            <div class="content">
                <h3>Kenapa memilih bakery kami</h3>
                <p>It's a bakery and has been making delicious food for decades.</p>
                <p>People who love to eat are always the best people.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio numquam, assumenda incidunt accusantium laudantium, quia eligendi consectetur ipsa voluptas dolore vitae repudiandae modi molestiae itaque. Cum sed esse cupiditate eligendi?</p>
            </div>
        </div>
        
    </section>
    <!-- about section end -->

<!-- menu section start -->
<section id="menu" class="menu">
    <h2><span>Menu</span> Kami</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum, consequatur.</p>


    <div class="row">
        <div class="menu-card">
            <br>
            <img src="../project akhir/image/bakery/1.jpeg" alt="Birthday Cake's" 
            alt="menu-card-img" style="width: 20%;height: 200px;">
            <h3 class="menu-card-title">- Birthday Cake's -</h3>
            <p class="menu-card-price">Mulai dari 30K</p>
        </br>

            </div>
        <div class="menu-card">
            <br>
            <img src="../project akhir/image/bakery/2.jpg" alt="Birthday Cake's" 
            alt="menu-card-img" style="width: 20%;height: 200px;">
            <h3 class="menu-card-title">- Waffle -</h3>
            <p class="menu-card-price">Mulai dari 10K</p>
        </br>

            </div>
        <div class="menu-card">
            <br>
            <img src="../project akhir/image/bakery/3.jpeg" alt="Birthday Cake's" 
            alt="menu-card-img" style="width: 20%;height: 200px;">
            <h3 class="menu-card-title">- Ice Cream -</h3>
            <p class="menu-card-price">Mulai dari 5K</p>
        </br>

            </div>
        <div class="menu-card">
            <br>
            <img src="../project akhir/image/bakery/4.jpg" alt="Birthday Cake's" 
            alt="menu-card-img" style="width: 20%;height: 200px;">
            <h3 class="menu-card-title">- Donuts -</h3>
            <p class="menu-card-price">Mulai dari 7K per satuan</p>
        </br>

            </div>
        <div class="menu-card">
            <br>
            <img src="../project akhir/image/bakery/5.jpeg" alt="Birthday Cake's" 
            alt="menu-card-img" style="width: 20%;height: 200px;">
            <h3 class="menu-card-title">- Slice Cake -</h3>
            <p class="menu-card-price">Mulai dari 12K</p>
        </br>

            </div>
        <div class="menu-card">
            <br>
            <img src="../project akhir/image/bakery/6.jpeg" alt="Birthday Cake's" 
            alt="menu-card-img" style="width: 20%;height: 200px;">
            <h3 class="menu-card-title">- Drink's -</h3>
            <p class="menu-card-price">Mulai dari 10K</p>
        </br>

    </div>
            </div>
        </div>

    </div>
</section>

<!-- menu section end -->

<!-- products section start -->
<section class="products" id="products">
    <h2><span>Produk Unggulan</span> Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo unde eum, ab fuga possimus iste.</p>

    <div class="row">
      <div class="product-card">
        <div class="product-icons">
          <a href="form.php"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="../project akhir/image/bakery/5.jpeg" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>Slice Cake's</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 12K <span>IDR 15K</span></div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons">
          <a href="form.php"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="../project akhir/image/bakery/1.jpeg" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>Birthday Cake's</h3>
          <div class="product-stars">
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons">
          <a href="form.php"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="../project akhir/image/bakery/3.jpeg" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>Ice Cream</h3>
          <div class="product-stars">
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 5K <span>IDR 10K</span></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Products Section end -->

 <!-- Contact Section start -->
 <section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, provident.
    </p>

    <div class="row">
        <form action="">
            <div class="input-group">
              <i data-feather="user"></i>
              <input type="text" placeholder="nama">
            </div>
            <div class="input-group">
              <i data-feather="mail"></i>
              <input type="text" placeholder="email">
            </div>
            <div class="input-group">
              <i data-feather="phone"></i>
              <input type="text" placeholder="no hp">
            </div>
            <button type="submit" class="btn">kirim pesan</button>
          </form>
    
        </div>
      </section>
      <!-- Contact Section end -->

 <!-- Footer start -->
 <footer>
    <div class="socials">
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="twitter"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="credit">
      <p>Created by <a href="">lismasalmaa</a>. | &copy; 2023.</p>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- Modal Box Item Detail start -->
  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/products/1.jpg" alt="Product 1">
        <div class="product-content">
          <h3>Product 1</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis obcaecati
            ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus voluptatibus!</p>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
          <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Box Item Detail end -->


    <!-- feather icons -->
    <script>
        feather.replace()
      </script>  

<!-- my javascript -->
<script src="js/script.js"></script>
</body>
</html>