<?php

class Header_model {
	private $db;
    private $query;

	public function __construct() {
		$this->db = new Database;
	}

    public function getDataHeader(){    
        $this->query = "SELECT * FROM `header` INNER JOIN kategori ON header.id_kategori=kategori.id_kategori";
        $this->db->query($this->query);
        $data = $this->db->resultSet();
        $header =array();

        foreach ($data as $indeks => $row){
            if ($row['sub_header'] == 1){
                $header = $this->tambahDataArray($header, $row['id_sub_header'], $row);
            } else {
                $header[] = $row;
            }
        }
        // print_r($header);
        return $header;
    }

    

    private function tambahDataArray($dataArray, $idSubHeader, $arrayBaru)
    {
        // Mencari indeks array dengan judul_header "Teknologi"
        $index = -1;
        foreach ($dataArray as $key => $data) {
            // echo $data['id_header'] . ' dan ' . $idSubHeader . " <br> ";
            if ($data['id_header'] == $idSubHeader) {
                $index = $key;
                break;
            }
        }

        // Jika indeks ditemukan, tambahkan array baru
        if ($index != -1) {
            $dataArray[$index]['data_sub_header'][] = $arrayBaru;
        }

        return $dataArray;
    }
}

?>