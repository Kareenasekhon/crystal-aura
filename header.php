<?php
include 'db.php';  // Include the database connection

// Function to get the cart count for the logged-in user
function getCartCount($user_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT COUNT(*) FROM cart_items WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($cart_count);
    $stmt->fetch();
    return $cart_count;
}

// Get cart count if user is logged in
$cart_count = 0;
if (isset($_SESSION['user_id'])) {
    $cart_count = getCartCount($_SESSION['user_id']);
}
?>
<html><head>

  <style>
  * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
  }
  
  body {
      font-family: 'Roboto', Arial, sans-serif;
      color: #333;
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
    height: 54px;
  }

  .logo img {
    height: 54px;
    width: auto;
  }
  .logo a{
    position: relative;
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
      padding: 10px 0;
      background-color: #fff;
      border-bottom: 1px solid #e0e0e0;
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
  
  .account-menu, .stores-menu {
      position: relative;
  }
  
  .account-dropdown, .stores-dropdown {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #fff;
      border: 2px solid #b99822;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      z-index: 1000;
      min-width: 200px;
      padding: 15px;
  }
  
  .account-dropdown h3, .stores-dropdown h3 {
      color: #b99822;
      font-size: 18px;
      margin-bottom: 10px;
      text-align: center;
      border-bottom: 1px solid #b99822;
      padding-bottom: 5px;
  }
  
  .account-dropdown a, .stores-dropdown a {
      display: block;
      padding: 12px 15px;
      color: #333;
      text-decoration: none;
      transition: background-color 0.3s ease, color 0.3s ease;
      border: 2px solid #b99822;
      margin-bottom: 10px;
      border-radius: 6px;
      font-size: 16px;
      text-align: center;
  }
  
  .account-dropdown a:hover, .stores-dropdown a:hover {
      background-color: #b99822;
      color: #fff;
  }
  
  .account-dropdown.show, .stores-dropdown.show {
      display: block;
  }
  /* Add search bar styling */
  .search-bar {
      position: relative;
      margin-left: 20px;
  }

  .search-bar input[type="text"] {
      width: 200px;
      padding: 8px 30px 8px 10px;
      border: 2px solid #b99822;
      border-radius: 20px;
      outline: none;
      font-size: 14px;
  }

  .search-bar button {
      position: absolute;
      right: 5px;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      cursor: pointer;
  }

  .search-bar button svg {
      width: 18px;
      height: 18px;
      fill: #333333;
  }
  </style>
  </head>
  <body>
    <nav>
      <div class="container">
       
      <div class="logo">
      <a href="index.php">
          <img src="images/crystal.png" alt="logo">
          </a>
        </div>
        
        <div class="top-navbar-right">
      
          <div class="menu stores-menu">
            <a href="#" class="stores-toggle">
              <div class="custom-img">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M9 22V12H15V22" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <span>Stores</span>
            </a>
            <div class="stores-dropdown">
              <h3>Our Locations</h3>
              <a href="">Mumbai</a>
              <a href="">Delhi</a>
              <a href="">Bangalore</a>
              <a href="">Chennai</a>
              <a href="our stores.php">View All Stores</a>
            </div>
          </div>
  
          <div class="menu account-menu">
            <a href="#" class="account-toggle">
              <div class="custom-img">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <span>Account</span>
            </a>
            <div class="account-dropdown">
              <h3>My Account</h3>
              <a href="login.php">Login</a>
              <a href="signup.php">Sign Up</a>
            </div>
          </div>
          
          <div class="menu">
            <a href="wishlist.php">
              <div class="custom-img">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20.84 4.61C20.3292 4.099 19.7228 3.69364 19.0554 3.41708C18.3879 3.14052 17.6725 2.99817 16.95 2.99817C16.2275 2.99817 15.5121 3.14052 14.8446 3.41708C14.1772 3.69364 13.5708 4.099 13.06 4.61L12 5.67L10.94 4.61C9.9083 3.57831 8.50903 2.99871 7.05 2.99871C5.59096 2.99871 4.19169 3.57831 3.16 4.61C2.1283 5.64169 1.54871 7.04097 1.54871 8.5C1.54871 9.95903 2.1283 11.3583 3.16 12.39L4.22 13.45L12 21.23L19.78 13.45L20.84 12.39C21.351 11.8792 21.7563 11.2728 22.0329 10.6054C22.3095 9.93789 22.4518 9.22248 22.4518 8.5C22.4518 7.77752 22.3095 7.0621 22.0329 6.39464C21.7563 5.72718 21.351 5.12075 20.84 4.61V4.61Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <span>Wishlist</span>
            </a>
          </div>

<div class="menu cart-icon">
  <a href="addtocart.php">
    <div class="custom-img">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <span>Cart</span>
    <span class="cart-count">   <?php
                if (isset($_SESSION['user_id'])) {
                    echo  $cart_count;
                } else {
                    echo " 0";
                }
                ?></span>
  </a>
</div>

        </div>
      </div>
    </nav>
  
    <div class="nav-categories">
      <a href="pendants.php">Pendants</a>
      <a href="anklets.php">Anklets</a>
      <a href="earings.php">Earrings</a>
      <a href="rings.php">Rings</a>
      <a href="bracelet.php">Bracelets</a>
      <a href="bangles.php">Bangles </a>
      <a href="mangalsutars.php">Mangalsutar</a>
    </div>
 
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const accountToggle = document.querySelector('.account-toggle');
        const accountDropdown = document.querySelector('.account-dropdown');
        const storesToggle = document.querySelector('.stores-toggle');
        const storesDropdown = document.querySelector('.stores-dropdown');
  
        function toggleDropdown(toggle, dropdown) {
          toggle.addEventListener('click', function(e) {
            e.preventDefault();
            dropdown.classList.toggle('show');
          });
        }
  
        toggleDropdown(accountToggle, accountDropdown);
        toggleDropdown(storesToggle, storesDropdown);
  
        document.addEventListener('click', function(e) {
          if (!accountToggle.contains(e.target) && !accountDropdown.contains(e.target)) {
            accountDropdown.classList.remove('show');
          }
          if (!storesToggle.contains(e.target) && !storesDropdown.contains(e.target)) {
            storesDropdown.classList.remove('show');
          }
        });
      });
    </script>
  </body></html>