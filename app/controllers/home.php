<?php  

class Home extends Controller{
	public function index()
	{
		$data['berita_list'] = $this->model('Home_model')->getDataBerita(5);
		$data['berita_header1'] = $this->model('Home_model')->getDataBerita(1, 0);
		$data['berita_header2'] = $this->model('Home_model')->getDataBerita(1, 1);
		$data['berita_header3'] = $this->model('Home_model')->getDataBerita(1, 2);
		$data['berita_header4'] = $this->model('Home_model')->getDataBerita(1, 3);
		$data['berita_header5'] = $this->model('Home_model')->getDataBerita(1, 4);

		$data['berita_politik_utama'] = $this->model('Home_model')->getDataBerita(1,0,'politik');
		$data['berita_politik'] = $this->model('Home_model')->getDataBerita(4,1,'politik');

		$data['berita_teknologi_utama'] = $this->model('Home_model')->getDataBerita(1,0,'teknologi');
		$data['berita_teknologi'] = $this->model('Home_model')->getDataBerita(4,1,'teknologi');

		$data['berita_ekonomi_utama'] =  $this->model('Home_model')->getDataBerita(1,0,'ekonomi');
		$data['berita_ekonomi'] =  $this->model('Home_model')->getDataBerita(4,1,'ekonomi');
		// print_r($data['berita_ekonomi']);

		$data['berita_makanan'] = $this->model('Home_model')->getDataBerita(3,0,'makanan');

		$data['berita_terpopuler'] = $this->model('Home_model')->getBeritaTerpopuler();
		$data['iklan'] = $this->model('Home_model')->getIklan();
		// print_r($data['iklan']);

        $header = $this->model('Header_model')->getDataHeader();
		$footer = $this->model('Footer_model')->getDataFooter();

		$this->view('templates/header', $header);
		$this->view('home/index', $data);
		$this->view('templates/footer', $footer);
	}
}