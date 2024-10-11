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
              <h5 class="card-title">Petugas</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
              <a href="<?= base_url('Home/tambahpetugas') ?>">
    <button class="btn btn-success">Register</button>
    </a>

           
              <table class="table datatable">
                <thead>
                     <tr>
                <th>No</th>
                <th>Nama Petugas</th>
                <th>Username</th>
                <th>Password</th>
                <th>ID Level</th>
                <th>Aksi</th>
            </tr>
 
        </thead>
        <tbody>
                <?php 

            $no=1;
            foreach($manda as $erwin){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $erwin->nama_petugas?></td>
                <td><?= $erwin->username?></td>
                <td><?= $erwin->password?></td>
                <td><?= $erwin->id_level?></td>
                  

               
                <td>
                    <a href="<?= base_url('Home/e_petugas/'.$erwin->id_petugas)?>">
                    <button class="btn btn-success">Edit</button>
                </a>
                    <a href="<?= base_url('Home/hapus_petugas/'.$erwin->id_petugas)?>">
                    <button class="btn btn-danger">Hapus</button>
                    </a>

                </td>

            </tr>
        <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


           
              
   
       