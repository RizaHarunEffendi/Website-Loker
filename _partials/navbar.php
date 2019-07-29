<header>
<?php include 'koneksi.php'; 

    $query = mysqli_query($koneksi,"SELECT * FROM tb_profil LIMIT 1");
    $data = mysqli_fetch_assoc($query);

?>
<nav class="navbar navbar-profil navbar-default">

    <img src="admin/images/<?php echo$data['gambar_profil']; ?>" width="150">

</nav>
<nav class="navbar navbar-expand-lg navbar-default">
  <!-- <a class="navbar-brand" href="index.php">Loker.id</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item nav-active ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=buka_lowongan">Buka Lowongan</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="?page=lihat_lowongan">Lihat Lowongan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=cari_kerja">Cari Kerja</a>
      </li>
      <li class="nav-item nav-active">
        <a class="nav-link" href="?page=cari_pekerja">Cari Pekerja</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=faq">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=contact_us">Contact Us</a>
      </li>
    </ul>
   <!--  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
</header>


