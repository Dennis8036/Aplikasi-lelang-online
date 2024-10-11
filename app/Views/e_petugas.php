<main id="main" class="main">
   <div class="pagetitle">
      <h1></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- General Form Elements -->

<div class="container">
  <form action="<?= base_url('Home/aksi_e_petugas') ?>" method="POST">
  
      <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Nama Petugas</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Nama Barang"   name="nama" value="<?= $satu->nama_petugas ?>">
      </div>

      <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Username</label>
        <input type="text" class="form-control" id="kode" placeholder="Enter Tanggal"   name="tgl" value="<?= $satu->username ?>">
      </div>
  
  <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Password</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Harga Awal"   name="harga" value="<?= $satu->password ?>">
      </div>

 <div class="mb-3 mt-3">
        <label for="nama" class="form-label">ID Level</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Deskripsi Barang"   name="deskripsi" value="<?= $satu->id_level ?>">
      </div>


      <input type="hidden" name="id" value="<?= $satu->id_petugas ?>">
  
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>


  
  