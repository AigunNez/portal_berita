<?php  

class Kategori extends Controller{
	public function index($params)
	{
        $data['data_kategori'] = $this->model('Kategori_model')->getDataKategori($params);
        $data['nama_kategori'] = $params;
		$data['berita_terpopuler'] = $this->model('Kategori_model')->getBeritaTerpopuler();
		$data['iklan'] = $this->model('Kategori_model')->getIklan();

		$header = $this->model('Header_model')->getDataHeader();
		$footer = $this->model('Footer_model')->getDataFooter();

		$this->view('templates/header', $header);
		$this->view('kategori/index', $data);
		$this->view('templates/footer', $footer);
	}
}