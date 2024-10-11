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
              <h5 class="card-title">Register Admin</h5>

              <!-- General Form Elements -->
              <form  action="<?= base_url('Home/aksi_t_admin') ?>" method="POST">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Admin</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama_adm'>
                  </div>
                </div>
                   <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name='us'>
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='pw'>
                  </div>
                   <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">ID Level</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='idl'>
                  </div>
                </div>
            
                 <button type="submit" class="btn btn-primary">Submit</button>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>




  