 <?php

        include '../DataBase/db-connection.php';

        if(isset($_POST['submit'])){
            $email    = htmlspecialchars($_POST['email']);
            $password = $_POST['password'];
            $pwhash   = password_hash($password, PASSWORD_BCRYPT);

            $query  = "INSERT INTO userpass (email,password) values(?,?)";


            $stmt = $db->prepare($query);
            $stmt -> bind_param('ss', $email, $pwhash);
            $stmt -> execute();

        }
    ?>

 <!DOCTYPE html>
    <html lang="id">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ABTEND - Create Account</title>
    <link rel="stylesheet" href="createacc.css">
    </head>
    <body>
    <div class="login-container">
        <div class="left-section">
        <div class="logo">
            <img src="../images/ABTEND-removebg-preview.png">
        </div>
        <h2>Welcome!</h2>
        <p>Silakan Buat akun atau login untuk melanjutkan ke sistem absensi ABTEND.</p>
        </div>

        
        <div class="right-section">

        <h2>Create Account</h2>
        <p class="small-text">
            Sudah Punya Akun??
            <a href="#">Login</a>
        </p>

        <form method="POST" id="loginForm">

            <input type="text" id="username" placeholder="Username">
            <input type="email" id="email" placeholder="Email">
            <input type="password" id="password" placeholder="Password">

             <select name="class" required>
                <option value="" disabled selected>Pilih Kelas</option>
                 <option value="X RPL">X TKJ 1</option>
                 <option value="XI RPL">X TKJ 2</option>
                <option value="XII RPL">X TKJ 3L</option>
                <option value="X TKJ">X BID</option>
                <option value="XI TKJ">X AKL</option>
                <option value="XII TKJ">XI TKJ 1</option>
        </select>
            

            <button type="submit">Create Account</button>

            <div class="remember-forgot">
            <label><input type="checkbox" id="remember"> Ingat saya</label>
            <a href="#">Lupa password?</a>
            </div>

        </form>

        <p id="loginMessage" class="message"></p>
        </div>

        
    </div>

    <script src="login.js"></script>
    </body>
    </html>