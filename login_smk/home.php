<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="welcome-container">
        <h1>Selamat Datang, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>

<style>
       /* Reset dan dasar */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: linear-gradient(to right, #66a6ff, #89f7fe); /* Background gradien biru */
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

/* Container Selamat Datang */
.welcome-container {
  background-color: rgba(255, 255, 255, 0.9); /* Background putih transparan */
  padding: 40px 50px;
  border-radius: 12px;
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
  text-align: center;
  width: 100%;
  max-width: 500px;
}

/* Teks Selamat Datang */
.welcome-container h1 {
  font-size: 24px;
  margin-bottom: 20px;
  color: #333;
}

/* Tombol Logout */
.logout-btn {
  text-decoration: none;
  background-color: #f44336;
  color: white;
  padding: 12px 25px;
  border-radius: 6px;
  font-size: 16px;
  transition: background-color 0.3s ease;
  display: inline-block;
  margin-top: 10px;
}

.logout-btn:hover {
  background-color: #d32f2f;
}
