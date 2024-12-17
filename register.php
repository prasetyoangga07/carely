<?php
// Menyambungkan ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carely";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Proses registrasi jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validasi password
    if ($password !== $confirmPassword) {
        $error = "Passwords do not match!";
    } else {
        // Cek apakah email sudah terdaftar
        $checkEmail = $conn->prepare("SELECT email FROM users WHERE email = ?");
        $checkEmail->bind_param("s", $email);
        $checkEmail->execute();
        $checkEmail->store_result();

        if ($checkEmail->num_rows > 0) {
            $error = "Email already registered!";
        } else {
            // Hash password sebelum disimpan
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Simpan data ke database dengan prepared statement
            $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $hashedPassword);

            if ($stmt->execute()) {
                $success = "Registration successful. You can now <a href='login.php'>login</a>.";
            } else {
                $error = "Error: " . $stmt->error;
            }
            $stmt->close();
        }
        $checkEmail->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - CareLy</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
    <style>
        /* Styling seperti sebelumnya */
        body { font-family: 'Roboto', sans-serif; background-color: #f4f4f4; }
        .register-container { max-width: 400px; margin: 100px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); }
        .input-field { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 4px; }
        .register-btn { width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .register-btn:hover { background-color: #45a049; }
        .login-link { text-align: center; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Create a New Account</h2>
        <?php if (isset($error)): ?>
            <div style="color: red;"><?= $error; ?></div>
        <?php endif; ?>
        <?php if (isset($success)): ?>
            <div style="color: green;"><?= $success; ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <input type="text" class="input-field" name="name" placeholder="Full Name" required>
            <input type="email" class="input-field" name="email" placeholder="Email" required>
            <input type="password" class="input-field" name="password" placeholder="Password" required>
            <input type="password" class="input-field" name="confirmPassword" placeholder="Confirm Password" required>
            <button class="register-btn" type="submit">Register</button>
        </form>
        <div class="login-link">
            Already have an account? <a href="login.php">Login</a>
        </div>
    </div>
</body>
</html>
