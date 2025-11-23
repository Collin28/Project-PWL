<?php

    include '../DataBase/db-connection.php';
    session_start();

    $_SESSION['loginprob'] = '';

    if(isset($_POST['submit'])) {
        $email    = $_POST['email'];
        $password = $_POST['password'];

       $sql = "SELECT * FROM userpass WHERE email='$email'";
       

       $result = mysqli_query($db,$sql);

       if($result && mysqli_num_rows($result) > 0 ) {
            $user = mysqli_fetch_assoc($result);

            $isPasswordMatch = password_verify($password, $user['password']);

            if($isPasswordMatch) {
                
                session_regenerate_id(true);
                $_SESSION['user']  = $user;

                date_default_timezone_set('Asia/Pontianak');
                $userEmail = $user['email'];
                $status = (date('H:i:s') > '07:00:00') ? "Terlambat" : "Hadir";

                $checkSql = "SELECT * FROM attendance WHERE email='$userEmail' AND DATE(waktu_masuk) = CURDATE()";
                $checkResult = mysqli_query($db, $checkSql);

                // if(mysqli_num_rows($checkResult) == 0) {
                    $insertSql = "INSERT INTO attendance (email, status, waktu_masuk) VALUES ('$userEmail', '$status', NOW())";
                    mysqli_query($db, $insertSql);
                // }

                if($user['role'] === 'ADMIN') {
                    header("Location:../Student/Home/admin.php");
                    exit(); 
                } else {
                    header("Location:../Student/Home/Home.php");
                    exit(); 

                }


            } else {
                $_SESSION['loginprob'] = 'wrong password';

            }
        }else{
            $_SESSION['loginprob'] = 'wrong email';
            
    } 
}  
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <link rel="stylesheet" href="loginpage.css">
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
 </head>
 
 
 <body>
     <div class="first-container">
 
         <div class="gretting" name ="login">
             <h1>Log In</h1>
         </div>

              
         <form  method="POST">

             <!-- email -->
             <input type="search" id="search-input" name="email" placeholder="Email">
             <?php
                if($_SESSION['loginprob'] == "wrong email"){
             ?>
                    <div>
                        <p style="color:red; font-size:12px; margin-bottom:10px; margin-top:-20px; margin-left:40px;"  
                        >Email tidak terdaftar!</p>
                    </div>
             <?php
                }elseif($_SESSION['loginprob'] == "fill email"){
             ?> 
                    <div>
                        <p style="color:red; font-size:12px; margin-bottom:10px; margin-top:-20px; margin-left:40px;"  
                        >Silahkan isi email terlebih dahulu</p>
                    </div>
             <?php
                }
             ?>
             <!-- password -->
             <input type="password" id="search-input" name="password" placeholder="Password">
             <?php
             if($_SESSION['loginprob'] == "wrong password"){
             ?>
                    <div>
                        <p style="color:red; font-size:12px; margin-bottom:10px; margin-top:-10px; margin-left:40px;"  
                        >Password anda salah, silahkan coba kembali!</p>
                    </div>
             <?php
             } 
             ?>
         
             <a href="">Forget Password?</a> <br>
 
             <!-- submit -->
             <button type="submit" id="submit-btn" name="submit">Login</button>
 
         </form>
 
 </div>
 
     
     <div class="container-icon">
 
         <div class="logo">
             <img src="../images/ABTEND.png" alt="">
         </div>
 
 
         <div class="opening">
         <label>Welcome!</label>
         <p>Silahkan login untuk melanjutkan sistem <br> absensi ABTEND </p>
         </div>
 
     </div>
 
 
     <script src="loginpage.js"></script>
 </body>
 
 </html>
