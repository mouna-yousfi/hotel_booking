<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('config.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $room_id = $_POST['room_id'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];

    $checkUser = "SELECT id FROM users WHERE email='$email'";
    $result = $conn->query($checkUser);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $user_id = $user['id'];
    } else {
        
        $insertUser = "INSERT INTO users (username, email) VALUES ('$name', '$email')";
        $conn->query($insertUser);
        $user_id = $conn->insert_id;
    }

    
    $insertBooking = "INSERT INTO bookings (user_id, room_id, check_in, check_out)
                      VALUES ('$user_id', '$room_id', '$check_in', '$check_out')";

    if ($conn->query($insertBooking) === TRUE) {
        echo "<script>alert('✅ Réservation réussie !'); window.location.href='../index.php';</script>";
    } else {
        echo "❌ Erreur de réservation: " . $conn->error;
    }

    $conn->close();
}
?>