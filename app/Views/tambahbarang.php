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
              <h5 class="card-title">Form Tambah Barang</h5>

              <!-- General Form Elements -->
              <form  action="<?= base_url('Home/aksi_t_brg') ?>" method="POST">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Barang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama_brg'>
                  </div>
                </div>
                   <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name='tgl'>
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Harga Awal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='harga_awal'>
                  </div>
                   <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Deskripsi barang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='deskripsi_barang'>
                  </div>
                </div>
            
                 <button type="submit" class="btn btn-primary">Submit</button>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>




  