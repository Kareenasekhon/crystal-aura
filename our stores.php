<html><head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Roboto', Arial, sans-serif;
    background-color: #f4e1d4;
    color: #333;
}






.stores-container {
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 20px;
}

.stores-header {
    text-align: center;
    margin-bottom: 40px;
}

.stores-header h1 {
    font-size: 36px;
    color: #832729;
    margin-bottom: 10px;
}

.stores-header p {
    font-size: 18px;
    color: #666;
}

.store-search {
    display: flex;
    justify-content: center;
    margin-bottom: 30px;
}

.store-search input {
    width: 60%;
    padding: 12px;
    font-size: 16px;
    border: 2px solid #b99822;
    border-radius: 6px 0 0 6px;
}

.store-search button {
    padding: 12px 20px;
    font-size: 16px;
    background-color: #b99822;
    color: white;
    border: none;
    border-radius: 0 6px 6px 0;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.store-search button:hover {
    background-color: #9a7d1e;
}

.store-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 30px;
}

.store-card {
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.store-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

.store-card h2 {
    font-size: 24px;
    color: #b99822;
    margin-bottom: 15px;
}

.store-card p {
    margin-bottom: 10px;
    color: #666;
}

.store-card .store-actions {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.store-card .store-actions a {
    padding: 10px 15px;
    background-color: #b99822;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.store-card .store-actions a:hover {
    background-color: #9a7d1e;
}

@media (max-width: 768px) {
    .store-search input {
        width: 70%;
    }

    .store-list {
        grid-template-columns: 1fr;
    }
}
</style>
</head>
<body>
 

<?php include 'header.php'; ?>

  <div class="stores-container">
    <div class="stores-header">
      <h1>Our Stores</h1>
      <p>Find a Crystal Aura store near you</p>
    </div>

    

    <div class="store-list">
      <div class="store-card">
        <h2>Crystal Aura Mumbai - Bandra</h2>
        <p>Address: Shop No. 1 &amp; 2, Ground Floor, Linking Road, Bandra West, Mumbai - 400050</p>
        <p>Phone: +91 22 2641 3918</p>
        <p>Hours: 10:00 AM - 9:00 PM</p>
        <div class="store-actions">
          <a href="https://goo.gl/maps/example1">Get Directions</a>
          <a href="tel:+912226413918">Call Store</a>
        </div>
      </div>

      <div class="store-card">
        <h2>Crystal Aura Delhi - Connaught Place</h2>
        <p>Address: E-49, Inner Circle, Connaught Place, New Delhi - 110001</p>
        <p>Phone: +91 11 2341 5678</p>
        <p>Hours: 11:00 AM - 8:00 PM</p>
        <div class="store-actions">
          <a href="https://goo.gl/maps/example2">Get Directions</a>
          <a href="tel:+911123415678">Call Store</a>
        </div>
      </div>

      <div class="store-card">
        <h2>Crystal Aura Bangalore - MG Road</h2>
        <p>Address: 93, M.G. Road, Bengaluru - 560001</p>
        <p>Phone: +91 80 2559 7777</p>
        <p>Hours: 10:30 AM - 8:30 PM</p>
        <div class="store-actions">
          <a href="https://goo.gl/maps/example3">Get Directions</a>
          <a href="tel:+918025597777">Call Store</a>
        </div>
      </div>

      <div class="store-card">
        <h2>Crystal Aura Chennai - T Nagar</h2>
        <p>Address: 142, Usman Road, T. Nagar, Chennai - 600017</p>
        <p>Phone: +91 44 2815 2000</p>
        <p>Hours: 10:00 AM - 9:00 PM</p>
        <div class="store-actions">
          <a href="https://goo.gl/maps/example4">Get Directions</a>
          <a href="tel:+914428152000">Call Store</a>
        </div>
      </div>

      <div class="store-card">
        <h2>Crystal Aura Kolkata - Park Street</h2>
        <p>Address: 22, Park Street, Kolkata - 700016</p>
        <p>Phone: +91 33 2229 4321</p>
        <p>Hours: 11:00 AM - 8:00 PM</p>
        <div class="store-actions">
          <a href="https://goo.gl/maps/example5">Get Directions</a>
          <a href="tel:+913322294321">Call Store</a>
        </div>
      </div>

      <div class="store-card">
        <h2>Crystal Aura Hyderabad - Banjara Hills</h2>
        <p>Address: 8-2-681/1, Road No. 12, Banjara Hills, Hyderabad - 500034</p>
        <p>Phone: +91 40 2354 9876</p>
        <p>Hours: 10:30 AM - 8:30 PM</p>
        <div class="store-actions">
          <a href="https://goo.gl/maps/example6">Get Directions</a>
          <a href="tel:+914023549876">Call Store</a>
        </div>
      </div>
    </div>
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

      // Store search functionality
      const searchInput = document.querySelector('.store-search input');
      const searchButton = document.querySelector('.store-search button');
      const storeCards = document.querySelectorAll('.store-card');

      function searchStores() {
        const searchTerm = searchInput.value.toLowerCase();
        storeCards.forEach(card => {
          const storeInfo = card.textContent.toLowerCase();
          if (storeInfo.includes(searchTerm)) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      }

      searchButton.addEventListener('click', searchStores);
      searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
          e.preventDefault();
          searchStores();
        }
      });
    });
  </script>
  <?php include 'footer.php'; ?>
</body></html>