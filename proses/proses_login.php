<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_sp";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Fungsi untuk memeriksa login
function checkLogin($username, $password, $conn) {
    // Lindungi dari SQL Injection
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);
    
    // Periksa apakah pengguna dengan username yang diberikan ada di database
    $sql = "SELECT id, username, password FROM login WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        return $row['id'];
    }

    // Jika username atau password salah, kembalikan 0
    return 0;
}

// Contoh penggunaan fungsi login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user_id = checkLogin($username, $password, $conn);
    
    // Perform user authentication logic here
    
    if ($user_id > 0) {
        // Start the session
        session_start();
    
        // Set session variables
        $_SESSION['user_id'] = $user_id; // You can replace this with the actual user ID
        $_SESSION['username'] = $username; // You can replace this with the actual username
    
        // Redirect to the index or desired page
        header("Location: index.php");
        exit();
    } else {
        // Handle authentication failure
        // You might want to redirect back to the login page with an error message
        header("Location: login.php?login_failed=true");
        exit();
    }
    

    // if ($user_id > 0) {
    //     // Login berhasil, lakukan tindakan setelah login di sini
    //     header("Location: index.php");
    // } else {
    //     // Login gagal
    //     echo "Login gagal. Periksa kembali username dan password Anda.";
    // }
}

// Tutup koneksi database
$conn->close();
?>
