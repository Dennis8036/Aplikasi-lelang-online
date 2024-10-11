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
              <h5 class="card-title">Form Edit barang</h5>

              <!-- General Form Elements -->

<div class="container">
  <form action="<?= base_url('Home/aksi_e_brg') ?>" method="POST">
  
      <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Nama Barang"   name="nama" value="<?= $satu->nama_barang ?>">
      </div>

      <div class="mb-3 mt-3">
        <label for="inputEmail" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="kode" placeholder="Enter Tanggal"   name="tgl" value="<?= $satu->tgl ?>">
      </div>
  
  <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Harga awal</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Harga Awal"   name="harga" value="<?= $satu->harga_awal ?>">
      </div>

 <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Deskripsi barang</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Deskripsi Barang"   name="deskripsi" value="<?= $satu->deskripsi_barang ?>">
      </div>


      <input type="hidden" name="id" value="<?= $satu->id_barang ?>">
  
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>


  
  