<?php

class Controller extends CI_Controller {
// controller gusti
    function __construct(){
		parent::__construct();		
		$this->load->model('login_model');
        $this->load->helper(array('form', 'url'));
	}

    public function index() {
        $this->load->helper('url');
        $this->load->model('login_model');
        $posts = $this->login_model->get_posts();
        $data['posts'] = $posts;
        $this->load->view('login', $data);
        }

    public function readlogin() { 
        $this->load->helper('url'); 
        $this->load->model('login_model'); 
        $posts = $this->login_model->get_posts(); 
        $data['posts'] = $posts; 
        $this->load->view('readlogin', $data); 
    } 
    
    public function login() { 
        $this->load->helper('url'); 
        $this->load->model('login_model'); 
        $posts = $this->login_model->get_posts(); 
        $data['posts'] = $posts; 
        $this->load->view('login', $data); 
    } 

    public function aboutus() { 
        $this->load->helper('url'); 
        $this->load->model('login_model'); 
        $posts = $this->login_model->get_posts(); 
        $data['posts'] = $posts; 
        $this->load->view('aboutus', $data); 
    } 

    public function createlogin() { 
        $this->load->helper('url'); 
        $this->load->view('login_create'); 
    }

    public function home() { 
        $this->load->helper('url'); 
        $this->load->view('utama'); 
    }

    public function create_processlogin() { 
        $NamaLengkap = $this->input->post('Nama-Lengkap'); 
        $email = $this->input->post('email');
        $kataSandi = $this->input->post('Kata-Sandi');
        $alamat = $this->input->post('alamat');
        $nohp = $this->input->post('NoHP');
        $this->load->helper('url');
        $this->load->model('login_model'); 
        $this->login_model->insert_post($NamaLengkap, $email, $kataSandi, $alamat, $nohp);
        redirect(base_url('controller/login'), 'refresh'); 
    } 

    public function lupa() { 
        $this->load->helper('url'); 
        $this->load->model('login_model'); 
        $posts = $this->login_model->get_posts(); 
        $data['posts'] = $posts; 
        $this->load->view('login_update', $data); 
    } 

    public function deletelogin($id) { 
        $this->load->helper('url'); 
        $this->load->model('login_model'); 
        $this->login_model->delete_post($id); 
        redirect(base_url('Controller/readlogin'), 'refresh'); 
    } 
    
    public function updatelogin($id){ 
        $this->load->helper('url'); 
        $this->load->model('login_model');  
        $data['updatelogin'] = $this-> login_model -> get_postsbyid($id); 
        $this->load->view('login_update', $data); 
    }

    public function update_processlogin(){ 
        $this->load->helper('url');    
        $this->load->model('login_model'); 
        $this->login_model->update_post(  
        $this->input->post('kataSandi'), 
        $this->input->post('id') 
    ); 
    redirect(base_url('Controller/readlogin'), 'refresh'); 
    }
    
    public function aksi_login(){
        $email = $this->input->post('email');
        $kataSandi = $this->input->post('kataSandi');
        $where = array(
            'email' => $email,
            'Kata Sandi' => md5($kataSandi)
            );
        $cek = $this->login_model->cek_login("user",$where)->num_rows();
        if($cek > 0){
     
            $data_session = array(
                'email' => $email,
                'status' => "login"
                );
     
            $this->session->set_userdata($data_session);
     
            redirect(base_url('user'));
        }else{
            echo "Email dan kata sandi salah !";
        }
    }

