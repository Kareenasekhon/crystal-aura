<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangles</title>
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
        body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
  }
  
  .container1 {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 40px;
  }
  
  .product {
    display: flex;
    flex-wrap: wrap;
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: box-shadow 0.3s ease;
  }
  
  .product:hover {
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
  }
  
  .product__media-wrapper {
    flex: 1;
    min-width: 300px;
    position: relative;
    overflow: hidden;
  }
  
  .product__info-wrapper {
    flex: 1;
    min-width: 300px;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  
  .product__title {
    font-family: 'Playfair Display', serif;
    font-size: 32px;
    font-weight: 700;
    margin-top: 0;
    margin-bottom: 20px;
    color: #1a1a1a;
  }
  
  .price {
    font-size: 24px;
    font-weight: bold;
    margin: 20px 0;
    color: #b8860b;
  }
  
  .product__description {
    margin-bottom: 30px;
    line-height: 1.8;
    color: #333;
  }
  
  .product__policies {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
    font-size: 14px;
    color: #4a4a4a;
  }
  
  .policy-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin-right: 20px;
  }
  
  .product__policies svg {
    width: 40px;
    height: 40px;
    margin-bottom: 8px;
    fill: #000000;
  }
  
  .media {
    position: relative;
    height: 100%; /* Changed from padding-top to height: 100% */
    overflow: hidden;
  }
  
  .media img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
  }
  
  .media::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 100%);
    z-index: 1;
    opacity: 0;
    transition: opacity 0.3s ease;
  }
  
  .media::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0) 100%);
    z-index: 1;
    opacity: 0;
    transition: opacity 0.3s ease;
  }
  
  .media:hover::before,
  .media:hover::after {
    opacity: 1;
  }
  
  .media:hover img {
    transform: scale(1.1);
  }
  
  .quantity-selector {
    display: flex;
    align-items: center;
    margin-bottom: 25px;
  }
  
  .quantity-btn {
    background-color: #f0f0f0;
    border: none;
    width: 36px;
    height: 36px;
    font-size: 18px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.3s ease;
    border-radius: 50%;
  }
  
  .quantity-btn:hover {
    background-color:#b8860b;
  }
  
  .quantity-input {
    width: 50px;
    height: 36px;
    text-align: center;
    border: 1px solid #b8860b;
    margin: 0 10px;
    font-size: 16px;
    border-radius: 5px;
  }
  
  .product__buttons {
    display: flex;
    gap: 15px;
    margin-top: 30px;
  }
  
  .product__button {
    flex: 1;
    padding: 15px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: all 0.3s ease;
    text-align: center;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
  }
  
  .add-to-cart {
    background-color:#b8860b;
    color: #fff;
    border: none;
  }
  
  .add-to-cart:hover {
    background-color: #333;
  }
  
  .add-to-wishlist {
    background-color: #b8860b;
    color: #fff;
    border: 1px solid #b8860b;
    transition: background-color 0.3s ease, color 0.3s ease;
  }
  
  .add-to-wishlist:hover {
    background-color: #fff;
    color: #b8860b;
  }
  
  @media (max-width: 768px) {
    .product {
      flex-direction: column;
    }
    
    .product__info-wrapper {
      padding: 30px;
    }
  
    .product__buttons {
      flex-direction: column;
    }
  
    .product__policies {
      flex-direction: row;
      justify-content: space-around;
      align-items: flex-start;
    }
  
    .policy-item {
      margin-bottom: 15px;
      margin-right: 0;
    }
  }
        </style>
        <body>
    

        <?php include 'header.php'; ?>
      <main class="container1">
  <section class="product">
    <div class="product__media-wrapper">
      <div class="media">
        <img src="images\menbracelet1.avif" alt="Golden Oceania Necklace with pearls and colored stones" width="500" height="500">
      </div>
    </div>
    
    <div class="product__info-wrapper">
      <h1 class="product__title">Ocean Breeze Beaded Bracelet</h1>
      
      <div class="price">
        <span class="current-price">₹19,181</span>
      </div>
      
      <p class="product__description">
      A natural, earthy beaded bracelet featuring turquoise and wooden accents.
      </p>
      
      <div class="product__policies">
        <div class="policy-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
          <span>Free express shipping</span>
        </div>
        <div class="policy-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2zm0 15l-5-2.18L7 18V5h10v13z"/></svg>
          <span>30 day return policy</span>
        </div>
        <div class="policy-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/></svg>
          <span>6 month warranty</span>
        </div>
      </div>

      <div class="quantity-selector">
        <button class="quantity-btn decrease">-</button>
        <input type="number" class="quantity-input" value="1" min="1">
        <button class="quantity-btn increase">+</button>
      </div>
      
      <div class="product__buttons">
      <form method="POST" action="addtocart.php" class="action add-to-cart-form">
        <input type="hidden" name="product_name" value="Ocean Breeze Beaded Bracelet">
        <input type="hidden" name="product_price" value="19181"> <!-- Ensure price is a number without commas -->
        <input type="hidden" name="product_image" value="images\menbracelet1.avif">
        <button type="submit" class="product__button add-to-cart" name="add_to_cart">Add to Cart</button>
    </form>
    <form method="POST" action="wishlist.php" class="action towishlist">
            <input type="hidden" name="product_name" value="Ocean Breeze Beaded Bracelet">
            <input type="hidden" name="product_price" value="19181">
            <input type="hidden" name="product_image" value="images\menbracelet1.avif">
            <button type="submit" class="product__button add-to-wishlist"  onclick="addToWishlist()" name="add_to_wishlist">Add to Wishlist</button>
              </form>
      </div>
    </div>
  </section>
  
  <script>
document.addEventListener('DOMContentLoaded', function() {
  const decreaseBtn = document.querySelector('.decrease');
  const increaseBtn = document.querySelector('.increase');
  const quantityInput = document.querySelector('.quantity-input');

  decreaseBtn.addEventListener('click', function() {
    if (quantityInput.value > 1) {
      quantityInput.value = parseInt(quantityInput.value) - 1;
    }
  });

  increaseBtn.addEventListener('click', function() {
    quantityInput.value = parseInt(quantityInput.value) + 1;
  });
});
function addToCart() {
        alert("Item has been added to the cart!");
    }

    function addToWishlist() {
        alert("Item has been added to the wishlist!");
    }
</script>

      </body>
      </html>