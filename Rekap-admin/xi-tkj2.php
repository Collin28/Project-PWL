<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="stylesheet" href="xi-tkj2.css" />
  <title>ABTEND - Data Siswa XI TKJ 2</title>

</head>
<body>

  <!-- Header -->
  <header class="navbar">
    <div class="navbar-left">
      <img src="../images/ABTEND.png" class="logo">
      
      <nav class="menu">
        <a href="../Home/Home.php">Home</a>
      </nav>
    </div>
    <div class="navbar-right">
      <img src="../../images/profile.jpg" alt="Profile" class="profile-pic">
      <a href="../../Logout/Logout.php"><button class="logout-btn">Logout</button></a>
    </div>
    </div>
  </header>

  <!-- ISI -->
  <main class="container">
    <h2 class="judul">Daftar Siswa — XI TKJ 2</h2>

    <div class="table-card">
      <table>
        <tr>
          <th>No</th>
          <th>Nama Siswa</th>
        </tr>

        <tr class="click" onclick="window.location='albert.php'">
            <td>1</td>
            <td>Albert James Victorius</td>
        </tr>

        <tr class="click" onclick="window.location='#'">
            <td>2</td>
            <td>Bryan Geraldo Lim</td>
        </tr>

        <tr class="click" onclick="window.location='#'">
            <td>3</td>
            <td>Charles Marselino</td>
        </tr>

        <tr class="click" onclick="window.location='#'">
            <td>4</td>
            <td>Collin Lee</td>
        </tr>

         <tr class="click" onclick="window.location='#'">
            <td>5</td>
            <td>Grachia Fresella</td>
        </tr>

      </table>
    </div>

  </main>

</body>
</html>
