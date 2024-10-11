<section id="team" class="team">
      <div class="container" data-aos="fade-up">
       
        <div class="section-title">
          <h2>BID</h2>
          <p></p>
      </div>
      <form action="<?=base_url('Home/aksi_penawaran')?>" method="POST" enctype="multipart/form-data">
            <div class="col-sm-12 col-xl-12">
                        <div class="bg-white rounded h-100 p-4">
                            <div class="form-floating">
                                <input class="form-control" placeholder="Harga"
                                    id="floatingTextarea" name="harga_akhir"></input>
                                <label for="floatingTextarea">Harga</label>
                            
                    
                    <input type="hidden" name="id" value="<?= $satu->id_lelang?>">

                    </div>
                    <div class="text-left">
                        <br>
                          <button type="submit" class="btn btn-success">Submit</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                  </div>
                        </div>
                        
                    </div>
                </div>
                  
        </form>
    </section>