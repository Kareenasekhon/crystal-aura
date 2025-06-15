<html>
  <head>
<title>Crystal Aura</title>
<style>
  /* Custom CSS styles */
  * {
    margin: 0;
    padding: 0;
}
  nav {
    background-color: #f4e1d4;
    padding: 10px 0;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  }
  
  .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
  }

  .logo {
    background-color: white;
    padding: 0px;
    margin: 0px 0px 0px 0px;
    border-radius: 5px;
  }

  .logo img {
    height: 54px;
    width: auto;
  }

  .search-bar {
    flex-grow: 1;
    margin: 0 20px;
  }

  .search-bar form {
    display: flex;
  }

  .search-bar input {
    flex-grow: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px 0 0 4px;
  }

  .search-bar button {
    padding: 10px 20px;
    background-color: #b99822;
    color: white;
    border: none;
    border-radius: 0 4px 4px 0;
    cursor: pointer;
  }

  .top-navbar-right {
    display: flex;
    align-items: center;
  }

  .menu {
    margin-left: 20px;
  }

  .menu a {
    color: #333;
    text-decoration: none;
    font-size: 14px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .menu .custom-img {
    display: inline-block;
    margin-bottom: 5px;
  }

  .cart-icon {
    position: relative;
  }

  .cart-count {
    position: absolute;
    top: -8px;
    right: -8px;
    background-color: #b99822;
    color: white;
    border-radius: 50%;
    padding: 2px 6px;
    font-size: 12px;
  }

  .nav-categories {
    display: flex;
    justify-content: center;
    background-color: #f8f8f8;
    padding: 10px 0;
  }

  .nav-categories a {
    color: #333;
    text-decoration: none;
    padding: 5px 15px;
    margin: 0 10px;
    font-size: 16px;
    transition: color 0.3s ease;
  }

  .nav-categories a:hover {
    color: #832729;
  }
  .container-fluid {
    width: 100%;
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
  }

  .carousel-style {
    position: relative;
  }

  .carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
  }

  .carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    backface-visibility: hidden;
    transition: transform .6s ease-in-out;
  }

  .carousel-item.active {
    display: block;
  }

  .carousel-item img {
    display: block;
    width: 100%;
    height: 88%;
  }

  .pd-carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 20px;
    left: 0;
    z-index: 15;
    display: flex;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none;
  }

  .pd-carousel-indicators li {
    box-sizing: content-box;
    flex: 0 1 auto;
    width: 12px;
    height: 12px;
    margin-right: 5px;
    margin-left: 5px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border-radius: 50%;
    opacity: .5;
    transition: opacity .6s ease;
  }

  .pd-carousel-indicators .active {
    opacity: 1;
  }

  .carousel-control-prev,
  .carousel-control-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    color: #fff;
    text-align: center;
    opacity: .5;
    transition: opacity .15s ease;
    background-color: rgba(0,0,0,0.5);
    border-radius: 50%;
  }

  .carousel-control-prev {
    left: 20px;
  }

  .carousel-control-next {
    right: 20px;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: no-repeat 50% / 100% 100%;
  }

  .carousel-control-prev-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e");
  }

  .carousel-control-next-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e");
  }

  @media (max-width: 767px) {
    .carousel-control-prev,
    .carousel-control-next {
      display: none;
    }
  }
  .popular-categories {
    text-align: center;
    padding: 2rem 0;
   
  }

  .popular-cat-heading h4 {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 0.75rem;
    color: #222;
    margin-top: 40px;
  }

  .popular-cat-heading p {
    font-size: 18px;
    color: #555;
    margin-bottom: 1.5rem;
  }

  .divider-image {
    max-width: 100%;
    height: auto;
    margin: 1rem 0;
  }

  .evgShopbyCategory {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2rem;
    padding: 2rem 1rem;
    
    
  }

  .popular-category {
    width: calc(20% - 2rem);
    min-width: 200px;
    margin-bottom: 2rem;
  }

  .prod-card {
    border: none;
    transition: all 0.3s ease;
    background-color: #ffffff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    text-decoration:none;
  }

  .prod-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
  }

  .image-cropper {
    width: 100%;
    height: 0;
    padding-bottom: 100%;
    position: relative;
    overflow: hidden;
  }

  .image-cropper img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .prod-card:hover .image-cropper img {
    transform: scale(1.05);
  }

  .card-body {
    padding: 1.25rem;
  }

  .card-title {
    font-size: 18px;
    margin-bottom: 0.75rem;
    color: #333;
    font-weight: 600;
    transition: color 0.3s ease, transform 0.3s ease;
    text-decoration:none;
    
  }

  .elastic-link {
    color: #d4af37;
    text-decoration: none;
    position: relative;
    font-weight: bold;
    transition: color 0.3s ease, transform 0.3s ease;
    display: inline-block;
  }

  .elastic-link::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 100%;
    height: 2px;
    background-color: #d4af37;
    transform: scaleX(0);
    transition: transform 0.3s ease;
  }

  .elastic-link:hover {
    color: #b8860b;
    transform: translateY(-2px);
  }

  .elastic-link:hover::after {
    transform: scaleX(0);
  }

  .prod-card:hover .card-title {
    color: #d4af37;
    transform: translateY(-2px);
    text-decoration:none;
  }
  .shop-by-cat{
    text-decoration: none;
  }

  @media (max-width: 1200px) {
    .popular-category {
      width: calc(25% - 2rem);
    }
  }

  @media (max-width: 992px) {
    .popular-category {
      width: calc(33.33% - 2rem);
    }
  }

  @media (max-width: 768px) {
    .popular-category {
      width: calc(50% - 2rem);
    }
  }

  @media (max-width: 480px) {
    .popular-category {
      width: calc(100% - 2rem);
    }
  }
  .popular-categories {
    text-align: center;
    padding: 2rem 0;
  }

  .popular-cat-heading h4 {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 0.75rem;
    color: #222;
  }

  .popular-cat-heading p {
    font-size: 18px;
    color: #555;
    margin-bottom: 1.5rem;
  }

  .divider-image {
    max-width: 100%;
    height: auto;
    margin: 1rem 0;
  }

  .gender-categories {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 1rem;
    padding: 2rem 1rem;
  }

  .gender-category {
    width: calc(33.33% - 1rem);
    min-width: 250px;
    margin-bottom: 2rem;
  }

  .gender-link {
    display: block;
    text-decoration: none;
    color: inherit;
    transition: all 0.3s ease;
  }

  .gender-link:hover {
    transform: translateY(-5px);
  }

  .gender-link .image-cropper {
    width: 100%;
    height: 0;
    padding-bottom: 100%;
    position: relative;
    overflow: hidden;
    border-radius: 15px;
  }

  .gender-link .image-cropper img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .gender-link:hover .image-cropper img {
    transform: scale(1.05);
  }

  .gender-link .info-div {
    padding: 1rem 0;
    text-align: center;
  }

  .gender-link .gender-text {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 0.5rem;
    transition: color 0.3s ease;
  }

  .gender-link:hover .gender-text {
    color: #d4af37;
  }

  .gender-link .explore-more {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    color: #d4af37;
  }

  .gender-link .explore-more svg {
    margin-left: 5px;
    transition: transform 0.3s ease;
  }

  .gender-link:hover .explore-more svg {
    transform: translateX(3px);
  }

  @media (max-width: 1200px) {
    .gender-category {
      width: calc(50% - 1rem);
    }
  }

  @media (max-width: 768px) {
    .gender-category {
      width: 100%;
    }
  }
  body {
        font-family: 'Roboto', sans-serif;
        background-color: #f8f8f8;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .spl-list {
        flex: 0 0 calc(25% - 2rem);
        margin: 1rem;
        padding: 1.5rem;
        background-color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        transition: all 0.3s ease;
        text-align: center;
    }

    .spl-list:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .wdget-icons {
        width: 64px;
        height: 64px;
        margin-bottom: 0.5rem;
        display: inline-block;
    }

    h6 {
        font-family: 'Playfair Display', serif;
        font-size: 1rem;
        margin-bottom: 0.25rem;
        color: #333;
    }

    p {
        font-size: 0.8rem;
        color: #666;
        margin: 0;
    }

    .text-uppercase {
        text-transform: uppercase;
    }

    .text-center {
        text-align: center;
    }

    .padding-bottom-half {
        padding-bottom: 0.25rem;
    }

    .rmv-padding {
        padding: 0;
    }

    @media (max-width: 1024px) {
        .spl-list {
            flex: 0 0 calc(33.33% - 2rem);
        }
    }

    @media (max-width: 768px) {
        .spl-list {
            flex: 0 0 calc(50% - 2rem);
        }
    }

    @media (max-width: 480px) {
        .spl-list {
            flex: 0 0 calc(100% - 2rem);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in {
        animation: fadeInUp 0.5s ease forwards;
        opacity: 0;
    }
    .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            background-color: rgba(0, 0, 0, 0.4); /* Black with opacity */
        }

        /* Modal content box */
        .modal-content {
            background-color: white;
            margin: 15% auto; /* Center it vertically and horizontally */
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #888;
            width: 300px; /* Width of the modal */
            text-align: center;
            box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.2);
        }

        /* Button to close the modal */
        .close-btn {
            background-color: #b99822;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 15px;
        }

        .close-btn:hover {
            background-color: #a68820;
        }

