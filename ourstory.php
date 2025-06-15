<html><head><<style>
.body1 {
    font-family: 'Montserrat', sans-serif;
    line-height: 1.6;
    color: #1a1a1a;
    background-color: #f5e9dc;
    margin: 0;
    padding: 0;
}

.container1 {
    max-width: 1000px;
    margin: 0 auto;
    padding: 40px 20px;
}

h1, h2, h3 {
    font-family: 'Playfair Display', serif;
    color: #4a3000;
}

h1 {
    font-size: 3em;
    text-align: center;
    margin-bottom: 30px;
    color: #8b4513;
}

h2 {
    font-size: 2em;
    border-bottom: 2px solid #d4af37;
    padding-bottom: 10px;
    margin-top: 40px;
}

p {
    margin-bottom: 20px;
}

.crystal-bg {
    background: linear-gradient(135deg, #f5e9dc, #e6d0b3);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.sparkle {
    position: relative;
    display: inline-block;
}

.sparkle::before,
.sparkle::after {
    content: "";
    position: absolute;
    background: #ffd700;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    opacity: 0;
    animation: twinkle 1s infinite;
}

.sparkle::before {
    top: -15px;
    left: -15px;
}

.sparkle::after {
    bottom: -15px;
    right: -15px;
}

@keyframes twinkle {
    0%, 100% { opacity: 0; }
    50% { opacity: 1; }
}

.cta-button {
    display: block;
    width: 200px;
    margin: 40px auto;
    padding: 15px 30px;
    background-color: #8b4513;
    color: #ffd700;
    text-align: center;
    text-decoration: none;
    font-weight: bold;
    border-radius: 30px;
    transition: all 0.3s ease;
}

.cta-button:hover {
    background-color: #a0522d;
    transform: scale(1.05);
}

</style></head><body>
<?php include 'header.php'; ?>
<div class="body1">
<div class="container1">
    <h1><span class="sparkle">Crystal Aura</span>: The Story Behind the Brand</h1>
    
    <div class="crystal-bg">
        <p>Once upon a time, in a bustling city filled with dreamers and creators, there was a woman with a vision. Inspired by the beauty of gemstones but with a keen eye on affordability, she believed that every person deserved to wear jewelry that sparkled as brightly as their personality. This was the foundation upon which Crystal Aura was born.</p>
        
        <p>Crystal Aura is not just an online store; it's a gateway to a world of elegance where beauty doesn't come with a hefty price tag. The brand was designed for the modern individual who appreciates luxury but values authenticity and creativity. Every piece in the collection is carefully crafted, combining traditional designs with contemporary flair. From vibrant earrings to intricate necklaces, every item in Crystal Aura exudes charm.</p>
        
        <p>But there's more to Crystal Aura than just aesthetics. Each collection is inspired by nature's ethereal beauty—glittering rivers, shimmering stars, and glowing moonlit nights. The name itself, "Crystal Aura," was chosen to evoke the idea of an aura of elegance and grace that surrounds the wearer, just like the sparkle of a crystal reflecting light.</p>
    </div>
    
    <h2>The Mission</h2>
    <p>At Crystal Aura, the mission is simple: to make luxury accessible. No one should have to choose between quality and affordability. Each piece of jewelry is crafted with precision, mimicking the brilliance of real gemstones and precious metals, but with a focus on creating eco-friendly and ethical designs. Whether it's a gift for a loved one or a treat for yourself, Crystal Aura believes that everyone deserves to feel special.</p>
    
    <h2>The Collection</h2>
    <p>The store's curated collection offers something for every occasion, whether it's a casual outing or a grand celebration. Crystal Aura specializes in statement pieces—necklaces that make heads turn, earrings that shine with every movement, and bangles that add the perfect finishing touch. With a wide range of styles, there is something to complement every personality and occasion.</p>
    
    <p>Each customer is treated like royalty at Crystal Aura. From the moment you visit the site, a seamless shopping experience awaits. With a commitment to customer satisfaction, fast shipping, and an ever-growing collection, Crystal Aura is more than just a brand—it's a promise to bring out the inner glow in everyone.</p>
    
    <h2>Join the Crystal Aura Community</h2>
    <p>At Crystal Aura, it's about more than just jewelry. It's about being part of a community that values elegance, affordability, and sustainability. Follow along on social media, and you'll find inspiration, styling tips, and exclusive behind-the-scenes glimpses into how each piece is made.</p>
    
    <p>So, come shine with us. Discover the magic of affordable luxury at Crystal Aura, where every piece is designed to make you feel radiant.</p>
    
    <a href="index.php" class="cta-button">Shop Now</a>
</div>
</div>
<script>
document.addEventListener('DOMContentLoaded', (event) => {
    const headers = document.querySelectorAll('h1, h2');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });
    
    headers.forEach(header => {
        header.style.opacity = 0;
        header.style.transform = 'translateY(20px)';
        header.style.transition = 'opacity 0.5s, transform 0.5s';
        observer.observe(header);
    });
    
    const crystalBg = document.querySelector('.crystal-bg');
    crystalBg.style.opacity = 0;
    crystalBg.style.transform = 'scale(0.95)';
    crystalBg.style.transition = 'opacity 1s, transform 1s';
    
    setTimeout(() => {
        crystalBg.style.opacity = 1;
        crystalBg.style.transform = 'scale(1)';
    }, 500);
});
</script>

<?php include 'footer.php'; ?>
</body></html>