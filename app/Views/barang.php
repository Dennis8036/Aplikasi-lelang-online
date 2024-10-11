<main id="main" class="main">

    <div class="pagetitle">
      <h1>Barang</h1>
      <nav>
        <ol class="breadcrumb">
         <li class="breadcrumb-item"><a class="dropdown-item d-flex align-items-center" href="<?= base_url('Home/dashboard') ?>">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
              <a href="<?= base_url('Home/tambahbarang') ?>">
    <button class="btn btn-success">+ Tambah</button>
    </a>


<?php
if(session()->get('level')==1 || session()->get('level')==2)
{
  ?>
    <a class="btn btn-warning" href=" <?php echo base_url('Home/pdf')?>"> <i class=
      "fa fa-file"></i>Export PDF</a>

    <a class="btn btn-danger" href=" <?php echo base_url('Home/excel')?>"> <i class=
      ""></i>Export Excel</a>
          <?php
}else{

}
?>
           
              <table class="table datatable">
                <thead>
                     <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Tanggal</th>
                <th>Harga Awal</th>
                <th>Deskripsi Barang</th>
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
                <td><?= $erwin->nama_barang?></td>
                <td><?= $erwin->tgl?></td>
                <td><?= $erwin->harga_awal?></td>
                <td><?= $erwin->deskripsi_barang?></td>
                  

               
                <td>
                    <a href="<?= base_url('Home/e_brg/'.$erwin->id_barang)?>">
                    <button class="btn btn-success">Edit</button>
                </a>
                    <a href="<?= base_url('Home/hapus_barang/'.$erwin->id_barang)?>">
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


           
              
   
       