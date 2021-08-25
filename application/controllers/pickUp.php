<?php
class pickUp extends CI_Controller {
    public function index() {
    $this->load->helper('url');
    $this->load->model('pickUp_model');
    $posts = $this->pickUp_model->get_posts();
    $data['posts'] = $posts;
    $this->load->view('pickUp_create', $data);
    }

    public function read() {
    $this->load->helper('url');
    $this->load->model('pickUp_model');
    $posts = $this->pickUp_model->get_posts();
    $data['posts'] = $posts;
    $this->load->view('readPickup', $data);
    }
        


public function create() {
$this->load->helper('url');
$this->load->view('pickUp_create');
}

public function create_process() {
$nama = $this->input->post('nama');
$jenis = $this->input->post('jenis');
$kondisi = $this->input->post('kondisi');
$alamat = $this->input->post('alamat');
$this->load->helper('url');
$this->load->model('pickUp_model');
$this->pickUp_model->insert_pickup($nama, $jenis, $kondisi, $alamat);
redirect(base_url('pickUp/read'), 'refresh');
}

public function delete($id) {
    $this->load->helper('url');
    $this->load->model('pickUp_model');
    $this->pickUp_model->delete_post($id);
    redirect(base_url('pickUp/read'), 'refresh');
    }
public function update($id){
    $this->load->helper('url');
    $this->load->model('pickUp_model');
    $data['update'] = $this-> pickUp_model -> get_postsbyid($id);
    $this->load->view('pickUp_update', $data);
    }

    public function update_process(){
    $this->load->helper('url');
    $this->load->model('pickUp_model');
    $this->pickUp_model->update_post(
    $this->input->post('id'),
    $this->input->post('nama'),
    $this->input->post('jenis'),
    $this->input->post('kondisi'),
    $this->input->post('alamat')
    );
    redirect(base_url('pickUp/read'), 'refresh');
    }
    
    
}