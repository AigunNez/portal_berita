<?php

class Berita_model {
	private $db;
    private $query;

	public function __construct() {
		$this->db = new Database;
	}

    private function tambahDilihatBerita($id)
    {
        $this->query = "SELECT dilihat FROM berita WHERE id_berita='$id'";
        $this->db->query($this->query);
        $data = $this->db->single();
        $tambah = $data['dilihat'] + 1;
        // echo $tambah;
        return $tambah;
    }

    private function tambahLihat($id)
    {
        $this->query = "UPDATE `berita` SET `dilihat` = '" . $this->tambahDilihatBerita($id) . "' WHERE `berita`.`id_berita`=$id";
        // echo $this->query . " hehe";
        $this->db->query($this->query);
        $this->db->execute();
    }

    public function batasDeskripsi($deskripsi, $batas)
    {
        $isi = strip_tags($deskripsi);
        // Ambil 30 kata pertama
        $words = explode(' ', $isi);
        $first_30_words = array_slice($words, 0, $batas);
        $result = implode(' ', $first_30_words);

        // Tampilkan hasil
        return $result;
    }

    private function beritaTerkait($kategori){
        $this->query = 'SELECT db.id_berita id, db.isi_berita, db.judul_berita judul_berita, db.url_berita url_berita, db.tanggal tanggal, k.nama_kategori, db.nama_gambar, a1.nama_admin FROM berita db JOIN admin a1 ON db.reporter = a1.id_admin JOIN kategori k ON db.kategori=k.id_kategori WHERE db.kategori=' . $kategori . ' LIMIT 2';

        $this->db->query($this->query);
        return $this->db->resultset();
    }

    private function beritaTerpopuler(){
        $batas = 5;
        $this->query = 'SELECT * FROM `berita` INNER JOIN admin ON berita.redaksi=admin.id_admin ORDER BY dilihat DESC LIMIT '. $batas;
        // echo $this->query;
        $this->db->query($this->query);

        return $this->db->resultset();
    }

    private function iklan(){
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

    public function getInformasiBerita($url) {
        $this->query = 'SELECT db.id_berita id, db.kategori, db.isi_berita, db.dilihat, db.judul_berita judul_berita, db.url_berita url_berita, a1.nama_admin reporter, a2.nama_admin redaksi, db.tanggal tanggal, k.nama_kategori, db.nama_gambar FROM berita db JOIN admin a1 ON db.reporter = a1.id_admin JOIN admin a2 ON db.redaksi = a2.id_admin JOIN kategori k ON db.kategori=k.id_kategori WHERE db.url_berita LIKE ';
        $this->query .= "'%$url%'";
        // echo $this->query;

        $this->db->query($this->query);
        $data = $this->db->single();

        if (empty($data)){
            header("location: ". BASEURL);
        } else {
            $this->tambahLihat($data['id']);
            $data['berita_terkait'] = $this->beritaTerkait($data['kategori']);
            $data['berita_terpopuler'] = $this->beritaTerpopuler();
            $data['iklan'] = $this->iklan();
        }

        // print_r($data);
		return $data;
        
	}
}

?>