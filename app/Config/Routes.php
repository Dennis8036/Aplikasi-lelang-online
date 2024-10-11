<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->add('/Home/dashboard','Home::dashboard');
$routes->add('/Home/barang','Home::barang');
$routes->add('/Home/tambahbarang','Home::tambahbarang');
$routes->add('/Home/aksi_t_brg','Home::aksi_t_brg');
$routes->add('/Home/hapus_barang/(:num)','Home::hapus_barang/$1');	
$routes->add('/Home/hapus_lelang/(:num)','Home::hapus_lelang/$1');	
$routes->add('/Home/e_brg/(:num)','Home::e_brg/$1');
$routes->add('/Home/aksi_e_brg','Home::aksi_e_brg');
$routes->add('/Home/login','Home::login');
$routes->add('/Home/aksi_login','Home::aksi_login');
$routes->add('/Home/lelang','Home::lelang');
$routes->add('/Home/tambahlelang','Home::tambahlelang');
$routes->add('/Home/aksi_t_lelang','Home::aksi_t_lelang');
$routes->add('/Home/e_lelang/(:num)','Home::e_lelang/$1');
$routes->add('/Home/aksi_e_lelang','Home::aksi_e_lelang');

$routes->add('/Home/admin','Home::admin');
$routes->add('/Home/tambahadmin','Home::tambahadmin');
$routes->add('/Home/aksi_t_admin','Home::aksi_t_admin');
$routes->add('/Home/hapus_admin/(:num)','Home::hapus_admin/$1');
$routes->add('/Home/e_admin/(:num)','Home::e_admin/$1');
$routes->add('/Home/aksi_e_admin','Home::aksi_e_admin');

$routes->add('/Home/petugas','Home::petugas');
$routes->add('/Home/tambahpetugas','Home::tambahpetugas');
$routes->add('/Home/aksi_t_petugas','Home::aksi_t_petugas');
$routes->add('/Home/hapus_petugas/(:num)','Home::hapus_petugas/$1');
$routes->add('/Home/e_petugas/(:num)','Home::e_petugas/$1');
$routes->add('/Home/aksi_e_petugas','Home::aksi_e_petugas');

$routes->add('/Home/masyarakat','Home::masyarakat');
$routes->add('/Home/tambahmasyarakat','Home::tambahmasyarakat');
$routes->add('/Home/aksi_t_masyarakat','Home::aksi_t_masyarakat');
$routes->add('/Home/hapus_masyarakat/(:num)','Home::hapus_masyarakat/$1');
$routes->add('/Home/e_masyarakat/(:num)','Home::e_masyarakat/$1');
$routes->add('/Home/aksi_e_masyarakat','Home::aksi_e_masyarakat');
$routes->add('/Home/history','Home::history');
$routes->add('/Home/pdf','Home::pdf');
$routes->add('/Home/pdflelang','Home::pdflelang');
$routes->add('/Home/aksi_excel','Home::aksi_excel');

$routes->add('/Home/excel','Home::excel');
$routes->add('/home/excel/(:num)','Home::excel/$1');

$routes->add('/Home/excellelang','Home::excellelang');
$routes->add('/home/excellelang/(:num)','Home::excellelang/$1');

$routes->add('/Home/Bid/(:num)','Home::Bid/$1');
$routes->add('/Home/aksi_penawaran','Home::aksi_penawaran');
// $routes->add('/Home/print','Home::print');

