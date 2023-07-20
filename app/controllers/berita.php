<?php  

class berita extends Controller{

	public function index($params)
	{
		$data = $this->model('Berita_model')->getInformasiBerita($params);
		// print_r($data);
		$header = $this->model('Header_model')->getDataHeader();
		$footer = $this->model('Footer_model')->getDataFooter();
		
		$this->view('templates/header', $header);
		$this->view('berita/index', $data);
		$this->view('templates/footer', $footer);
	}
}