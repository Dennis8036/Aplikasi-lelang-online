<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\Gudang;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Home extends BaseController
{
   public function dashboard()
	{
        if (session()->get('level')>0){
		$model = new Gudang();
		$where=array('id_user'=>session()->get('id'));
        echo view('header');
        echo view('menu');
		echo view('dashboard');
		echo view('footer');
    }else{
		return redirect()->to('Home/login');
	}
	}
	 public function admin()
	{
		if (session()->get('level')>0){
		$model = new Gudang();
		$where=array('id_user'=>session()->get('id'));
		$data['manda']=$model->tampil('tb_admin');
        echo view('header');
        echo view('menu');
		echo view('admin',$data);
		echo view('footer');
		 }else{
		return redirect()->to('Home/login');
	}
}
public function tambahadmin()
	{
		if (session()->get('level')>0){
	    $model = new Gudang();
	
	
		$data['user']=$model->getWhere('tb_admin','id_admin');
	
		echo view('header');
        echo view('menu',$data);
		echo view('tambahadmin',$data);
		echo view('footer');
	     }else{
		return redirect()->to('Home/login');
	}

	}
		public function aksi_t_admin()
	{
		$model = new Gudang();
		$a = $this->request->getPost('nama_adm');
		$b = $this->request->getPost('us');
	    $c = $this->request->getPost('pw');
	    $d = $this->request->getPost('idl');

		$isi = array(
		'nama_admin' => $a,
		'username' => $b,
		'password' => $c,
		'id_level' => $d

		);

		$model->tambah('tb_admin',$isi);
		return redirect()->to('Home/dashboard');		


	}
	public function petugas()
	{
		if (session()->get('level')>0){
		$model = new Gudang();
		$where=array('id_user'=>session()->get('id'));
		$data['manda']=$model->tampil('tb_petugas');
        echo view('header');
        echo view('menu');
		echo view('petugas',$data);
		echo view('footer');
		 }else{
		return redirect()->to('Home/login');
	}
}
public function tambahpetugas()
	{
		if (session()->get('level')>0){
	    $model = new Gudang();
	
	
		$data['user']=$model->getWhere('tb_petugas','id_petugas');
	
		echo view('header');
        echo view('menu',$data);
		echo view('tambahpetugas',$data);
		echo view('footer');
	     }else{
		return redirect()->to('Home/login');
	}

	}
	    public function e_petugas($id){

        if (session()->get('level')>0){
        $model = new Gudang();
		$where=array('id_petugas'=>$id);

		$data['satu']=$model->getWhere('tb_petugas',$where);
	

		echo view('header');
		echo view('menu',$data);
		echo view('e_petugas',$data);
		echo view('footer');
		 }else{
		return redirect()->to('Home/login');
	}



    }
	 public function aksi_e_petugas()
	{
		$model = new Gudang();
		$a = $this->request->getPost('nama');
		$b = $this->request->getPost('tgl');
		$c = $this->request->getPost('harga');
		$d = $this->request->getPost('deskripsi');
	    $id = $this->request->getPost('id');

	

        $where=array('id_petugas'=>$id);

		$isi = array(
		'nama_petugas' => $a,
		'username' => $b,
		'password' => $c,
		'id_level' => $d
	

		);

		$model->edit('tb_petugas', $isi, $where);
		return redirect()->to('Home/petugas');		

	}
		 public function aksi_e_brg()
	{
		$model = new Gudang();
		$a = $this->request->getPost('nama');
		$b = $this->request->getPost('tgl');
		$c = $this->request->getPost('harga');
		$d = $this->request->getPost('deskripsi');
	    $id = $this->request->getPost('id');

	

        $where=array('id_barang'=>$id);

		$isi = array(
		'nama_barang' => $a,
		'tgl' => $b,
		'harga_awal' => $c,
		'deskripsi_barang' => $d
	

		);

		$model->edit('tb_barang', $isi, $where);
		return redirect()->to('Home/barang');		

	}
	public function aksi_t_petugas()
	{
		$model = new Gudang();
		$a = $this->request->getPost('nama_adm');
		$b = $this->request->getPost('us');
	    $c = $this->request->getPost('pw');
	    $d = $this->request->getPost('idl');

		$isi = array(
		'nama_petugas' => $a,
		'username' => $b,
		'password' => $c,
		'id_level' => $d

		);

		$model->tambah('tb_petugas',$isi);
		return redirect()->to('Home/dashboard');		


	}
	public function masyarakat()
	{
		if (session()->get('level')>0){
		$model = new Gudang();
		$where=array('id_user'=>session()->get('id'));
		$data['manda']=$model->tampil('tb_masyarakat');
        echo view('header');
        echo view('menu');
		echo view('masyarakat',$data);
		echo view('footer');
		 }else{
		return redirect()->to('Home/login');
	}
}
public function tambahmasyarakat()
	{
		if (session()->get('level')>0){
	    $model = new Gudang();
	
	
		$data['user']=$model->getWhere('tb_masyarakat','id_user');
	
		echo view('header');
        echo view('menu',$data);
		echo view('tambahmasyarakat',$data);
		echo view('footer');
	     }else{
		return redirect()->to('Home/login');
	}

	}
	public function aksi_t_masyarakat()
	{
		$model = new Gudang();
		$a = $this->request->getPost('nama_adm');
		$b = $this->request->getPost('us');
	    $c = $this->request->getPost('pw');
	    $d = $this->request->getPost('idl');

		$isi = array(
		'nama_lengkap' => $a,
		'username' => $b,
		'password' => $c,
		'id_level' => $d

		);

		$model->tambah('tb_masyarakat',$isi);
		return redirect()->to('Home/dashboard');		


	}
	 public function e_masyarakat($id){

        if (session()->get('level')>0){
        $model = new Gudang();
		$where=array('id_user'=>$id);

		$data['satu']=$model->getWhere('tb_masyarakat',$where);
	

		echo view('header');
		echo view('menu',$data);
		echo view('e_masyarakat',$data);
		echo view('footer');
		 }else{
		return redirect()->to('Home/login');
	}



    }
	 public function aksi_e_masyarakat()
	{
		$model = new Gudang();
		$a = $this->request->getPost('nama');
		$b = $this->request->getPost('tgl');
		$c = $this->request->getPost('harga');
		$d = $this->request->getPost('deskripsi');
	    $id = $this->request->getPost('id');

	

        $where=array('id_user'=>$id);

		$isi = array(
		'nama_lengkap' => $a,
		'username' => $b,
		'password' => $c,
		'id_level' => $d
	

		);

		$model->edit('tb_masyarakat', $isi, $where);
		return redirect()->to('Home/masyarakat');		

	}
	   public function barang()
	{
		if (session()->get('level')>0){
		$model = new Gudang();
		$where=array('id_user'=>session()->get('id'));
		$data['manda']=$model->tampil('tb_barang');
        echo view('header');
        echo view('menu');
		echo view('barang',$data);
		echo view('footer');
		 }else{
		return redirect()->to('Home/login');
	}

}

public function lelang()
    {
        if (session()->get('level')>0){
       $model = new Gudang();
       $where=array('id_user'=>session()->get('id'));
       $data ['manda'] = $model ->joinnelson('tb_lelang', 'tb_barang','tb_petugas','tb_masyarakat','tb_lelang.id_barang=tb_barang.id_barang','tb_lelang.id_petugas=tb_petugas.id_petugas','tb_lelang.id_user=tb_masyarakat.id_user','tb_lelang.id_lelang' );
       echo view ('header');
       echo view ('menu');
       echo view('lelang', $data);
       echo view ('footer');
        }else{
        return redirect()->to('home/login');
    }
   }


	public function tambahlelang() {
        if(session()->get('level') > 0) {
            $model = new Gudang();
            $data['manda'] = $model->tampil('tb_barang', 'id_barang');
            $data['mas'] = $model->tampil('tb_masyarakat', 'id_user');
            $data['pet'] = $model->tampil('tb_petugas', 'id_petugas');
            echo view('header');
            echo view('menu');
            echo view('tambahlelang', $data);
            echo view('footer');
        } else {
            return redirect()->to('Home/login');
        }
    }
public function e_lelang($id){
    
        if (session()->get('level')>0){
        $model = new Gudang();
		$where=array('id_lelang'=>$id);

		$data['satu']=$model->getWhere('tb_lelang',$where);
	    

		echo view('header');
		echo view('menu',$data);
		echo view('e_lelang',$data);
		echo view('footer');
		 }else{
		return redirect()->to('Home/login');
	}


    }

        public function aksi_e_lelang()
	{
		$model = new Gudang();
		$a = $this->request->getPost('brg');
		$b = $this->request->getPost('tgl');
		$c = $this->request->getPost('hak');
		$d = $this->request->getPost('us');
		$e = $this->request->getPost('pet');
		$f = $this->request->getPost('status');
	    $id = $this->request->getPost('id');

	

        $where=array('id_lelang'=>$id);

		$isi = array(
		'id_barang' => $a,
		'tgl_lelang' => $b,
		'harga_akhir' => $c,
		'id_user' => $d,
		'id_petugas' => $e,
		'status' => $f
	

		);

		$model->edit('tb_lelang', $isi, $where);
		return redirect()->to('Home/lelang');		

	}
	public function aksi_t_lelang() {
        $model = new Gudang();
        $a = $this->request->getPost('nama');
        $b = $this->request->getPost('tgl');
        $c = $this->request->getPost('harga');
        $d = $this->request->getPost('idu');
        $e = $this->request->getPost('idp');
        $f = $this->request->getPost('status');

        $isi = array(
            'id_barang' => $a,
            'tgl_lelang' => $b,
            'harga_akhir' => $c,
            'id_user' => $d,
            'id_petugas' => $e,
            'status' => $f


        );
        $model->tambah('tb_lelang', $isi);

        return redirect()->to('Home/lelang');
    }
	  public function tambahbarang()
	{
		if (session()->get('level')>0){
	    $model = new Gudang();
	
	
		$data['user']=$model->getWhere('tb_barang','id_barang');
	
		echo view('header');
        echo view('menu',$data);
		echo view('tambahbarang',$data);
		echo view('footer');
	     }else{
		return redirect()->to('Home/login');
	}

	}
	public function aksi_t_brg()
	{
		$model = new Gudang();
		$a = $this->request->getPost('nama_brg');
		$b = $this->request->getPost('tgl');
	    $c = $this->request->getPost('harga_awal');
	    $d = $this->request->getPost('deskripsi_barang');

		$isi = array(
		'nama_barang' => $a,
		'tgl' => $b,
		'harga_awal' => $c,
		'deskripsi_barang' => $d

		);

		$model->tambah('tb_barang',$isi);
		return redirect()->to('Home/barang');		


	}
	public function hapus_barang($id){
		$model = new Gudang();
		$where=array('id_barang'=>$id);
		$model->hapus('tb_barang',$where);
		return redirect()->to('Home/barang');

      }
      public function hapus_lelang($id){
		$model = new Gudang();
		$where=array('id_lelang'=>$id);
		$model->hapus('tb_lelang',$where);
		return redirect()->to('Home/lelang');

      }
      public function hapus_admin($id){
		$model = new Gudang();
		$where=array('id_admin'=>$id);
		$model->hapus('tb_admin',$where);
		return redirect()->to('Home/admin');

      }
       public function hapus_petugas($id){
		$model = new Gudang();
		$where=array('id_petugas'=>$id);
		$model->hapus('tb_petugas',$where);
		return redirect()->to('Home/petugas');

      }
        public function hapus_masyarakat($id){
		$model = new Gudang();
		$where=array('id_user'=>$id);
		$model->hapus('tb_masyarakat',$where);
		return redirect()->to('Home/masyarakat');

      }
        public function e_admin($id){

        if (session()->get('level')>0){
        $model = new Gudang();
		$where=array('id_admin'=>$id);

		$data['satu']=$model->getWhere('tb_admin',$where);
	

		echo view('header');
		echo view('menu',$data);
		echo view('e_admin',$data);
		echo view('footer');
		 }else{
		return redirect()->to('Home/login');
	}



    }
    public function aksi_e_admin()
	{
		$model = new Gudang();
		$a = $this->request->getPost('nama');
		$b = $this->request->getPost('tgl');
		$c = $this->request->getPost('harga');
		$d = $this->request->getPost('deskripsi');
	    $id = $this->request->getPost('id');

	

        $where=array('id_admin'=>$id);

		$isi = array(
		'nama_admin' => $a,
		'username' => $b,
		'password' => $c,
		'id_level' => $d
	

		);

		$model->edit('tb_admin', $isi, $where);
		return redirect()->to('Home/admin');		

	}
         public function e_brg($id){

        if (session()->get('level')>0){
        $model = new Gudang();
		$where=array('id_barang'=>$id);

		$data['satu']=$model->getWhere('tb_barang',$where);
	

		echo view('header');
		echo view('menu',$data);
		echo view('e_brg',$data);
		echo view('footer');
		 }else{
		return redirect()->to('Home/login');
	}



    }
        public function Bid($id)
    {
        if (session()->get('level')>0){

            $model = new Gudang();
            $where = array('id_lelang' => $id);
            $data['satu'] = $model->getWhere('tb_lelang', $where);
    	echo view ('header');
    	echo view ('menu');
        echo view('Bid',$data);
        echo view ('footer');
    }else{
        return redirect()->to('Home/login');
    }
    }

        
        
		public function login()
{
	echo view('header');
	echo view('login');

}
public function aksi_login()
{

$u=$this->request->getPost('username');
$p=$this->request->getPost('password');

$model = new Gudang();
$where=array(
     'username' => $u,
     'password' => $p
);

$model = new Gudang();
$cek = $model->getWhere('tb_admin',$where);
$cek2 = $model->getWhere('tb_petugas',$where);
$cek3 = $model->getWhere('tb_masyarakat',$where);

if ($cek>0){
	session()->set('id',$cek->id_admin);
	session()->set('username',$cek->username);
	session()->set('level',$cek->id_level);
	return redirect()->to('Home/dashboard');


}elseif($cek2>0){
	session()->set('id',$cek2->id_petugas);
	session()->set('username',$cek2->username);
	session()->set('level',$cek2->id_level);
	return redirect()->to('Home/dashboard');

}elseif($cek3>0){
	session()->set('id',$cek3->id_user);
	session()->set('username',$cek3->username);
	session()->set('level',$cek3->id_level);
	// Retrieve and store the full name in the session
        $namaLengkap = $model->getFullNameByUsername($cek3->username);
        session()->set('nama_lengkap', $namaLengkap);
        
        return redirect()->to('Home/dashboard');
    } else {
        return redirect()->to('Home/login');
    }
}
public function logout()
{

session()->destroy();
return redirect()->to('Home/login');

}
public function history()
{
	if (session()->get('level')>0){
    $model = new Gudang();
    $where = [
        'status' => 'ditutup'
    ];
    $data ['manda'] = $model->joinhistory(
        'tb_lelang', 'tb_barang', 'tb_petugas', 'tb_masyarakat', 'tb_lelang.id_barang=tb_barang.id_barang',
        'tb_lelang.id_petugas=tb_petugas.id_petugas', 'tb_lelang.id_user=tb_masyarakat.id_user', 'tb_lelang.id_lelang', $where
    );
    echo view ('header');
    echo view ('menu');
    echo view('history',$data);
    echo view ('footer');
     }else{
		return redirect()->to('Home/login');
	}
}
public function pdf()
{
//    if(session()->get('id_level')>0){
    $model = new Gudang();

    $data['manda']=$model->tampil('tb_barang');
    
    return view('priintpdf', $data);

//    }else{
//     return redirect()->to('Home/login');
//    } 
}
public function pdflelang()
{
//    if(session()->get('id_level')>0){
    $model = new Gudang();

     $data ['manda'] = $model ->joinnelson('tb_lelang', 'tb_barang','tb_petugas','tb_masyarakat','tb_lelang.id_barang=tb_barang.id_barang','tb_lelang.id_petugas=tb_petugas.id_petugas','tb_lelang.id_user=tb_masyarakat.id_user','tb_lelang.id_lelang' );

    return view('pdflelang', $data);

//    }else{
//     return redirect()->to('Home/login');
//    } 
}
// public function print(){
// 	$data['mahasiswa'] = $this->Gudang->tampil("tb_barang")->result();
// 	$this->load->view('print', $data);
// }
   public function __construct()
{
    // Load the database library
    $this->db = \Config\Database::connect();
}
public function excel() {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    
    // Set header untuk kolom
    $sheet->setCellValue('A1', 'Nama Barang');
    $sheet->setCellValue('B1', 'Tanggal');
    $sheet->setCellValue('C1', 'Harga Awal');
    $sheet->setCellValue('D1', 'Deskripsi Barang');


    // Mengatur lebar kolom
    $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(15);
    $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(15);
    $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(30);
    $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(20);



    // Membuat judul tebal
    $spreadsheet->getActiveSheet()->getStyle('A1:D1')->getFont()->setBold(true);

    // Ambil data dari tabel tb_lelang dengan JOIN ke tabel lainnya
    $query = $this->db->table('tb_lelang')
        ->select('tb_barang.nama_barang, tb_barang.tgl, tb_barang.deskripsi_barang, tb_masyarakat.nama_lengkap, tb_petugas.nama_petugas, tb_lelang.tgl_lelang, tb_lelang.harga_akhir, tb_lelang.status')
        ->join('tb_barang', 'tb_barang.id_barang = tb_lelang.id_barang')
        ->join('tb_masyarakat', 'tb_masyarakat.id_user = tb_lelang.id_user')
        ->join('tb_petugas', 'tb_petugas.id_petugas = tb_lelang.id_petugas')
        ->get();
        
    $data = $query->getResultArray();

    // Mengisi data ke dalam sheet
    $rowIndex = 2; // Mulai dari baris 2
    foreach ($data as $row) {
        $sheet->setCellValue('A' . $rowIndex, $row['nama_barang']);
        $sheet->setCellValue('B' . $rowIndex, $row['tgl']);
        $sheet->setCellValue('C' . $rowIndex, $row['harga_akhir']);
        $sheet->setCellValue('D' . $rowIndex, $row['deskripsi_barang']);

    
        $rowIndex++;
    }

    // Menambahkan border
    $lastColumn = $sheet->getHighestColumn();
    $lastRow = $sheet->getHighestRow();
    $styleArray = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            ],
        ],
    ];
    $sheet->getStyle('A1:' . $lastColumn . $lastRow)->applyFromArray($styleArray);

    // Setelah mengisi data, simpan spreadsheet ke dalam file atau kirim ke browser
    $writer = new Xlsx($spreadsheet);
    $filename = 'barang.xlsx';
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');
    $writer->save('php://output');
}

