<?php
class pickUp_model extends CI_Model {
    
public function get_posts() {
$this->load->database();
$query = $this->db->query('SELECT * FROM pickup');
return $query->result();
}

public function insert_pickup($nama, $jenis, $kondisi, $alamat) {
$this->load->database();
$this->db->query("INSERT INTO pickup (nama, jenis, kondisi, alamat) VALUES ('$nama',
'$jenis', '$kondisi', '$alamat')");
}

public function delete_post($id) {
    $this->load->database();
    $this->db->query("DELETE FROM pickUp WHERE id = $id");
    }

public function update_post($id, $nama, $jenis, $kondisi, $alamat){
    $this->load->database();
    $data = ["nama" => $nama,"jenis" => $jenis,"kondisi" => $kondisi,"alamat" => $alamat];
    $this -> db -> where ('id', $id);
    $this -> db -> update ('pickUp', $data);
    }

    public function get_postsbyid($id){
    $this->load->database();
    $query = $this->db->get_where('pickUp', ['id' => $id]);
    return $query->row_array();
    }
}