<?php

class Footer_model {
	private $db;
    private $query;

	public function __construct() {
		$this->db = new Database;
	}

    public function getDataFooter(){
        $berita_footer = ['teknologi', 'ekonomi', 'politik'];
        $footer = array();
        
        foreach ($berita_footer as $indeks => $row){
            $this->query = "SELECT b.judul_berita, b.url_berita FROM berita b INNER JOIN kategori k ON b.kategori=k.id_kategori WHERE nama_kategori='$row' LIMIT 5";
            $this->db->query($this->query);
            $footer[$row] = $this->db->resultSet();
        }
        
        // print_r($footer);
        return $footer;
    }    
}

?>
