<?php 

 class App {
 	protected $controller = 'home';
 	protected $method ='index';
 	protected $params = [];

	public function __construct()
	{

		$url = $this->parseURL();

		if ($url == NULL) { // TAMBAHAN UNTUK PHP 7, 8
			$url = [$this->controller]; // TAMBAHAN UNTUK PHP 7, 8
		} // TAMBAHAN UNTUK PHP 7, 8

			 
		if (file_exists('../app/controllers/' . $url[0] . '.php')) // TAMBAHAN UNTUK PHP 7, 8
		{ 
			$this-> controller=$url[0];
			unset($url[0]);	
			
		}   			//INI RELATIF LINK
			require_once '../app/controllers/' . $this-> controller . '.php';//tambahan php 7,8
			$this-> controller = new $this-> controller;

			// INI METHOD 
			if ( isset($url[1])) 
		{
			if ( method_exists($this -> controller, $url[1]))
		{	
			$this-> method=$url[1]; 
			unset($url[1]);
		}
		} 
		// PARAMS
			if (!empty($url)) {
			
			$this-> params = array_values($url);
		}

			call_user_func_array([$this-> controller, $this-> method], $this-> params);

}


	public function parseURL()
	{
		if (isset($_GET['url'])){
		$url = rtrim($_GET['url'], '/'); //untuk menghilangkan tanda / pada url
		$url = filter_var($url, FILTER_SANITIZE_URL); // menfilter dari karakter karaker aneh
		$url = explode('/', $url);
		return $url;
	}
	}
	} 	



	// KETERANGAN PHP 8.1 [SPACE PADA -> ' CONTOH $this-> controller']