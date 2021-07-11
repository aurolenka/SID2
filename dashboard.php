<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p><?php echo $_SESSION['username']; ?>!</p>
        <p><?php echo $_SESSION['email']; ?>!</p>
        <p><?php echo $_SESSION['branch']; ?>!</p>
        <p><?php echo $_SESSION['year']; ?>!</p>
        <p><?php echo $_SESSION['domain']; ?>!</p>
    </div>
</body>
</html>
