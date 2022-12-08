<?php 

class Karyawan extends Controller{

	public function index()
	{
		$data['judul'] = 'Daftar Karyawan';

		$data ['kry'] = $this-> model('M_karyawan')->getAllKaryawan(10, 1);
		$this-> view('template/header', $data);
		$this-> view('karyawan/index', $data);
		$this-> view('template/footer');

	}

	public function detail($id)
	{
		$data['judul'] = 'Detail karyawan';

		$data ['kry'] = $this-> model('M_karyawan')-> getKaryawanById ($id);
		$this-> view('template/header', $data);
		$this-> view('karyawan/detail', $data);
		$this-> view('template/footer');

	}

	public function tambah()
	{
		if ($this -> model('M_karyawan')-> tambahDataKaryawan($_POST) > 0) {
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location:' . BASEURL . '/karyawan');
			exit;
		} else {
			Flasher::setFlash('berhasil', 'ditambahkan', 'danger');
			header('Location:' . BASEURL . '/karyawan');
			exit;
		}
	}

	public function hapus($id)
	{
		if ($this -> model('M_karyawan')-> hapusDataKaryawan($id) > 0) {
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location:' . BASEURL . '/karyawan');
			exit;
		} else {
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location:' . BASEURL . '/karyawan');
			exit;
		}
	}

	public function getubah()
	{
		echo json_encode($this->model('M_karyawan')->getKaryawanById($_POST['id']));
	
	}

	public function ubah()
	{
	if ($this -> model('M_karyawan')-> ubahDataKaryawan($_POST) > 0) {
			Flasher::setFlash('berhasil', 'diubah', 'success');
			header('Location:' . BASEURL . '/karyawan');
			exit;
		} else {
			Flasher::setFlash('berhasil', 'diubah', 'danger');
			header('Location:' . BASEURL . '/karyawan');
			exit;
		}	
	}

	public function cari ()
	{
		$data['judul'] = 'Daftar karyawan';

		$data ['kry'] = $this-> model('M_karyawan')->cariDataKaryawan();
		$this-> view('template/header', $data);
		$this-> view('karyawan/index', $data);
		$this-> view('template/footer');
	}


}

