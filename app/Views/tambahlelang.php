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
              <h5 class="card-title">Form Tambah Lelang</h5>

                <form action="<?= base_url('Home/aksi_t_lelang')?>" method="POST">
                <div class="form-body">
                    <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                        <label for="first-name-vertical">Nama Barang</label>
                        <select type="text" class="form-control" name="nama">
                        echo "<option>Pilih</option>";

                      <?php
                        foreach($manda as $erwin){
                          ?>
                          <option value="<?=$erwin->id_barang?>"><?=$erwin->
                          nama_barang?></option>
                        <?php }?>
                        </select>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                        <label for="email-id-vertical">Tanggal Lelang</label>
                        <input type="date" id="harga" class="form-control" name="tgl"
                            >
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                        <label for="contact-info-vertical">Harga Akhir</label>
                        <input type="text" id="harga" class="form-control" name="harga"
                            >
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                        <label for="contact-info-vertical">Nama Pembeli</label>
                        <select type="text" class="form-control" name="idu">
                        echo "<option>Pilih</option>";

                      <?php
                        foreach($mas as $erwin){
                          ?>
                          <option value="<?=$erwin->id_user?>"><?=$erwin->
                          nama_lengkap?></option>
                        <?php }?>
                        </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                        <label for="contact-info-vertical">Nama Petugas</label>
                        <select type="text" class="form-control" name="idp">
                        echo "<option>Pilih</option>";

                      <?php
                        foreach($pet as $erwin){
                          ?>
                          <option value="<?=$erwin->id_petugas?>"><?=$erwin->
                          nama_petugas?></option>
                        <?php }?>
                        </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                        <label for="password-vertical">Status</label>
                        <select  type="select" class="form-control" name="status" id="status" placeholder="Enter status" name="status">
               <option value="volvo">Pilih</option>
               <option value="1">dibuka</option>
               <?php
if(session()->get('level')==2)
{
?>     
               <option value="2">ditutup</option>
               <?php
    }else{

    }?> 
             </select>
                        </div>
                    </div>
                    
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                        
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>