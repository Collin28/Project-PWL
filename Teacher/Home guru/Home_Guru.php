<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage Abtend</title>
  <link rel="stylesheet" href="Home_Guru.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>

</head>
<body>
    <!-- Header -->
  <header class="navbar">
    <div class="navbar-left">
      <img src="../../images/ABTEND.png" class="logo">
      
      <nav class="menu">
        <a href="Home.html">Home</a>
        <a href="Rekap.html">Rekap</a>
      </nav>
    </div>

    <div class="navbar-right">
      <img src="../../images/profile.jpg" class="profile-pic">
      <button class="logout-btn">Logout</button>
    </div>
  </header>  

    <!-- Main -->
  <section class="cards">
    <div class="card orange">
      <div class="icon"></div>
      <div class="info">
        <p class="value">32</p>
        <p class="label">HADIR</p>
      </div>
    </div>
    <div class="card red">
      <div class="icon"></div>
      <div class="info">
        <p class="value">02</p>
        <p class="label">TELAT</p>
      </div>
    </div>
    <div class="card blue">
      <div class="icon"></div>
      <div class="info">
        <p class="value">01</p>
        <p class="label">ALPHA</p>
      </div>
    </div>
    </div>
  </section>


  <section class="main-content">
    <div class="kelas-container">
      <h2>Pilih Kelas :</h2>
      <div class="kelas-grid">
        <button>X TKJ I</button>
        <button>X TKJ II</button>
        <button>X TKJ III</button>
        <button>X BID</button>
        <button>XI TKJ I</button>
        <button>XI TKJ II</button>
        <button>XI TKJ III</button>
        <button>XI BID</button>
        <button>XII TKJ I</button>
        <button>XII TKJ II</button>
        <button>XII TKJ III</button>
        <button>XII BID</button>
      </div>
    </div>

    <div class="chart-container">
      <h2>Chart Kehadiran</h2>
      <canvas id="attendanceChart"></canvas>

      <div class="custom-legend">
    <span><span class="box" style="background:#ef4444"></span> Alpa</span>
    <span><span class="box" style="background:#22c55e"></span> Hadir</span>
    <span><span class="box" style="background:#3b82f6"></span> Telat</span>

    </div>
  </section>

  <script src="Home_Guru.js"></script>
    
</body>
</html>