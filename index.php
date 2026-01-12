<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systéme De Réservation D'hotel</title>
    <link rel="stylesheet" href="css/stylesheet1.css">
</head>
<body>

    <!-- en-tete de page -->
    <header class="header">
        <h1>🏨 HOTEL AL RAHA GOLDEN</h1>
        <nav>
            <ul>
                <li><a href="#home">mison</a></li>
                <li><a href="#rooms">chambres</a></li>
                <li><a href="#booking">Réservez maintenant</a></li>
                <li><a href="#contact">Contactez-nous</a></li>
            </ul>
        </nav>
    </header>

    <!-- le début -->
    <section id="home" class="hero">
        <div class="hero-text">
            <h2>BIENVENUE A HOTEL AL RAHA GOLDEN </h2>
            <p>Confort et Vue Imprenable</p>
            <a href="#booking" class="btn"Réservez maintenant</a>
        </div>
    </section>

    <!-- les chambres -->
    <section id="rooms" class="rooms">
        <h2>Types De Chambres</h2>
        <div class="room-container">
            <div class="room-card">
                <img src="imag/Modern Bedroom 2026 – 36 Inspiring Interior Design Ideas for Luxury, Cozy, and Organic Style.jfif" alt="chambre de luxe">
                <h3>chambre de luxe</h3>
                <p>Prix Par Nuit: 30000 DN</p>
            </div>
            <div class="room-card">
                <img src="imag/télécharger (12).jfif" alt="CHAMBRE DOUBLE">
                <h3>chambre double</h3>
                <p>Prix Par Nuit: 20000 DN</p>
            </div>
            <div class="room-card">
                <img src="imag/Charleston Sc Hotels Historic District Map.jfif" alt="Chambre Simple">
                <h3>Chambre Simple</h3>
                <p>Prix Par Nuit: 10000 DN</p>
            </div>
        </div>
    </section>

    <!-- la réservaton -->
    <section id="booking" class="booking-form">
        <h2>réservez votre chambre maintenant</h2>
        <form action="php/booking.php" method="POST">
            <label for="name">Le nom complet:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="room">choisier la chambre:</label>
            <select id="room" name="room_id" required>
                <option value="">-- choisier le type de chambre --</option>
                <option value="1">chambre luxe</option>
                <option value="2">chambre double</option>
                <option value="3">chambre simple</option>
            </select>

            <label for="checkin">La date de entre:</label>
            <input type="date" id="checkin" name="check_in" required>

            <label for="checkout">La date de sorte:</label>
            <input type="date" id="checkout" name="check_out" required>

            <button type="submit" class="btn">confermz la réservation</button>
        </form>
    </section>

    <!-- communication-->
    <section id="contact" class="contact">
        <h2>contact-nous</h2>
        <p>La : Rue Al Raha _ skikdaa</p>
        <p>📞  Teléphon: 0300995566</p>
        <p>📧 Email: contact@hotelalrahagolden.com</p>
    </section>

   
<script src="js/main.js"></script>
                
</body>
</html>
