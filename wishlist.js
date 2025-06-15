function addToWishlist(name, price, image) {
    // Create an item object
    const item = {
        name: name,
        price: price,
        image: image
    };

    // Get the existing wishlist from localStorage
    let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

    // Add the new item to the wishlist array
    wishlist.push(item);

    // Store the updated wishlist back in localStorage
    localStorage.setItem('wishlist', JSON.stringify(wishlist));

    // Optionally, redirect to the wishlist page after adding
    window.location.href = 'wishlist.php';
}