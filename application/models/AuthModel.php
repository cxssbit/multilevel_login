<?php 
 
class AuthModel extends CI_Model{

	private $table='user';

	public function userdata(){
		$this->db->where('username',$this->session->userdata('username'));
		$auth = $this->db->get($this->table)->row();
		return $auth;
	}

	public function login($username){
		$this->db->where('username',$username);
		$auth = $this->db->get($this->table)->row();
		$data_session = array(
			'username' => $username,
			'name'     => $auth->name
		);
		$this->session->set_userdata($data_session);

		if ($auth->level==0) {
			redirect('dashboard');
		}else{
			redirect('user');
		}
	}

	public function auth($level){
		if (!empty($this->session->userdata('username'))){
			$this->db->where('username',$this->session->userdata('username'));
			$auth = $this->db->get($this->table)->row();
			if ($this->session->userdata('username') != $auth->username) {
				redirect('auth/login');
			}elseif($auth->level<$level) {
				redirect('notfound');
			}
		}else{
			redirect('auth/login');
		}
	}

	public function postAll($data){
		$this->db->insert($this->table,$data);
	}
 
}