<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rings</title>
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
        .hero-image {
          height: 39%;
          width: 100%;
        }
        .hero-image img{
          height: 39%;
          width: 100%;
        }
        .products.wrapper {
  max-width: 1200px;
  margin: 0 auto;
}

.product-items {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  list-style-type: none;
  padding: 0;
}

.product-item {
  width: calc(20% - 20px);
  margin-bottom: 30px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  transition: box-shadow 0.3s ease;
}

.product-item:hover {
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.product-item-info {
  display: flex;
  flex-direction: column;
  height: 100%;
}

.product-item-photo {
  display: block;
  position: relative;
  overflow: hidden;
  padding-top: 100%;
}

.product-image-photo {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.product-item-details {
  padding: 15px;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
}

.product-item-name {
  font-size: 16px;
  margin-bottom: 10px;
}

.product-item-link {
  color: #333;
  text-decoration: none;
}

.price-box {
  margin-bottom: 10px;
}

.price {
  font-size: 18px;
  font-weight: bold;
  color: #b8860b;
}

.product-item-actions {
  margin-top: auto;
  display: flex;
  justify-content: flex-end;
}

.action.towishlist {
  background: none;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease;
}

.heart-icon {
  fill: #ccc;
  transition: fill 0.3s ease;
}

.action.towishlist:hover .heart-icon {
  fill: #e91e63;
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


        </style>
</head>
<body>
<?php include 'header.php'; ?>
      <div class="hero-image">
        <img src="images/Ringhero.webp" alt="ringcover">
        
      </div>
      <div class="experience-component experience-shopByGender">
    <div class="popular-categories title-with-image d-lg-block" data-section="Shop By Gender">
      <div class="popular-cat-heading mt-4">
        <h4 class="text-center heading3 bold">RINGS</h4>
      </div>
      <div class="popular-cat-heading mt-md-4 mt-2">
        <p class="text-center small mb-0">First-class rings for first-class Men, Women & Children.</p>
      </div>
      <img class="divider-image" src="Line-Design.svg" alt="divider-image">
    </div>
  </div>
      <div class="products wrapper grid products-grid">
  <ol class="products list items product-items">
    
    <li class="item product product-item">
      <div class="product-item-info">
        <a href="ringsfull1.php" class="product-item-photo">
          <img src="images/ring11.webp" alt="Balladry Diamond Ring" class="product-image-photo">
        </a>
        <div class="product-item-details">
          <strong class="product-item-name">
            <a href="ringsfull1.php" class="product-item-link">
            Silver Heart's Paradise Ring
            </a>
          </strong>
          <div class="price-box">
            <span class="price">₹19,181</span>
          </div>
          <div class="product-item-actions">
          <form method="POST" action="wishlist.php" class="action towishlist">
            <input type="hidden" name="product_name" value=" Silver Heart's Paradise Ring">
            <input type="hidden" name="product_price" value="19,181">
            <input type="hidden" name="product_image" value="images/ring11.webp">
            <button type="submit" name="add_to_wishlist"><svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
              </svg></button>
              </form>
          </div>
        </div>
      </div>
    </li>

    <li class="item product product-item">
      <div class="product-item-info">
        <a href="ringsfull2.php" class="product-item-photo">
          <img src="images\ring2.webp" alt="Infinite Mesh Diamond Ring" class="product-image-photo">
        </a>
        <div class="product-item-details">
          <strong class="product-item-name">
            <a href="ringsfull2.php" class="product-item-link">
            Fall Season Pink Crystal Ring
            </a>
          </strong>
          <div class="price-box">
            <span class="price">₹16,393</span>
          </div>
          <div class="product-item-actions">
          <form method="POST" action="wishlist.php" class="action towishlist">
            <input type="hidden" name="product_name" value=" Fall Season Pink Crystal Ring">
            <input type="hidden" name="product_price" value="₹16,393">
            <input type="hidden" name="product_image" value="images\ring2.webp">
            <button type="submit" name="add_to_wishlist"><svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
              </svg></button>
              </form>
          </div>
        </div>
      </div>
    </li>

    <li class="item product product-item">
      <div class="product-item-info">
        <a href="ringsfull3.php" class="product-item-photo">
          <img src="images\ring3.jpeg" alt="Flairious Hera Diamond Ring" class="product-image-photo">
        </a>
        <div class="product-item-details">
          <strong class="product-item-name">
            <a href="ringsfull3.php" class="product-item-link">
            Queen Attitude Blue Ring
            </a>
          </strong>
          <div class="price-box">
            <span class="price">₹20,152</span>
          </div>
          <div class="product-item-actions">
          <form method="POST" action="wishlist.php" class="action towishlist">
            <input type="hidden" name="product_name" value=" Queen Attitude Blue Ring">
            <input type="hidden" name="product_price" value="20,152">
            <input type="hidden" name="product_image" value="images\ring3.jpeg">
            <button type="submit" name="add_to_wishlist"><svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
              </svg></button>
              </form>
          </div>
        </div>
      </div>
    </li>

    <li class="item product product-item">
      <div class="product-item-info">
        <a href="ringsfull4.php" class="product-item-photo">
          <img src="images\ring4.jpg" alt="Ekanta Diamond Ring" class="product-image-photo">
        </a>
        <div class="product-item-details">
          <strong class="product-item-name">
            <a href="ringsfull4.php" class="product-item-link">
            Eclipse Twins
            </a>
          </strong>
          <div class="price-box">
            <span class="price">₹14,846</span>
          </div>
          <div class="product-item-actions">
          <form method="POST" action="wishlist.php" class="action towishlist">
            <input type="hidden" name="product_name" value=" Eclipse Twins">
            <input type="hidden" name="product_price" value="14,846">
            <input type="hidden" name="product_image" value="images\ring4.jpg">
            <button type="submit" name="add_to_wishlist"><svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
              </svg></button>
              </form>
          </div>
        </div>
      </div>
    </li>

    <li class="item product product-item">
      <div class="product-item-info">
        <a href="ringsfull5.php" class="product-item-photo">
          <img src="images\ring5.jpeg" alt="Sparkling Solitaire Diamond Ring" class="product-image-photo">
        </a>
        <div class="product-item-details">
          <strong class="product-item-name">
            <a href="ringsfull5.php" class="product-item-link">
              Sparkling Solitaire Diamond Ring
            </a>
          </strong>
          <div class="price-box">
            <span class="price">₹22,575</span>
          </div>
          <div class="product-item-actions">
          <form method="POST" action="wishlist.php" class="action towishlist">
            <input type="hidden" name="product_name" value="  Sparkling Solitaire Diamond Ring">
            <input type="hidden" name="product_price" value="22,575">
            <input type="hidden" name="product_image" value="images\ring5.jpeg">
            <button type="submit" name="add_to_wishlist"><svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
              </svg></button>
              </form>
          </div>
        </div>
      </div>
    </li>

    <li class="item product product-item">
      <div class="product-item-info">
        <a href="ringsfull6.php" class="product-item-photo">
          <img src="images\ring6.jpeg" alt="Elegant Eternity Diamond Ring" class="product-image-photo">
        </a>
        <div class="product-item-details">
          <strong class="product-item-name">
            <a href="ringsfull6.php" class="product-item-link">
              Elegant Eternity Diamond Ring
            </a>
          </strong>
          <div class="price-box">
            <span class="price">₹18,999</span>
          </div>
          <div class="product-item-actions">
          <form method="POST" action="wishlist.php" class="action towishlist">
            <input type="hidden" name="product_name" value="  Harmony Wave Pendant">
            <input type="hidden" name="product_price" value="24500">
            <input type="hidden" name="product_image" value="images\pendant10.jpg">
            <button type="submit" name="add_to_wishlist"><svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
              </svg></button>
              </form>
          </div>
        </div>
      </div>
    </li>

    <li class="item product product-item">
      <div class="product-item-info">
        <a href="ringsfull7.php" class="product-item-photo">
          <img src="images\ring7.jpeg" alt="Twisted Love Diamond Ring" class="product-image-photo">
        </a>
        <div class="product-item-details">
          <strong class="product-item-name">
            <a href="ringsfull7.php" class="product-item-link">
              Twisted Love Diamond Ring
            </a>
          </strong>
          <div class="price-box">
            <span class="price">₹21,250</span>
          </div>
          <div class="product-item-actions">
          <form method="POST" action="wishlist.php" class="action towishlist">
            <input type="hidden" name="product_name" value="  Harmony Wave Pendant">
            <input type="hidden" name="product_price" value="24500">
            <input type="hidden" name="product_image" value="images\pendant10.jpg">
            <button type="submit" name="add_to_wishlist"><svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
              </svg></button>
              </form>
          </div>
        </div>
      </div>
    </li>

    <li class="item product product-item">
      <div class="product-item-info">
        <a href="ringsfull8.php" class="product-item-photo">
          <img src="images\ring8.jpg" alt="Blooming Flower Diamond Ring" class="product-image-photo">
        </a>
        <div class="product-item-details">
          <strong class="product-item-name">
            <a href="ringsfull8.php" class="product-item-link">
              Blooming Flower Diamond Ring
            </a>
          </strong>
          <div class="price-box">
            <span class="price">₹23,750</span>
          </div>
          <div class="product-item-actions">
          <form method="POST" action="wishlist.php" class="action towishlist">
            <input type="hidden" name="product_name" value="  Harmony Wave Pendant">
            <input type="hidden" name="product_price" value="24500">
            <input type="hidden" name="product_image" value="images\pendant10.jpg">
            <button type="submit" name="add_to_wishlist"><svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
              </svg></button>
              </form>
          </div>
        </div>
      </div>
    </li>

    <li class="item product product-item">
      <div class="product-item-info">
        <a href="ringsfull9.php" class="product-item-photo">
          <img src="images\ring9.png" alt="Vintage Charm Diamond Ring" class="product-image-photo">
        </a>
        <div class="product-item-details">
          <strong class="product-item-name">
            <a href="ringsfull9.php" class="product-item-link">
              Vintage Charm Diamond Ring
            </a>
          </strong>
          <div class="price-box">
            <span class="price">₹17,999</span>
          </div>
          <div class="product-item-actions">
          <form method="POST" action="wishlist.php" class="action towishlist">
            <input type="hidden" name="product_name" value="  Harmony Wave Pendant">
            <input type="hidden" name="product_price" value="24500">
            <input type="hidden" name="product_image" value="images\pendant10.jpg">
            <button type="submit" name="add_to_wishlist"><svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
              </svg></button>
              </form>
          </div>
        </div>
      </div>
    </li>

    <li class="item product product-item">
      <div class="product-item-info">
        <a href="ringsfull10.php" class="product-item-photo">
          <img src="images\ring10.jpeg" alt="Radiant Starburst Diamond Ring" class="product-image-photo">
        </a>
        <div class="product-item-details">
          <strong class="product-item-name">
            <a href="ringsfull10.php" class="product-item-link">
              Radiant Starburst Diamond Ring
            </a>
          </strong>
          <div class="price-box">
            <span class="price">₹24,500</span>
          </div>
          <div class="product-item-actions">
          <form method="POST" action="wishlist.php" class="action towishlist">
            <input type="hidden" name="product_name" value="  Harmony Wave Pendant">
            <input type="hidden" name="product_price" value="24500">
            <input type="hidden" name="product_image" value="images\pendant10.jpg">
            <button type="submit" name="add_to_wishlist"><svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
              </svg></button>
              </form>
          </div>
        </div>
      </div>
    </li>

  </ol>
</div>

<script>
document.querySelectorAll('.action.towishlist').forEach(button => {
  button.addEventListener('click', function() {
    const heartIcon = this.querySelector('.heart-icon');
    if (heartIcon.style.fill === 'rgb(233, 30, 99)') {
      heartIcon.style.fill = '#ccc';
    } else {
      heartIcon.style.fill = '#e91e63';
    }
  });
});
</script>
<?php include 'footer.php'; ?>

</body>
</html>