    public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('user'));
	}


    // public function index() {
    // $this->load->helper('url');
    // $this->load->model('obat_model');
    // $posts = $this->obat_model->get_posts();
    // $data['posts'] = $posts;
    // $this->load->view('utama', $data);
    // }

    public function obat() {
        $this->load->helper('url');
        $this->load->model('obat_model');
        $posts = $this->obat_model->get_posts();
        $data['posts'] = $posts;
        $this->load->view('obat', $data);
        }

    public function read() {
        $this->load->helper('url');
        $this->load->model('obat_model');
        $posts = $this->obat_model->get_posts();
        $data['posts'] = $posts;
        $this->load->view('read', $data);
        }

    public function jadwal() {
        $this->load->helper('url');
        $this->load->view('jadwal');
        }

    public function pickup() {
        $this->load->helper('url');
        $this->load->view('pickup_create');
        }

    public function create() {
        $this->load->helper('url');
        $this->load->view('obat');
        }
    
    public function readPickup() {
        $this->load->helper('url');
        $this->load->model('pickUp_model');
        $posts = $this->pickUp_model->get_posts();
        $data['posts'] = $posts;
        $this->load->view('readPickup', $data);
    }
    public function create_process() {
        $nama = $this->input->post('nama');
        $jenis = $this->input->post('jenis');
        $resep = $this->input->post('resep');
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto');
        $foto = $this->upload->data('file_name');
        $alamat = $this->input->post('alamat');
        $this->load->helper('url');
        $this->load->model('obat_model');
        $this->obat_model->insert_obat($nama,$jenis,$resep, $foto, $alamat);
        redirect(base_url('Controller/read'), 'refresh');
        
        }

        public function createPickup() {
            $this->load->helper('url');
            $this->load->view('pickUp_create');
            }

        public function konsul() {
            $this->load->helper('url');
            $this->load->view('konsul');
            }
        
        public function create_processPickup() {
            $nama = $this->input->post('nama');
            $jenis = $this->input->post('jenis');
            $kondisi = $this->input->post('kondisi');
            $alamat = $this->input->post('alamat');
            $this->load->helper('url');
            $this->load->model('pickup_model');
            $this->pickup_model->insert_pickup($nama,$jenis,$kondisi, $alamat);
            redirect(base_url('Controller/readPickup'), 'refresh');
            }

    public function delete($id) {
        $this->load->helper('url');
        $this->load->model('obat_model');
        $this->obat_model->delete_obat($id);
        redirect(base_url('Controller/read'), 'refresh');
            }

    public function update($id) {
        $this->load->helper('url');
        $this->load->model('obat_model');
        $data['update'] = $this->obat_model->get_postsbyid($id);
        $this->load->view('obat_update', $data); 
    }

    public function update_process(){
        $this->load->helper('url');
        $this->load->model('obat_model');
        $this->obat_model->update_post(
        $this->input->post('id'),
        $this->input->post('nama'),
        $this->input->post('jenis'),
        $this->input->post('resep'),
        $this->input->post('foto'),
        $this->input->post('alamat')
        );
        redirect(base_url('Controller/read'), 'refresh');
    }

    public function updatepickup($id) {
        $this->load->helper('url');
        $this->load->model('pickUp_model');
        $data['update'] = $this->pickUp_model->get_postsbyid($id);
        $this->load->view('pickUp_update', $data); 
    }

    public function update_processpickup(){
        $this->load->helper('url');
        $this->load->model('pickUp_model');
        $this->pickUp_model->update_post(
        $this->input->post('id'),
        $this->input->post('nama'),
        $this->input->post('jenis'),
        $this->input->post('kondisi'),
        $this->input->post('alamat')
        );
        redirect(base_url('Controller/readPickup'), 'refresh');
    }

    // public function foto(){
    //     $data['foto'] = $this->obat_model->view();
    //     $this->load->view('obat_model/view', $data);
    //   }
    
      public function tambah(){
        $data = array();
        
        if($this->input->post('submit')){ 
          $upload = $this->obat_model->upload();
          
          if($upload['result'] == "success"){ 
            $this->obat_model->save($upload);
            
            redirect('gambar');
          }else{ 
            $data['message'] = $upload['error']; 
          }
        }
        
        $this->load->view('gambar/form', $data);
      }
}