</style>
</head>
<body>
<?php include 'header.php'; ?>
  <div class="container-fluid">
    <div id="carousel-a1f4af7c7813876c6f0e75dc81" class="carousel-style carousel slide" data-ride="carousel" data-interval="5000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="">
            <picture>
              <img src="images\Golden Diamond Logo With Crystal Aura Text In Deep Navy.png" alt="logo" class="d-block w-100">
            </picture>
          </a>
        </div>
        <div class="carousel-item">
          <a href="">
            <picture>
              <img src="images\necklace index.jpg" alt="Image" class="d-block w-100">
            </picture>
          </a>
        </div>
        <div class="carousel-item">
          <a href="">
            <picture>
              <img src="images\Designer.png" alt="Image" class="d-block w-100">
            </picture>
          </a>
        </div>
        <div class="carousel-item">
          <a href="">
            <picture>
              <img src="images\Design 1.png" alt="Image" class="d-block w-100">
            </picture>
          </a>
        </div>
        <div class="carousel-item">
          <a href="">
            <picture>
              <img src="images\Design 2.png" alt="Image" class="d-block w-100">
            </picture>
          </a>
        </div>
        
       
      </div>
      <ol class="pd-carousel-indicators">
        <li data-target="#carousel-a1f4af7c7813876c6f0e75dc81" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-a1f4af7c7813876c6f0e75dc81" data-slide-to="1"></li>
        <li data-target="#carousel-a1f4af7c7813876c6f0e75dc81" data-slide-to="2"></li>
        <li data-target="#carousel-a1f4af7c7813876c6f0e75dc81" data-slide-to="3"></li>
      </ol>
      <a class="carousel-control-prev" href="#carousel-a1f4af7c7813876c6f0e75dc81" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
      <a class="carousel-control-next" href="#carousel-a1f4af7c7813876c6f0e75dc81" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#carousel-a1f4af7c7813876c6f0e75dc81').carousel({
        interval: 5000
      });
    });
  </script>

