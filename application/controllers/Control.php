<?php 
class Control extends CI_Controller { 

    function __construct(){
		parent::__construct();		
		$this->load->model('login_model');
 
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

    public function create() { 
        $this->load->helper('url'); 
        $this->load->view('login_create'); 
    }

    public function create_process() { 
        $NamaLengkap = $this->input->post('Nama-Lengkap'); 
        $email = $this->input->post('Email');
        $kataSandi = $this->input->post('Kata-Sandi');
        $alamat = $this->input->post('Alamat');
        $nohp = $this->input->post('NoHP');
        $this->load->helper('url');
        $this->load->model('login_model'); 
        $this->login_model->insert_post($NamaLengkap, $email, $kataSandi, $alamat, $nohp);
        redirect(base_url('control/aboutus'), 'refresh'); 
    } 

    public function lupa() { 
        $this->load->helper('url'); 
        $this->load->model('login_model'); 
        $posts = $this->login_model->get_posts(); 
        $data['posts'] = $posts; 
        $this->load->view('login_update', $data); 
    } 

    public function delete($id) { 
        $this->load->helper('url'); 
        $this->load->model('login_model'); 
        $this->login_model->delete_post($id); 
        redirect(base_url('Control/readlogin'), 'refresh'); 
    } 
    
    public function update($id){ 
        $this->load->helper('url'); 
        $this->load->model('login_model');  
        $data['update'] = $this-> login_model -> get_postsbyid($id); 
        $this->load->view('login_update', $data); 
    }

    public function update_process(){ 
        $this->load->helper('url');    
        $this->load->model('login_model'); 
        $this->login_model->update_post(  
        $this->input->post('kataSandi'), 
        $this->input->post('id') 
    ); 
    redirect(base_url('Control/login'), 'refresh'); 
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

    }
?>