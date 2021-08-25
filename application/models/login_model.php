<?php 
class login_model extends CI_Model { 
    // protected $table = "register";
    // protected $primaryKey = "id";
    // protected $allowedFields = ["email", "password"];
    // protected $useTimestamps = false;

    public function get_posts() { 
        $this->load->database(); 
        $query = $this->db->query('SELECT * FROM register'); 
        return $query->result(); 
    } 

    public function insert_post($NamaLengkap, $email, $kataSandi, $alamat, $nohp) { 
        $this->load->database();
        $this->db->query("INSERT INTO register (NamaLengkap, email, kataSandi, alamat, nohp) VALUES ('$NamaLengkap', '$email', '$kataSandi', '$alamat', '$nohp')");
    } 
 
    public function delete_post($id) { 
        $this->load->database(); 
        $this->db->delete('register', ['id' => $id]); 
    } 

    public function update_post($kataSandi, $id){ $this->load->database(); 
        $data = [ 
        "kataSandi" => $kataSandi
        ]; 
        $this -> db -> where ('id', $id); 
        $this -> db -> update ('register', $data); 
    } 

    public function get_postsbyid($id){ 
        $this->load->database(); 
        $query = $this->db->get_where('register', ['id' => $id]);
        return $query->row_array(); 
    } 

}
