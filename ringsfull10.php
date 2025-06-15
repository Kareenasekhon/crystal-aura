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
        body {
  font-family: 'Roboto', sans-serif;
  margin: 0;
  padding: 0;
  color: #333;
  background-color: #f9f9f9;
  line-height: 1.6;
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
  width: 48px;
  height: 48px;
  margin-bottom: 8px;
  fill: #fff;
  stroke: #1a1a1a;
  transition: all 0.3s ease;
}

.policy-item:hover svg {
  fill: #1a1a1a;
  stroke: #fff;
}

.media {
  position: relative;
  padding-top: 100%; /* 1:1 Aspect Ratio */
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

.media::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.2);
  opacity: 0;
  transition: opacity 0.3s ease;
}

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
  color: white;
  border: 1px solid #d4d4d4;
}

.add-to-wishlist:hover {
  background-color: #e0e0e0;
}

.ring-size-selector {
  margin-bottom: 25px;
}

.ring-size-selector select {
  width: 100%;
  padding: 12px;
  font-size: 16px;
  border: 1px solid #d4d4d4;
  border-radius: 5px;
  background-color: #fff;
  transition: border-color 0.3s ease;
  appearance: none;
  background-image: url("data:image/svg+xml,%3Csvg fill='%23333' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3Cpath d='M0 0h24v24H0z' fill='none'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 10px center;
}

.ring-size-selector select:focus {
  outline: none;
  border-color: #b8860b;
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
      <div class="container1">
  <div class="product">
    <div class="product__media-wrapper">
      <div class="media">
        <img src="images/ring10.jpeg" alt="Silver Heart's Paradise Ring" width="533" height="533">
      </div>
    </div>
    <div class="product__info-wrapper">
      <h1 class="product__title">Radiant Starburst Diamond Ring</h1>
      <div class="price">₹24,500</div>
      <div class="product__description">
        <p>This is a pear-shaped pink gemstone ring surrounded by a halo of sparkling diamonds, set in a silver band.</p>
      </div>
      <div class="product__policies">
        <div class="policy-item">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 6V12L16 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <span>Lifetime Plating</span>
        </div>
        <div class="policy-item">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20.59 9.5L12 4.5L3.41 9.5L12 14.5L20.59 9.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M3.41 14.5L12 19.5L20.59 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <span>6-Month Warranty</span>
        </div>
        <div class="policy-item">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9 22V12H15V22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <span>Easy Return</span>
        </div>
      </div>
      <div class="ring-size-selector">
        <select id="ring-size" onchange="updateRingSize()">
          <option value="">Select Ring Size</option>
          <option value="6">Size 6</option>
          <option value="7">Size 7</option>
          <option value="8">Size 8</option>
          <option value="9">Size 9</option>
          <option value="10">Size 10</option>
        </select>
      </div>
      <div class="quantity-selector">
        <button class="quantity-btn" onclick="decrementQuantity()">-</button>
        <input type="number" id="quantity" class="quantity-input" value="1" min="1">
        <button class="quantity-btn" onclick="incrementQuantity()">+</button>
      </div>
      <div class="product__buttons">
      <form method="POST" action="addtocart.php" class="action add-to-cart-form">
        <input type="hidden" name="product_name" value="Radiant Starburst Diamond Ring">
        <input type="hidden" name="product_price" value="24500"> <!-- Ensure price is a number without commas -->
        <input type="hidden" name="product_image" value="images/ring10.jpeg">
        <button type="submit" class="product__button add-to-cart" name="add_to_cart">Add to Cart</button>
    </form>
    <form method="POST" action="wishlist.php" class="action towishlist">
            <input type="hidden" name="product_name" value="Radiant Starburst Diamond Ring">
            <input type="hidden" name="product_price" value="24500">
            <input type="hidden" name="product_image" value="images/ring10.jpeg">
            <button type="submit" class="product__button add-to-wishlist"  onclick="addToWishlist()" name="add_to_wishlist">Add to Wishlist</button>
              </form>
      </div>
    </div>
  </div>
</div>

<script>
function incrementQuantity() {
  var input = document.getElementById('quantity');
  input.value = parseInt(input.value) + 1;
}

function decrementQuantity() {
  var input = document.getElementById('quantity');
  if (parseInt(input.value) > 1) {
    input.value = parseInt(input.value) - 1;
  }
}

function updateRingSize() {
  var size = document.getElementById('ring-size').value;
  console.log("Selected ring size: " + size);
}

function addToCart() {
  var quantity = document.getElementById('quantity').value;
  var size = document.getElementById('ring-size').value;
  if (size === "") {
    alert("Please select a ring size before adding to cart.");
  } else {
    alert(quantity + " Silver Heart's Paradise Ring(s) of size " + size + " added to cart!");
  }
}

function addToWishlist() {
  var size = document.getElementById('ring-size').value;
  if (size === "") {
    alert("Please select a ring size before adding to wishlist.");
  } else {
    alert("Silver Heart's Paradise Ring of size " + size + " added to your wishlist!");
  }
}
</script>
      </body>
      </html>