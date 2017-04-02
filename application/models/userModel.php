<?php 


/**
* 
*/
class UserModel extends CI_Model
{
	
		public function get_users() {
			return $this->db->get('users')->result();

		}

		public function get_user_by_id($id) 
		{
			 return $this->db->where(['id'=>$id])->get('users')->result();
			//echo $id;
		}

		public function check_login($info) {

			$this->load->library('form_validation');

			if($this->form_validation->run('login_form_validation')) {
				
				$info = array(
					'email'=>$info['email'],
					'password'=>md5($info['password'])

					);
				$q = $this->db->where($info)->get('users')->result();

				if ($q) {
					
					return $q;
				
				} else {
					return false;
				}

			} else {

				return false;
			}

		}



}