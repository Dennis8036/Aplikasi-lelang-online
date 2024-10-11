
    
    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <i class="bi-back"></i>
                        <span>Lelang Online</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="">Home</a>
                            </li>

<?php
if(session()->get('level')==1 || session()->get('level')==2)
{
  ?>



                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="<?= base_url('Home/barang')?>">Barang</a>
                            </li>
    

          <?php
}else{

}
?>


<?php
if(session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3)
{
  ?>
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="<?= base_url('Home/lelang')?>">Lelang</a>
                            </li>
          <?php
}else{

}
?>

<?php
if(session()->get('level')==2)
{
  ?>
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="<?= base_url('Home/history')?>">History</a>
                            </li>
                                      <?php
}else{

}
?>




    


                                   <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                   




                                    
                               
                            </li>
                        </ul>


                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile
                                </a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                     <?php
if(session()->get('level')==1)
{
  ?>
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url('Home/tambahadmin')?>">Register Admin</a>
                                    </li>

                                     <li>
                                        <a class="dropdown-item" href="<?= base_url('Home/tambahpetugas')?>">Register Petugas</a>
                                    </li>
<?php
}else{

}
?>

<?php
if(session()->get('level')==3)
{
  ?>

                                     <li>
                                        <a class="dropdown-item" href="<?= base_url('Home/tambahmasyarakat')?>">Register Masyarakat</a>
                                    </li>
                                              <?php
}else{

}
?>
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url('Home/login')?>">Log out</a>
                                    </li>

                                    
                                </ul>
                            </li>
                        </ul>



                        <div class="d-none d-lg-block">
                            <a href="#top" class=""></a>
                            <span class=""><?=session()->get('username')?></span>
                        </div>
                    </div>
                </div>
            </nav>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                       
                          
         