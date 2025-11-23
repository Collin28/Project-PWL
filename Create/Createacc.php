<?php

    include '../DataBase/db-connection.php';

    if(isset($_POST['submit'])){
        $name     = htmlspecialchars($_POST['name']);
        $email    = htmlspecialchars($_POST['email']);
        $password = $_POST['password'];
        $pwhash   = password_hash($password, PASSWORD_BCRYPT);

        $query  = "INSERT INTO userpass (name,email,password) values(?,?,?)";


        $stmt = $db->prepare($query);
        $stmt -> bind_param('sss', $name, $email, $pwhash);
        $stmt -> execute();

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
     <form Method="POST">
            

             <!-- Name -->
             <input type="search" id="search-input" name="name" placeholder="Name">
             <!-- email -->
             <input type="search" id="search-input" name="email" placeholder="Email">
             <!-- password -->
             <input type="password" id="search-input" name="password" placeholder="Password">
 
             <!-- submit -->
             <button type="submit" id="submit-btn" name="submit">Login</button>
 
         </form>
</body>
</html>