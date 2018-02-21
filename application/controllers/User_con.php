<?php 
	class User_con extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('User_model');
			//$this->load->library('session');
		}
		public function index() {
			$this->load->view('user/header');
			$this->load->view('user/content');
			$this->load->view('user/footer');
		}
		public function add() {
			$this->load->view('user/header');
			$this->load->view('user/register');
			$this->load->view('user/footer');
		}
		public function save() {
			if (isset($_POST['submit'])) {
				$data= array(
			 		'name'=>$_POST['name'],
			 		'email'=>$_POST['email'],
			 		'contact'=>$_POST['contact'],
			 		'address'=>$_POST['address'],
			 		'password'=>$_POST['password']
				);
				$result=$this->User_model->register_info($data); 
				if ($result) {
					echo "register sucessfully";
					header('location:'.base_url().'/user_con/register?msg=successfully add.');
				} else {
					echo "not register";
				}
			}
		}
		public function login() {
			$this->load->view('user/header');
			$this->load->view('user/login');
			$this->load->view('user/footer');
		}
	}
?>