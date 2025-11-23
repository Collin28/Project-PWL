<?php
      session_start();

      $user = $_SESSION['user'];

      require_once '../../DataBase/db-connection.php';

      if(!isset($_SESSION['user'])){
    header("Location: ../Loginpage/loginpage.php");
    exit();
}

$user = $_SESSION['user'];
$email = $user['email'];

$sqlToday = "SELECT * FROM attendance WHERE email='$email' AND DATE(waktu_masuk)=CURDATE()";
$resultToday = mysqli_query($db, $sqlToday);
$dataToday = mysqli_fetch_assoc($resultToday);

$sqlHadir = "SELECT COUNT(*) AS total_hadir FROM attendance WHERE email='$email' AND status='Hadir'";
$resultHadir = mysqli_fetch_assoc(mysqli_query($db, $sqlHadir));

$sqlTelat = "SELECT COUNT(*) AS total_telat FROM attendance WHERE email='$email' AND status='Terlambat'";
$resultTelat = mysqli_fetch_assoc(mysqli_query($db, $sqlTelat));

$statusColor = ''; 
if ($dataToday) {
    $statusColor = ($dataToday['status'] == 'Hadir') ? 'green' : 'red';
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Homepage Abtend</title>
  <link rel="stylesheet" href="Home.css">
</head>
<body>

  <!-- Header -->
  <header class="navbar">   
    <div class="navbar-left">
      <img src="../../images/ABTEND.png" class="logo">
      
      <nav class="menu">
        <a href="Home.php">Home</a>
        <a href="../Rekap/Rekap.php">Rekap</a>
      </nav>
    </div>

    <div class="navbar-right">
      <img src="../../images/profile.jpg" class="profile-pic">
      <a href="../../Logout/Logout.php"><button class="logout-btn">Logout</button></a>
    </div>
  </header>

  <!-- Welcome -->
 <section class="welcome">
  <h2>Halo, <strong> <?= $user['name']; ?> </strong> 👋</h2>
  <p id="date"></p>
  <p id="time" class="time"></p>
</section>

  <!-- Status Cards -->
  <section class="cards">
  <div class="card">
    <div class="icon green">✔</div>
    <p>Status Hari Ini</p>
    <span id="statusHariIni" class="highlight <?= $statusColor ?>">
    <?= $dataToday ? $dataToday['status'] : '-' ?>
    </span>
  </div>

  <div class="card">
    <div class="icon blue">⏰</div>
    <p>Jam Masuk</p>
    <span id="jamMasuk">
      <?= $dataToday ? date('H:i:s', strtotime($dataToday['waktu_masuk'])) : '-' ?>
    </span>
  </div>

  <div class="card">
    <div class="icon red">⏻</div>
    <p>Jam Pulang</p>
    <span id="jamPulang">14:35</span>
  </div>
</section>

<section class="stats">
  <div class="stat">
    <p>Hadir</p>
    <span id="hadir" class="green">
      <?= $resultHadir['total_hadir'] ?> Hari
    </span>
  </div>

  <div class="stat">
    <p>Terlambat</p>
    <span id="terlambat" class="red">
      <?= $resultTelat['total_telat'] ?> Hari
    </span>
  </div>
</section>

<script src="Home.js"></script>
</body>
</html>