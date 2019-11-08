
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SI Akademik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="4/flatly/bootstrap.css" media="screen">
    <link rel="stylesheet" href="_assets/css/custom.min.css">
    <link rel="stylesheet" href="_vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="_assets/DataTables/dataTables.bootstrap4.min.css">
    
  </head>
  <body>
    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container">
        <a href="" class="navbar-brand"><i class="fa fa-apple"></i> I Campus</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
          
		 
          <?php
          if (isset($_SESSION['Login']))
          {
          ?>
           <li class="nav-item">
              <a class="nav-link "  href="index.php"><i class="fa fa-home"></i>  Home </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="dosen">Dosen<span class="caret"></span></a>
            <div class="dropdown-menu" >
                <a class="dropdown-item" href="index.php?page=dosen_tambah">Tambah Dosen</a>
				        <a class="dropdown-item" href="index.php?page=daftar_dosen">Daftar Dosen</a>
              </div>
            </li>
			  <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="program_studi">Program Studi<span class="caret"></span></a>
              <div class="dropdown-menu" >
                <a class="dropdown-item" href="index.php?page=tambah_program_studi">Tambah Prodi</a>
				<a class="dropdown-item" href="index.php?page=daftar_program_studi">Daftar Prodi</a>
              </div>
            </li>
			      <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="mahasiswa">Mahasiswa<span class="caret"></span></a>
              <div class="dropdown-menu" >
                <a class="dropdown-item" href="index.php?page=mahasiswa_tambah">Tambah Mahasiswa</a>
				        <a class="dropdown-item" href="index.php?page=mahasiswa_daftar">Daftar Mahasiswa</a>
              </div>        
            </li>
            <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toogle" data-toggle="dropdown" href="#" id="user"><i class="fa fa-user"></i> User<span class="caret"></span></a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="index.php?page=user_tambah">Tambah User</a>
                        <a class="dropdown-item" href="index.php?page=daftar_user">Daftar User</a>

                    </div>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toogle" data-toggle="dropdown" href="#" id="themes"><i class="fa fa-print"></i> Laporan<span class="caret"></span></a>
              <div class="dropdown-menu" >
                <a class="dropdown-item" target="_blank" href="index.php?page=../laporan/cetak_mhs">Daftar Mahasiswa</a>
				        <a class="dropdown-item" target="_blank" href="index.php?page=../laporan/cetak_dosen" target_blank>Daftar Dosen</a>
              </div>
            </li>
          <?php
          }
          ?>
          </ul>
          <ul class="nav navbar-nav ml-auto">
          <?php
          if (isset($_SESSION['Login'])){
          ?>
            <li class="navbar-nav">
              <a class="nav-link" href="index.php?page=logout"><i class="fa fa-sign-out"></i> Logout</a>
            </li>
              
              
          <?php 
          }else{
          ?>
          <li class="nav-item">
              <a class="nav-link" href="index.php?page=login"><i class="fa fa-sign-in"></i> Login</a>
              
          </li>
          <?php } ?>
          
          </ul>

        </div>
      </div>
    </div>
    

    <div class="container">