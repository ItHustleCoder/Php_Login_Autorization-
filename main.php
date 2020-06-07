<?php 
    session_start();
    $_SESSION['sessionid']= session_id();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Php-Mailer/css/style.css">
    <title>PhpMailer</title>
</head>
<body>
    <form action="transaction.php" class="form">
        <h1 class="form_title">Login</h1>
        <div class="form_group">
            <input class="form_input" type="text" name="username">
            <label class="form_lable">Username</label>
        </div>
        <div class="form_group">
            <input class="form_input" type="text" name="password">
            <label class="form_lable">Password</label>
        </div>
        <div class="form_group">
            <input class="form_input" type="text" name="email">
            <label class="form_lable">Email</label>
        </div>

        <button class="form_button">Login</button>
    </form>
</body>
</html>