<div class="region col-12">
  <div class="experience-component experience-shopByCategory">
    <div class="popular-categories title-with-image d-lg-block" data-section="Shop By Category">
      <div class="popular-cat-heading mt-4">
        <h4 class="text-center heading3 bold">Shop By Category</h4>
      </div>
      <div class="popular-cat-heading mt-md-4 mt-2">
        <p class="text-center small mb-0">Browse through your favorite categories. We've got them all!</p>
      </div>
      <img class="divider-image" src="Line-Design.svg" alt="divider-image">
    </div>
  </div>
  <div class="experience-component experience-commerce_layouts-popularCategories">
    <div class="evgShopbyCategory popular-categories w-100 d-flex justify-content-center flex-wrap">
      <div class="popular-category">
        <div class="card prod-card">
          <a class="shop-by-cat" href="mangalsutars.php" data-gtm="Mangalsutras">
            <div class="image-cropper">
              <img src="images\mangalsutar.jpg" class="card-img-top" alt="Mangalsutras" loading="lazy">
            </div>
            <div class="card-body text-center p-0">
              <h6 class="card-title text-center my-md-3 my-sm-0">Mangalsutras</h6>
              <span class="elastic-link mb-lg-4 mb-2">Explore</span>
            </div>
          </a>
        </div>
      </div>
      <div class="popular-category">
        <div class="card prod-card">
          <a class="shop-by-cat" href="" data-gtm="Chains">
            <div class="image-cropper">
              <img src="images\chain.jpeg" class="card-img-top" alt="Chains" loading="lazy">
            </div>
            <div class="card-body text-center p-0">
              <h6 class="card-title text-center ">Chains</h6>
              <span class="elastic-link ">Explore</span>
            </div>
          </a>
        </div>
      </div>
      <div class="popular-category">
        <div class="card prod-card">
          <a class="shop-by-cat" href="anklets.php" data-gtm="Anklets">
            <div class="image-cropper">
              <img src="images\anklets.jpg" class="card-img-top" alt="Gold Coins" loading="lazy">
            </div>
            <div class="card-body text-center p-0">
              <h6 class="card-title text-center my-md-3 my-sm-0">Anklets</h6>
              <span class="elastic-link mb-lg-4 mb-2">Explore</span>
            </div>
          </a>
        </div>
      </div>
      <div class="popular-category">
        <div class="card prod-card">
          <a class="shop-by-cat" href="bracelet.php" data-gtm="Bracelets">
            <div class="image-cropper">
              <img src="images\bracelet.jpeg" class="card-img-top" alt="Bracelets" loading="lazy">
            </div>
            <div class="card-body text-center p-0">
              <h6 class="card-title text-center my-md-3 my-sm-0">Bracelets</h6>
              <span class="elastic-link mb-lg-4 mb-2">Explore</span>
            </div>
          </a>
        </div>
      </div>
      <div class="popular-category">
        <div class="card prod-card">
          <a class="shop-by-cat" href="earings.php" data-gtm="Earrings">
            <div class="image-cropper">
              <img src="images\earrings.jpg" class="card-img-top" alt="Earrings" loading="lazy">
            </div>
            <div class="card-body text-center p-0">
              <h6 class="card-title text-center my-md-3 my-sm-0">Earrings</h6>
              <span class="elastic-link mb-lg-4 mb-2">Explore</span>
            </div>
          </a>
        </div>
      </div>
      <div class="popular-category">
        <div class="card prod-card">
          <a class="shop-by-cat" href="bangles.php" data-gtm="Bangles">
            <div class="image-cropper">
              <img src="images\bangles1.jpeg" class="card-img-top" alt="Bangles" loading="lazy">
            </div>
            <div class="card-body text-center p-0">
              <h6 class="card-title text-center my-md-3 my-sm-0">Bangles</h6>
              <span class="elastic-link mb-lg-4 mb-2">Explore</span>
            </div>
          </a>
        </div>
      </div>
      <div class="popular-category">
        <div class="card prod-card">
          <a class="shop-by-cat" href="rings.php" data-gtm="Finger Rings">
            <div class="image-cropper">
              <img src="images\ring1.jpg" class="card-img-top" alt="Finger Rings" loading="lazy">
            </div>
            <div class="card-body text-center p-0">
              <h6 class="card-title text-center my-md-3 my-sm-0">Finger Rings</h6>
              <span class="elastic-link mb-lg-4 mb-2">Explore</span>
            </div>
          </a>
        </div>
      </div>
      <div class="popular-category">
        <div class="card prod-card">
          <a class="shop-by-cat" href="necklaceset.php" data-gtm="Neckwear">
            <div class="image-cropper">
              <img src="images\neckwear.jpg" class="card-img-top" alt="Neckwear" loading="lazy">
            </div>
            <div class="card-body text-center p-0">
              <h6 class="card-title text-center my-md-3 my-sm-0">Neckwear</h6>
              <span class="elastic-link mb-lg-4 mb-2">Explore</span>
            </div>
          </a>
        </div>
      </div>
      <div class="popular-category">
        <div class="card prod-card">
          <a class="shop-by-cat" href="pendants.php" data-gtm="Pendants">
            <div class="image-cropper">
              <img src="images\pendant.jpg" class="card-img-top" alt="Pendants" loading="lazy">
            </div>
            <div class="card-body text-center p-0">
              <h6 class="card-title text-center my-md-3 my-sm-0">Pendants</h6>
              <span class="elastic-link mb-lg-4 mb-2">Explore</span>
            </div>
          </a>
        </div>
      </div>
      <div class="popular-category">
        <div class="card prod-card">
          <a class="shop-by-cat" href="necklaceset.php" data-gtm="Necklace Set">
            <div class="image-cropper">
              <img src="images\necklace set.jpg" class="card-img-top" alt="Necklace Set" loading="lazy">
            </div>
            <div class="card-body text-center p-0">
              <h6 class="card-title text-center my-md-3 my-sm-0">Necklace Set</h6>
              <span class="elastic-link mb-lg-4 mb-2">Explore</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="region col-12">
  <div class="experience-component experience-shopByGender">
    <div class="popular-categories title-with-image d-lg-block" data-section="Shop By Gender">
      <div class="popular-cat-heading mt-4">
        <h4 class="text-center heading3 bold">Shop By Gender</h4>
      </div>
      <div class="popular-cat-heading mt-md-4 mt-2">
        <p class="text-center small mb-0">First-class jewelry for first-class Men, Women & Children.</p>
      </div>
      <img class="divider-image" src="Line-Design.svg" alt="divider-image">
    </div>
  </div>
  <div class="experience-component experience-commerce_layouts-mobileGrid1r2c">
    <div class="gender-categories">
      <div class="gender-category">
        <a href="mens.php" class="gender-link" data-gtm="Men">
          <div class="image-cropper">
            <img src="images\mens jewellery.jpg" alt="Men" loading="lazy">
          </div>
          <div class="info-div">
            <h6 class="gender-text">Men</h6>
            <div class="explore-more">
              <span>Explore More</span>
              <svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L4 4L1 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
        </a>
      </div>
      <div class="gender-category">
        <a href="kids.php" class="gender-link" data-gtm="Kids">
          <div class="image-cropper">
            <img src="images\kids jewelry.webp" alt="Kids" loading="lazy">
          </div>
          <div class="info-div">
            <h6 class="gender-text">Kids</h6>
            <div class="explore-more">
              <span>Explore More</span>
              <svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L4 4L1 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
        </a>
      </div>
      <div class="gender-category">
        <a href="rings.php" class="gender-link" data-gtm="Women">
          <div class="image-cropper">
            <img src="images\women jewelery.jpg" alt="Women" loading="lazy">
          </div>
          <div class="info-div">
            <h6 class="gender-text">Women</h6>
            <div class="explore-more">
              <span>Explore More</span>
              <svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L4 4L1 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="experience-component experience-shopByGender">
  <div class="popular-categories title-with-image d-lg-block" data-section="Shop By Gender">
    <div class="popular-cat-heading mt-4">
      <h4 class="text-center heading3 bold">Crystal Aura's Assurance</h4>
    </div>
    <div class="popular-cat-heading mt-md-4 mt-2">
      <p class="text-center small mb-0">We never let your trust Break</p>
    </div>
    <img class="divider-image" src="Line-Design.svg" alt="divider-image">
  </div>
