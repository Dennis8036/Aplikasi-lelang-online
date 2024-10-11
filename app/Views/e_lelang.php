<main id="main" class="main">
   <div class="pagetitle">
      <h1></h1>
      <nav>
        <ol class="breadcrumb">
          
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
  <form action="<?= base_url('Home/aksi_e_lelang') ?>" method="POST">
  
      <div class="mb-3 mt-3">
        <label for="nama" class="form-label">ID Barang</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter ID Barang"   name="brg" value="<?= $satu->id_barang?>">
      </div>

      <div class="mb-3 mt-3">
        <label for="inputEmail" class="form-label">Tanggal Lelang</label>
        <input type="date" class="form-control" id="kode" placeholder="Enter Tanggal Lelang"   name="tgl" value="<?= $satu->tgl_lelang ?>">
      </div>
  
  <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Harga akhir</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Harga Akhir"   name="hak" value="<?= $satu->harga_akhir ?>">
      </div>

 <div class="mb-3 mt-3">
        <label for="nama" class="form-label">ID User</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter ID User"   name="us" value="<?= $satu->id_user ?>">
      </div>

<div class="mb-3 mt-3">
        <label for="nama" class="form-label">ID Petugas</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter ID Petugas"   name="pet" value="<?= $satu->id_petugas ?>">
      </div>

      <div class="mb-3">
    <label for="level" class="form-label">Status</label>
    <select class="form-select" id="level" name="status">

   <option value="1">dibuka</option>
   <option value="2">ditutup</option>


   </select>
 </div>
      <input type="hidden" name="id" value="<?= $satu->id_lelang ?>">
  
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>


  
  