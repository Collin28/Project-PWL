<?php
session_start();
require_once '../../DataBase/db-connection.php';

if(!isset($_SESSION['user'])){
    header("Location: ../Login/loginpage.php");
    exit();
}




$user = $_SESSION['user'];
$email = $user['email'];

$sql = "SELECT DATE(waktu_masuk) AS tanggal, TIME(waktu_masuk) AS jam, status FROM attendance WHERE email='$email' ORDER BY waktu_masuk DESC";
$result = mysqli_query($db, $sql);
?>

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
        <a href="../Home/Home.php">Home</a>
        <a href="Rekap.php">Rekap</a>
      </nav>
    </div>
    <div class="navbar-right">
      <img src="../../images/profile.jpg" alt="Profile" class="profile-pic">
      <a href="../../Logout/Logout.php"><button class="logout-btn">Logout</button></a>
    </div>
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
          <?php
          if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {

                  $tanggal = date('d F Y', strtotime($row['tanggal']));
                  $jam = $row['jam'];
                  $status = $row['status'];

                  if ($status == 'Hadir') {
                      echo "<tr>
                              <td>$tanggal</td>
                              <td>$jam</td>
                              <td class='hadir'>Hadir</td>
                            </tr>";

                  } elseif ($status == 'Terlambat') {
                      echo "<tr>
                              <td>$tanggal</td>
                              <td>$jam</td>
                              <td class='absen'>Terlambat</td>
                            </tr>";
                  }
              }
          }
          ?>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>
