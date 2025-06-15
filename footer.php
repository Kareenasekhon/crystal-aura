<html><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sparkle Jewels - Exquisite Jewelry</title>
<style>
  :root {
    --primary-color: #ffd700;
    --secondary-color: #f0f0f0;
    --text-color: #333;
    --footer-bg: #1a1a1a;
    --footer-text: #fff;
    --transition: all 0.3s ease;
  }

  body, html {
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', 'Helvetica Neue', Arial, sans-serif;
    line-height: 1.6;
    color: var(--text-color);
    background-color: var(--secondary-color);
  }

  footer {
    background-color: var(--footer-bg);
    color: var(--footer-text);
    padding: 3rem 0 1rem;
    font-size: 0.9rem;
    box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.1);
  }

  .footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 0 2rem;
  }

  .footer-section {
    flex: 1 1 200px;
    margin: 0 1rem 2rem;
  }

  .footer-section h3 {
    color: var(--primary-color);
    margin-bottom: 1rem;
    font-size: 1.2rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .footer-section ul {
    list-style-type: none;
    padding: 0;
  }

  .footer-section ul li {
    margin-bottom: 0.5rem;
  }

  .footer-section ul li a {
    color: var(--footer-text);
    text-decoration: none;
    transition: var(--transition);
    position: relative;
    padding-bottom: 2px;
  }

  .footer-section ul li a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 1px;
    bottom: 0;
    left: 0;
    background-color: var(--primary-color);
    transition: var(--transition);
  }

  .footer-section ul li a:hover {
    color: var(--primary-color);
  }

  .footer-section ul li a:hover::after {
    width: 100%;
  }

  .social-icons {
    display: flex;
    gap: 1rem;
    margin-top: 1rem;
  }

  .social-icon {
    width: 30px;
    height: 30px;
    transition: var(--transition);
  }

  .social-icon:hover {
    transform: translateY(-3px);
    filter: drop-shadow(0 4px 6px rgba(255, 215, 0, 0.2));
  }

  .footer-bottom {
    text-align: center;
    margin-top: 2rem;
    padding-top: 1rem;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    font-size: 0.8rem;
  }

  .footer-bottom a {
    color: var(--footer-text);
    text-decoration: none;
    transition: var(--transition);
  }

  .footer-bottom a:hover {
    color: var(--primary-color);
  }

  @media (max-width: 768px) {
    .footer-content {
      flex-direction: column;
      align-items: center;
    }

    .footer-section {
      margin-bottom: 2rem;
      text-align: center;
    }

    .social-icons {
      justify-content: center;
    }
  }

  @keyframes sparkle {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
  }

  .sparkle {
    animation: sparkle 2s infinite;
  }
</style>
</head>
<body>

<footer>
  <div class="footer-content">
    <div class="footer-section">
      <h3>Shop</h3>
      <ul>
        <li><a href="bangles.php">Bangles</a></li>
        <li><a href="rings.php">Rings</a></li>
        <li><a href="kids.php">Kids Jewellery</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Customer Care</h3>
      <ul>
        <li><a href="contact us.php">Contact Us</a></li>
        <li><a href="addtocart.php">Cart</a></li>
        <li><a href="wishlist.php">Whishlist</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>About Us</h3>
      <ul>
        <li><a href="ourstory.php">Our Story</a></li>
        <li><a href="/pages/ethical-sourcing">Ethical Sourcing</a></li>
        <li><a href="blog.php">Blog</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Connect With Us</h3>
      <div class="social-icons">
        <a href="https://facebook.com/CrystalAura" aria-label="Follow us on Facebook">
          <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff">
            <path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/>
          </svg>
        </a>
        <a href="https://instagram.com/CrystalAura" aria-label="Follow us on Instagram">
          <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
          </svg>
        </a>
        <a href="https://pinterest.com/CrystalAura" aria-label="Follow us on Pinterest">
          <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff">
            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"/>
          </svg>
        </a>
        <a href="https://twitter.com/CrystalAura" aria-label="Follow us on Twitter">
          <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff">
            <path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2024 Crystal Aura. All rights reserved. | <a href="/pages/privacy-policy">Privacy</a> | <a href="/pages/terms-of-service">Terms</a></p>
    <p class="sparkle">✨ Where Elegance Meets Shine  ✨</p>
  </div>
</footer>

</body></html>