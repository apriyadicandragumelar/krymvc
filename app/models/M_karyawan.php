<?php 

class M_karyawan {
	private $table = 'karyawan';
	private $db;
	// private $limit = 10;
	// private $start = 1;

public function __construct()
	{
		$this-> db = new Database;
	}

public function getAllKaryawan($limit, $start)
	{
		$this-> db->query('SELECT * FROM '. $this -> table);
		return $this-> db->resultSet();
	}

public function getKaryawanById($id)
	{
		$this-> db->query('SELECT * FROM '. $this-> table . ' WHERE id=:id');
		$this-> db->bind('id', $id);
		return $this-> db-> singel();
	}

public function tambahDataKaryawan($data)
	{
		$query = "INSERT INTO karyawan
				VALUES 
				('', :nama, :nik, :tempat_tgl_lahir, :jenis_kelamin, :alamat, :tgl_masuk, :no_tlp, :divisi)";

		$this-> db-> query ($query);
		$this-> db-> bind ('nama', $data['nama']);
		$this-> db-> bind ('nik', $data['nik']);
		$this-> db-> bind ('tempat_tgl_lahir', $data['tempat_tgl_lahir']); 
		$this-> db-> bind ('jenis_kelamin', $data['jenis_kelamin']);
		$this-> db-> bind ('alamat', $data['alamat']);
		$this-> db-> bind ('tgl_masuk', $data['tgl_masuk']);
		$this-> db-> bind ('no_tlp', $data['no_tlp']);
		$this-> db-> bind ('divisi', $data['divisi']);

		$this-> db-> execute();

		return $this-> db-> rowCount();

	}

	public function hapusDataKaryawan($id)
	{
		$query = "DELETE FROM karyawan WHERE id =:id";
		$this-> db-> query ($query);
		$this-> db-> bind('id', $id);

		$this-> db-> execute();

		return $this->db-> rowCount();
	}


    public function ubahDataKaryawan($data)
    {
        $query = "UPDATE karyawan SET
                    nama 				= :nama,
                    nik 				= :nik,
                    tempat_tgl_lahir 	= :tempat_tgl_lahir,
                    jenis_kelamin		= :jenis_kelamin,
                    alamat 				= :alamat,
                    tgl_masuk			= :tgl_masuk,
                    no_tlp 				= :no_tlp,
                    divisi 				= :divisi
                  WHERE id = :id";
        
        
		$this-> db-> query ($query);
		$this-> db-> bind ('nama', $data['nama']);
		$this-> db-> bind ('nik', $data['nik']);
		$this-> db-> bind ('tempat_tgl_lahir', $data['tempat_tgl_lahir']); 
		$this-> db-> bind ('jenis_kelamin', $data['jenis_kelamin']);
		$this-> db-> bind ('alamat', $data['alamat']);
		$this-> db-> bind ('tgl_masuk', $data['tgl_masuk']);
		$this-> db-> bind ('no_tlp', $data['no_tlp']);
		$this-> db-> bind ('divisi', $data['divisi']);
        $this-> db-> bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataKaryawan()
    {
    	$keyword = $_POST['keyword'];
    	$query = "SELECT * FROM karyawan WHERE 
			    	nama LIKE :keyword OR 
			    	divisi LIKE :keyword";
    	
    	$this-> db-> query ($query);
    	$this-> db-> bind('keyword', "%$keyword%");

    	return $this-> db->resultSet();

    }
}
































// PERTEMUAN 7
// class M_mahasiswa {

// // cara konek kedatabase
// 	// (dbh) database hendler
// 	private $dbh;
// 	// stmt (statment)
// 	private $stmt;

// 	public function __construct()
// 	{
// 	//identitas server	//data source name (dsn)
// 		$dsn = 'mysql:host=localhost;dbname=phpmvc';
// 	// block try
// 		try {
// 			$this -> dbh = new PDO($dsn, 'root','');
// 		// jika error tangakap exeptionnya
// 		} catch (PDOException $e){
// 			die($e->getMassage()); //jika error berpesan die
// 		}
// 	} 
// // data tanpa datbase
// 	// private $mhs =[
// 	// 	[
// 	// 		"nama" => "Candra Gumelar",
// 	// 		"nim" => "D1a.17.0534",
// 	// 		"email" => "candragumelar879@gmail.com",
// 	// 		"prodi" => "Sistem Informasi"
// 	// 	],
// 	// 	[
// 	// 		"nama" => "Rekha Anggriyani",
// 	// 		"nim" => "D1a.17.0512",
// 	// 		"email" => "rekhaanggriyani9@gmail.com",
// 	// 		"prodi" => "Ilmu Komunikasi"
// 	// 	],
// 	// 	[
// 	// 		"nama" => "Sayyidatu Islami Zakiya Rumi",
// 	// 		"nim" => "D1a.17.0504",
// 	// 		"email" => "rumizakiya@gmail.com",
// 	// 		"prodi" => "Tehnik Informatika"
// 	// 	]
// 	// ];

//  	//ini method public function
//  	// (ini adalah parameter) setiap kurung buka tutup
//  	public function getAllMahasiswa()
//  	{
//  		// query connect database PDO atau sintak
//  		$this-> stmt = $this-> dbh-> prepare('SELECT * FROM mahasiswa'); //ini query PDO
// 		// ini perintah eksekusi
//  		$this-> stmt->execute();
// 		// Mengambil semua data menggunakan fetchAll 	
//  		return $this-> stmt->fetchAll(PDO::FETCH_ASSOC); //array accoative


//  		// return $this-> mhs; 
//  	}
// }

// class Perpustakaan{
//     public function_construct(){
//         $this->db = new PDO('mysql:host=localhost;dbname=perpustakaan','root','');
//     }
//     public function tampil_buku(){
//         $sql = "SELECT * FROM buku";
//         $query = $this->db->query($sql);
//         return $query;
//         }
// }

