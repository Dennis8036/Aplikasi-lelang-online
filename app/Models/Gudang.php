<?php

namespace App\Models;
use CodeIgniter\Model;


class Gudang extends Model{
	public function tampil_data(){
		return $this->db->get('tb_barang');
		
	}
   public function tampil($tabel	){ // ,$id){
	 return $this->db->table($tabel)
	                 // ->orderby($id, 'asc')
	                 ->get()
	                 ->getResult();
	}
    public function tambah($tabel,$isi){
	 return $this->db->table($tabel)
	                 ->insert($isi);
}
public function joinWhere($tabel,$tabel2, $on,$where){
	 return $this->db->table($tabel , $where)
	                 ->join($tabel2, $on,'left')
	                 ->get()
	                 ->getRow();
}
public function join($tabel,$tabel2, $on){
	 return $this->db->table($tabel)
	                 ->join($tabel2, $on,'left')
	                 // ->orderby($id,'desc')
	                 ->get()
	                 ->getResult();
	                  // return $this->db->query('Select * from brg_msk join barang on brg_msk.id_brg=barang.id_brg')
	                  // ->getResult();
}
    public function edit($tabel,$isi,$where){
	 return $this->db->table($tabel)->update($isi,$where);
	         
}
    public function hapus($tabel,$where){
     return $this->db->table($tabel)
                     ->delete($where);
	           
	          
}
    public function getWhere($tabel,$where){
	 return $this->db->table($tabel)
	                 ->getWhere($where)
	                 ->getRow();	
	              
	}
	public function upload($photo){
$imageName = $photo->getName();
$photo->move(ROOTPATH.'public/img',$imageName);

}
public function cari($table, $awal, $akhir, $field,){
return $this->db->table($tabel)
                ->join($tabel2,$on,'left')
                ->getWhere($field." between '$awal' and '$akhir'")
                ->getResult();
}
public function joinnelson($tabel, $tabel2, $tabel3,$tabel4, $on, $on2,$on3, $id){
 return $this->db->table($tabel)
 ->join($tabel2, $on,'left')
 ->join($tabel3, $on2,'left')
 ->join($tabel4, $on3,'left')
 ->orderby($id,'desc')
 ->get()
 ->getResult();

}

public function joinhistory($tabel, $tabel2, $tabel3,$tabel4, $on, $on2,$on3, $id,$where){
 return $this->db->table($tabel)
 ->join($tabel2, $on,'left')
 ->join($tabel3, $on2,'left')
 ->join($tabel4, $on3,'left')
 ->orderby($id,'desc')
 ->getWhere($where)
 ->getResult();


}
protected $table; // Biarkan kosong, nanti akan diisi secara dinamis
    protected $primaryKey = 'id_lelang';
    public function __construct()
    {
        parent::__construct();
        $this->table = 'tb_lelang'; // Setel nama tabel secara dinamis saat membuat objek model
    }
    public function insertHistory($table, $data)
{
    return $this->db->table($table)->insert($data);
}
    public function getPreviousHarga($id_lelang)
    {
        $table = 'tb_lelang'; // Set nama tabel ke 'tb_lelang'
        $result = $this->db->table($table)
            ->select('harga_akhir')
            ->where('id_lelang', $id_lelang)
            ->get();

        // Tambahkan penanganan kesalahan
        if (!$result) {
            die(var_dump($this->db->error())); // Cetak pesan kesalahan
        }

        $row = $result->getRow();

        if ($row) {
            return $row->harga_akhir;
        } else {
            return null; // Atau nilai default sesuai kebutuhan Anda
        }
    }
public function getFullNameByUsername($username)
{
    $table = 'tb_masyarakat'; // Change this based on your table name
    $result = $this->db->table($table)
        ->select('nama_lengkap')
        ->where('username', $username)
        ->get();

    
    $row = $result->getRow();

    if ($row) {
        return $row->nama_lengkap;
    } else {
        return null; // or a default value
    }
}
    public function getHighestBidsByBarang()
 {
     return $this->db->table('bid')
         ->select('id_lelang, MAX(harga_terakhir) as max_harga_terakhir')
         ->groupBy('id_lelang')
         ->get()
         ->getResult();
        }


}
