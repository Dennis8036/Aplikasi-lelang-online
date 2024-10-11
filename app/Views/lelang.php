<main id="main" class="main">

    <div class="pagetitle">
      <h1>Lelang</h1>
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
                                <?php
if(session()->get('level')==1 || session()->get('level')==2)
{
  ?>
              <a href="<?= base_url('Home/tambahlelang') ?>">
    <button class="btn btn-success">+ Tambah</button>
    </a>
                                                          <?php
}else{

}
?>

    <?php
if(session()->get('level')==1 || session()->get('level')==2)
{
  ?>
    <a class="btn btn-warning" href=" <?php echo base_url('Home/pdflelang')?>"> <i class=
      "fa fa-file"></i>Export PDF</a>

    <a class="btn btn-danger" href=" <?php echo base_url('Home/excellelang')?>"> <i class=
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
                <th>Tanggal lelang</th>
                <th>Harga Akhir</th>
                <th>Nama Pembeli</th>
                <th>Nama Petugas</th>
                <th>Status</th>
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
                <td><?= $erwin->tgl_lelang?></td>
                <td><?= $erwin->harga_akhir?></td>
                <td><?= $erwin->nama_lengkap_lelang?></td>
                <td><?= $erwin->nama_petugas?></td>
                <td><?= $erwin->status?></td>

               
                <td>
                  <?php
if(session()->get('level')==1 || session()->get('level')==2)
{
  ?>
                    <a href="<?= base_url('Home/e_lelang/'.$erwin->id_lelang)?>">
                    <button class="btn btn-success">Edit</button>
                </a>
                    <a href="<?= base_url('Home/hapus_lelang/'.$erwin->id_lelang)?>">
                    <button class="btn btn-danger">Hapus</button>
                    </a>
                                                                          <?php
}else{

}
?>

                    <?php
if(session()->get('level')==3)
{
  ?>
                     <a href="<?= base_url('Home/Bid/'.$erwin->id_lelang)?>">
                    <button class="btn btn-warning">Penawaran</button>
                </a>

                                                      <?php
}else{

}
?>


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


           
              
   
       