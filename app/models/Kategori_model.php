<?php

class Kategori_model {
	private $db;
    private $query;

	public function __construct() {
		$this->db = new Database;
	}

    public function batasDeskripsi($deskripsi, $batas){
        $isi = strip_tags($deskripsi);
        // Ambil 30 kata pertama
        $words = explode(' ', $isi);
        $first_30_words = array_slice($words, 0, $batas);
        $result = implode(' ', $first_30_words);

        // Tampilkan hasil
        return $result;
    }

    public function getBeritaTerpopuler(){
        $batas = 5;
        $this->query = 'SELECT * FROM `berita` INNER JOIN admin ON berita.redaksi=admin.id_admin ORDER BY dilihat DESC LIMIT '. $batas;
        // echo $this->query;
        $this->db->query($this->query);

        return $this->db->resultset();
    }

    public function getIklan(){
        $this->query = 'SELECT * FROM iklan';
        $this->db->query($this->query);
        
        $isi = $this->db->resultSet();
        $data = array();
        foreach ($isi as $iklan) {
            if ($iklan['tipe_iklan'] == 'kotak') {
                $data['kotak'][] = $iklan['gambar_iklan'];
            } elseif ($iklan['tipe_iklan'] == 'panjang') {
                $data['panjang'][] = $iklan['gambar_iklan'];
            }
        }
        // print_r($data);
        return $data;
    }

    public function batasJudul($judul, $batas){
        // Ambil 30 kata pertama
        $words = explode(' ', $judul);
        $first_30_words = array_slice($words, 0, $batas);
        $result = implode(' ', $first_30_words);

        // Tampilkan hasil
        return $result;
    }

    public function getDataKategori($kategori){
        $this->query = 'SELECT db.id_berita id, db.isi_berita, db.judul_berita judul_berita, db.url_berita url_berita, a1.nama_admin reporter, a2.nama_admin redaksi, db.tanggal tanggal, k.nama_kategori, db.nama_gambar FROM berita db JOIN admin a1 ON db.reporter = a1.id_admin JOIN admin a2 ON db.redaksi = a2.id_admin JOIN kategori k ON db.kategori=k.id_kategori WHERE k.nama_kategori="' . $kategori . '"';
        // echo $this->query;

        $this->db->query($this->query);
        $data = $this->db->resultSet();

        if (empty($data)){
            header("location: " . BASEURL);
        }
        
        // print_r($data);
		return $data;
    }
}

?>