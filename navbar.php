<?php
session_start();
if ($_SESSION['status_login'] != true) {
    header('location: login.php');
}
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Perpustakaan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_siswa.php">Data Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_kelas.php">Data Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_buku.php">tampil Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">metu</a>
        </li>
      </ul>
    </div>
  </div>
</nav>