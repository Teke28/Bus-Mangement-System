<?php

session_start();

if(!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background: #fff;">
    <div class="box">
        <h1>Welcome, <span><?= $_SESSION['name']; ?></span></h1>
        <p>This is an <span>user</span> page</p>
       <div class="buttons">
            <button onclick="window.location.href='booking.html'" class="btn-booking">Booking</button>
            <button onclick="window.location.href='logout.php'" class="btn-logout">Logout</button>
     </div>
    </div>    
    
</body>
</html>