function updateCartCount() {
    const cartCount = <?php echo $cart_count; ?>; // Get cart count from PHP
    document.getElementById('cart-count').innerText = cartCount; // Update the cart count display
}

// Call updateCartCount on page load
window.onload = updateCartCount;