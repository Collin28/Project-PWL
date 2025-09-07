<?php 






?>



<!-- the html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="loginpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>


<body>
    <div class="first-container">

        <div class="gretting">
            <h1>Log In</h1>
        </div>
             
        <form Method="POST">

            <!-- email -->
            <input type="search" id="search-input" name="email" placeholder="Email">
            <!-- password -->
            <input type="password" id="search-input" name="password" placeholder="Password">

            <a href="">Forget Password?</a>
            

            <div class="sign-in">
                <label>Sign In</label>
            </div>


        </form>
</div>

    
    <div class="container-icon">

        <div class="logo">
            <img src="./images/ABTEND.png" alt="">
        </div>


        <div class="opening">
        <label>Welcome!</label>
        <p>Silahkan login untuk melanjutkan sistem <br> absensi ABTEND </p>
        </div>

    </div>


    <script src="loginpage.js"></script>
</body>

</html>