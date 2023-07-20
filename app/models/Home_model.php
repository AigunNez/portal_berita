<?php

class Home_model {
	private $db;
    private $query;

	public function __construct() {
		$this->db = new Database;
	}

    public function batasJudul($judul, $batas){
        // Ambil 30 kata pertama
        $words = explode(' ', $judul);
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

    public function getDataBerita($batas=5, $lewati=0, $kategori="") {
        $this->query = 'SELECT db.id_berita id, db.judul_berita judul_berita, db.url_berita url_berita, a1.nama_admin reporter, a2.nama_admin redaksi, db.tanggal tanggal, k.nama_kategori, db.nama_gambar FROM berita db JOIN admin a1 ON db.reporter = a1.id_admin JOIN admin a2 ON db.redaksi = a2.id_admin JOIN kategori k ON db.kategori=k.id_kategori';

        if (!empty($kategori)){
            $this->query .= " WHERE k.nama_kategori='" . $kategori . "' ";
        }

        $this->query .=' ORDER BY db.id_berita DESC LIMIT ' . $batas;
        
        if ($lewati != 0) 
            $this->query .= " OFFSET " . $lewati;

        // echo $this->query . "\n";    
        $this->db->query($this->query);
		return $this->db->resultSet();
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
}

?>