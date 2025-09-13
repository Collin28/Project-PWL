<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ABTEND - Rekap</title>
  <link rel="stylesheet" href="Rekap.css" />
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
      <img src="../../images/profile.jpg" alt="Profile" class="profile-pic">
      <button class="logout-btn">Logout</button>
    </div>
  </header>

  <!-- Isi Halaman -->
  <main class="content">
    <h1 class="title">📊 Rekap Absensi</h1>
    <p class="subtitle">Berikut adalah data absensi Anda:</p>

    <div class="card">
      <table class="rekap-table">
        <thead>
          <tr>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>28 Agustus 2025</td>
            <td>07:45</td>
            <td class="hadir"> ✔ Hadir</td>
          </tr>
          <tr>
            <td>27 Agustus 2025</td>
            <td>07:50</td>
            <td class="hadir"> ✔ Hadir</td>
          </tr>
          <tr>
            <td>26 Agustus 2025</td>
            <td>-</td>
            <td class="absen"> X Tidak Hadir</td>
          </tr>
          <tr>
            <td>26 Agustus 2025</td>
            <td>-</td>
            <td class="absen"> X Tidak Hadir</td>
          </tr>
          <tr>
            <td>26 Agustus 2025</td>
            <td>-</td>
            <td class="absen"> X Tidak Hadir</td>
          </tr>
          <tr>
            <td>26 Agustus 2025</td>
            <td>-</td>
            <td class="absen"> X Tidak Hadir</td>
          </tr>
          <tr>
            <td>26 Agustus 2025</td>
            <td>-</td>
            <td class="absen"> X Tidak Hadir</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>
