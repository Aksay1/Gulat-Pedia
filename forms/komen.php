<?php
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "db_pjbl";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment_text = $_POST['message'];
    
    // Anda mungkin perlu menggunakan sesi atau cookies untuk mendapatkan ID pengguna
    // Sebagai contoh, saya akan mengasumsikan ada variabel $_SESSION['user_id'] yang berisi ID pengguna yang saat ini login
    
    $user_id = $_SESSION['user_id'];
    
    // Insert comment into database
    $sql = "INSERT INTO comments (user_id, comment_text) VALUES ('$user_id', '$comment_text')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Comment added successfully</div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
