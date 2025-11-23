<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ABTEND - Rekap</title>
  <link rel="stylesheet" href="Rekap-admin.css?v=100" />
</head>
<body>

  <!-- Header -->
  <header class="navbar">
    <div class="navbar-left">
      <img src="../images/ABTEND.png" class="logo">
      
      <!-- <nav class="menu">
        <a href="../Student/Home/Home.php">Home</a>
      </nav> -->
    </div>
    <div class="navbar-right">
      <img src="../../images/profile.jpg" alt="Profile" class="profile-pic">
      <a href="../../Logout/Logout.php"><button class="logout-btn">Logout</button></a>
    </div>
    </div>
  </header>


  <!-- Contoh Filter
   <select name="" id="">
    <option value="">X AKL</option>
    <option value="">XI AKL</option>
    <option value="">X TKJ 1</option>
    <option value="">X TKJ 2</option>
   </select> -->

  <!-- Isi Halaman -->
   <main class="container">
     <h2 class="judul">Rekap Absensi Siswa</h2>
     <h1 class="subjudul">List Kelas</h1>

    <div class="card">
      <select name="kelas" id="kelas" class="filter" onchange="location = this.value;">
        <option value="">Pilih Kelas</option>

        <!-- Kelas X -->
        <option value="x1.html">X TKJ 1</option>
        <option value="x2.html">X TKJ 2</option>
        <option value="x3.html">X TKJ 3</option>

        <!-- Kelas XI -->
        <option value="xi1.html">XI TKJ 1</option>
        <option value="xi-tkj2.php">XI TKJ 2</option>
        <option value="xi3.html">XI TKJ 3</option>

        <!-- Kelas XII -->
        <option value="xii1.html">XII TKJ 1</option>
        <option value="xii2.html">XII TKJ 2</option>
        <option value="xii3.html">XII TKJ 3</option>
      </select>
    </div>

  </main>
</body>
</html>