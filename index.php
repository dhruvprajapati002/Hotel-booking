

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Luxury Hotel</title>
  
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
   
    <header>
    <?php
session_start();
?>

<nav class="navbar">
    <a href="index.php">Home</a>
    <a href="rooms.html">Rooms</a>

    <?php if (isset($_SESSION['user'])): ?>
        <a href="#">Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</a>
        <a href="php/logout.php">Logout</a>
    <?php else: ?>
        <a href="login.html">Login</a>
        <a href="register.html">Register</a>
    <?php endif; ?>
</nav>

    </nav>

              <button class="menu-toggle">☰</button>
<script>
    document.querySelector('.menu-toggle').addEventListener('click', function() {
        document.querySelector('.navbar').classList.toggle('active');
    });
</script>

    </header>

   
    <div class="welcome-section" id="welcome-section">
        <h1>Welcome to Grand Luxury Hotel</h1>
    </div>

    
    <div class="about-container">
        <div class="about-section">
            <h1>About Grand Luxury Hotel</h1>
            <p>
                Discover a world of luxury and comfort at Grand Luxury Hotel, a paradise of elegance and sophistication.
                Whether you're here for relaxation, adventure, or a business retreat, our exceptional services and breathtaking ambiance
                will exceed your expectations.
            </p>
            
            <div class="about-content">
                <div class="about-box">
                    <img src="images/hotel-lobby.jpg" alt="Elegant Lobby">
                    <div class="about-text">
                        <h2>Elegant Interiors</h2>
                        <p>Step into a world of grandeur with our beautifully designed lobby and exquisite interiors, crafted to provide an unforgettable experience.</p>
                    </div>
                </div>
    
                <div class="about-box">
                    <img src="images/hotel-dining.jpg" alt="Fine Dining">
                    <div class="about-text">
                        <h2>Fine Dining</h2>
                        <p>Enjoy gourmet delicacies prepared by world-class chefs, offering a fusion of international and local flavors.</p>
                    </div>
                </div>
    
                <div class="about-box">
                    <img src="images/hotel-spa.jpg" alt="Luxury Spa">
                    <div class="about-text">
                        <h2>Relax & Rejuvenate</h2>
                        <p>Indulge in our state-of-the-art spa and wellness center, where tranquility and rejuvenation meet in perfect harmony.</p>
                    </div>
                </div>
    
                <div class="about-box">
                    <img src="images/hotel-pool.jpg" alt="Infinity Pool">
                    <div class="about-text">
                        <h2>Infinity Pool</h2>
                        <p>Take a dip in our stunning infinity pool while enjoying mesmerizing ocean views and a serene ambiance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2025 Grand Luxury Hotel. All Rights Reserved.</p>
            <p>📍 Address: 123 Paradise Street, Oceanview City</p>
            <p>📞 Phone: +1 234 567 890</p>
            <p>✉ Email: contact@grandluxuryhotel.com</p>
        </div>
    </footer>
    

</body>
</html>
