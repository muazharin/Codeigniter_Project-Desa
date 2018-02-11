<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_login');
	}
	public function index()
	{
		$this->load->view('home');
	}

	public function login(){
		//membuat variabel dari form inputan
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$where = array(
			'username'=>$username,
			'password'=>md5($password)
		);
		//cek data dari tabel admin
		$cek=$this->m_login->cek_login('admin',$where)->num_rows();
		if($cek > 0){
			//data sesi yg dikirim
			$data_session=array(
				'nama'=>$username,
				'status'=>'login'
			);
			$this->session->set_userdata($data_session);
			//masuk ke halaman c_admin
			redirect(site_url('c_admin'));
		}else{
			?>
				<script type="text/javascript" language="javascript">
					alert('Username atau Password yang Anda Masukkan Salah');
				</script>
			<?php
			redirect(site_url('welcome'));
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('welcome'));
	}
}