public function excellelang() {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    
    // Set header untuk kolom
    $sheet->setCellValue('A1', 'Nama Barang');
    $sheet->setCellValue('B1', 'Tanggal Lelang');
    $sheet->setCellValue('C1', 'Harga Akhir');
    $sheet->setCellValue('D1', 'Nama Pembeli');
    $sheet->setCellValue('E1', 'Nama Petugas');
    $sheet->setCellValue('F1', 'Nama Status');


    // Mengatur lebar kolom
    $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(15);
    $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(15);
    $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(30);
    $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(20);
    $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(20);
    $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(15);



    // Membuat judul tebal
    $spreadsheet->getActiveSheet()->getStyle('A1:F1')->getFont()->setBold(true);

    // Ambil data dari tabel tb_lelang dengan JOIN ke tabel lainnya
    $query = $this->db->table('tb_lelang')
        ->select('tb_barang.nama_barang, tb_barang.tgl, tb_barang.deskripsi_barang, tb_masyarakat.nama_lengkap, tb_petugas.nama_petugas, tb_lelang.tgl_lelang, tb_lelang.harga_akhir, tb_lelang.status')
        ->join('tb_barang', 'tb_barang.id_barang = tb_lelang.id_barang')
        ->join('tb_masyarakat', 'tb_masyarakat.id_user = tb_lelang.id_user')
        ->join('tb_petugas', 'tb_petugas.id_petugas = tb_lelang.id_petugas')
        ->get();
        
    $data = $query->getResultArray();

    // Mengisi data ke dalam sheet
    $rowIndex = 2; // Mulai dari baris 2
    foreach ($data as $row) {
        $sheet->setCellValue('A' . $rowIndex, $row['nama_barang']);
        $sheet->setCellValue('B' . $rowIndex, $row['tgl_lelang']);
        $sheet->setCellValue('C' . $rowIndex, $row['harga_akhir']);
        $sheet->setCellValue('D' . $rowIndex, $row['nama_lengkap']);
        $sheet->setCellValue('E' . $rowIndex, $row['nama_petugas']);
        $sheet->setCellValue('F' . $rowIndex, $row['status']);

    
        $rowIndex++;
    }

    // Menambahkan border
    $lastColumn = $sheet->getHighestColumn();
    $lastRow = $sheet->getHighestRow();
    $styleArray = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            ],
        ],
    ];
    $sheet->getStyle('A1:' . $lastColumn . $lastRow)->applyFromArray($styleArray);

    // Setelah mengisi data, simpan spreadsheet ke dalam file atau kirim ke browser
    $writer = new Xlsx($spreadsheet);
    $filename = 'lelang.xlsx';
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');
    $writer->save('php://output');
}


    public function aksi_penawaran()
{
    $model = new Gudang();

    // Validasi input
    $validation = \Config\Services::validation();
    $validation->setRules([
        'harga_akhir' => 'greater_than[' . $model->getPreviousHarga($this->request->getPost('id'), 'tb_lelang') . ']',
        'id' => 'required',
    ]);

    if (!$validation->withRequest($this->request)->run()) {
        // Validasi gagal, mungkin tambahkan log atau kembalikan pesan kesalahan
        $errors = $validation->getErrors();
        // Handle kesalahan validasi, misalnya kirim pesan error kembali ke form
        return redirect()->back()->with('errors', $errors);
    }

    $a = $this->request->getPost('harga_akhir');
    $id = $this->request->getPost('id');

    // Mendapatkan data harga sebelumnya dari lelang
    $previousHarga = $model->getPreviousHarga($id, 'tb_lelang');

    // Pastikan hanya user yang berhasil lelang yang bisa memasukkan data ke barang
    $whereLelang = ['id_lelang' => $id];

    $isiLelang = [
        'harga_akhir' => $a,
        'nama_lengkap_lelang' => session()->get('username'), // Include the full name from the session
        // Add other fields if needed
    ];

    // Jika harga yang dimasukkan lebih besar dari harga sebelumnya
    if ($a > $previousHarga) {
        // Perbarui data di lelang
        $model->edit('tb_lelang', $isiLelang, $whereLelang);
        return redirect()->to('Home/lelang');
    } else {
        // Handle the case where the bid is not greater than the previous bid
        return redirect()->back()->with('error', 'Bid must be greater than the previous bid.');
    }
}
}

