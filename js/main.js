document.addEventListener("DOMContentLoaded", function() {

    const form = document.querySelector("form");
    const checkIn = document.getElementById("checkin");
    const checkOut = document.getElementById("checkout");
    const name = document.getElementById("name");
    const email = document.getElementById("email");

    
    form.addEventListener("submit", function(e) {
        const checkInDate = new Date(checkIn.value);
        const checkOutDate = new Date(checkOut.value);

        
        if (checkOutDate <= checkInDate) {
            e.preventDefault();   
            alert("❌ la date d'entrée doit etre antérieure à la date de dortie");
            return;
        }

        
        if (name.value.trim() === "") {
            e.preventDefault();
            alert("❌ SVP entrée le nom");
            return;
        }

        
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email.value)) {
            e.preventDefault();
            alert("❌ Adresse e-mail invalide ");
            return;
        }

        
        alert("✅ Votre réservation a bien été prise en compte ! Merci de votre confiance ");
    });

   
    const btn = document.querySelector(".btn");
    btn.addEventListener("mouseover", () => {
        btn.style.transform = "scale(1.1)";
        btn.style.transition = "0.3s";
    });
    btn.addEventListener("mouseout", () => {
        btn.style.transform = "scale(1)";
    });
});