</div>
<div class="container">
  <div class="spl-list">
      <img class="wdget-icons" src="images\best-buy-logo-black-and-white.png" alt="Stylized gold ring icon representing best designs" width="64" height="64">
      <h6 class="text-uppercase padding-bottom-half">Best</h6>
      <p class="text-uppercase rmv-padding">Designs</p>
  </div>
  <div class="spl-list">
      <img class="wdget-icons" src="images\certified.jpeg" alt="Certificate icon with a gemstone, representing certified jewellery" width="64" height="64">
      <h6 class="text-uppercase padding-bottom-half">Certified</h6>
      <p class="text-uppercase rmv-padding">Jewellery</p>
  </div>
  <div class="spl-list">
      <img class="wdget-icons" src="images\easyexchange.jpeg" alt="Two circular arrows forming a loop, representing easy exchange" width="64" height="64">
      <h6 class="text-uppercase padding-bottom-half">Easy</h6>
      <p class="text-uppercase rmv-padding">Exchange</p>
  </div>
 
  <div class="spl-list">
      <img class="wdget-icons" src="images/insurance.jpg" alt="Shield icon with a gemstone, representing free insurance" width="64" height="64">
      <h6 class="text-uppercase padding-bottom-half">Free</h6>
      <p class="text-uppercase rmv-padding">Insurance</p>
  </div>
 
  <div class="spl-list">
      <img class="wdget-icons" src="images/bis.jpg" alt="BIS logo with a hallmark stamp icon" width="64" height="64">
      <h6 class="text-uppercase padding-bottom-half">BIS</h6>
      <p class="text-uppercase rmv-padding">Hallmarked</p>
  </div>
  <div class="spl-list">
      <img class="wdget-icons" src="images/jewellerycustom.jpeg" alt="Jewellery design tool icon, representing customization options" width="64" height="64">
      <h6 class="text-uppercase padding-bottom-half">Customization</h6>
      <p class="text-uppercase rmv-padding">Options</p>
  </div>

  </div>
 <!-- The Thank You Modal -->
 <div id="thankYouModal" class="modal">
        <div class="modal-content">
            <h2 id="thankYouMessage"></h2>
            <button class="close-btn" onclick="closeModal()">Close</button>
        </div>
    </div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
      const splLists = document.querySelectorAll('.spl-list');
      
      splLists.forEach((item, index) => {
          item.style.animationDelay = `${index * 0.1}s`;
          item.classList.add('fade-in');
      });
  });
</script>

<?php
// index.php

$first_name = isset($_GET['first_name']) ? htmlspecialchars($_GET['first_name']) : null;
$last_name = isset($_GET['last_name']) ? htmlspecialchars($_GET['last_name']) : null;
?>
    <script>
        // Function to show the modal
        function showThankYouModal(firstName, lastName) {
            const modal = document.getElementById('thankYouModal');
            const message = document.getElementById('thankYouMessage');
            message.innerHTML = `Thank you, ${firstName} ${lastName}, for signing up!`;
            modal.style.display = "block"; // Display the modal
        }

        // Function to close the modal
        function closeModal() {
            document.getElementById('thankYouModal').style.display = "none";
        }

        // Check if firstName and lastName are available in the URL
        window.onload = function() {
            <?php if ($first_name && $last_name): ?>
                showThankYouModal("<?php echo $first_name; ?>", "<?php echo $last_name; ?>");
            <?php endif; ?>
        };
    </script>
  <?php include 'footer.php'; ?>
</body>
</html>