
<?php 

class Home extends controller {

	public function index()
{
	$data ['judul'] = 'Home';
	$data ['nama'] = $this->model('M_user')->getUser(); //dipanggil M_user dengan method getUser
	$this->view ('template/header', $data);
	$this-> view ('v_home/index');
	$this->view ('template/footer');

}
}
