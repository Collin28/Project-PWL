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
      <img src="../images/ABTEND.png" class="logo">
      
      <nav class="menu">
        <a href="Home.html">Home</a>
        <a href="Rekap.html">Rekap</a>
      </nav>
    </div>

    <div class="navbar-right">
      <img src="../images/profile.jpg" class="profile-pic">
      <button class="logout-btn">Logout</button>
    </div>
  </header>

  <!-- Welcome -->
 <section class="welcome">
  <h2>Halo, Collin 👋</h2>
  <p id="date"></p>
  <p id="time" class="time"></p>
</section>

  <!-- Status Cards -->
  <section class="cards">
  <div class="card">
    <div class="icon green">✔</div>
    <p>Status Hari Ini</p>
    <span id="statusHariIni" class="highlight green">-</span>
  </div>
  <div class="card">
    <div class="icon blue">⏰</div>
    <p>Jam Masuk</p>
    <span id="jamMasuk">-</span>
  </div>
  <div class="card">
    <div class="icon red">⏻</div>
    <p>Jam Pulang</p>
    <span id="jamPulang">-</span>
  </div>
</section>

<section class="stats">
  <div class="stat">
    <p>Hadir</p>
    <span id="hadir" class="green">0 Hari</span>
  </div>
  <div class="stat">
    <p>Izin</p>
    <span id="izin" class="yellow">0 Hari</span>
  </div>
  <div class="stat">
    <p>Terlambat</p>
    <span id="terlambat" class="red">0 Hari</span>
  </div>
</section>


  <!-- Pengumuman -->
  <section class="announcement">
    <div class="icon orange">📢</div>
    <div>
      <h3>Pengumuman</h3>
      <p>Rapat koordinasi akan diadakan besok pukul 10:00 WIB di ruang rapat utama.</p>
    </div>
  </section>


<script src="Home.js"></script>
</body>
</html>