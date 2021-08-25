<?php
class obat_model extends CI_Model {
public function get_posts(){
$this->load->database();
$query = $this->db->query('SELECT * FROM obat');
return $query->result();
}

public function insert_obat($nama, $jenis, $resep, $foto, $alamat) {
    $this->load->database();
    $this->db->query("INSERT INTO obat (nama, jenis, resep, foto, alamat) VALUES ('$nama', '$jenis', '$resep', '$foto', '$alamat')");
    }


public function delete_obat($id) {
    $this->load->database();
    $this->db->where('id', $id);
    $this->db->delete('obat');
}


function edit($loc){
    $this->load->database();
    return $this->db->get_where('obat',$loc);
}

        
    public function update_post($id, $nama, $jenis, $resep, $foto, $alamat){ 
        $this->load->database(); 
            $data = [ 
            "nama" => $nama, 
            "jenis" => $jenis,
            "resep" => $resep,
            "foto" => $foto,
            "alamat" => $alamat]; 
        $this -> db -> where ('id', $id); 
        $this -> db -> update ('obat', $data); 
    } 

    public function get_postsbyid($id){ 
        $this->load->database(); 
        $query = $this->db->get_where('obat', ['id' => $id]); 
        return $query->row_array(); 
   } 

   //fotooooooooooooooooooooooooo
   public function view(){
    return $this->db->get('obat')->result();
  }
    // Fungsi untuk melakukan proses upload file
  public function upload(){
    $config['upload_path'] = './images/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']  = '2048';
    $config['remove_space'] = TRUE;
  
    $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }
  
  // Fungsi untuk menyimpan data ke database
  public function save($upload){
    $data = array(
      'nama_file' => $upload['file']['file_name'],
    );
    
    $this->db->insert('foto', $data);
  }
}