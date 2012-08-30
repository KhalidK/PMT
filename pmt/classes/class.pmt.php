<?php

/**
 * 
 * 	Project Managment Tool
 *	@author Khalid Magdy <khalid.k@aol.com>
 *  This work is licensed under a Creative Commons Attribution 3.0 Unported License.
 *  You can edit on it , Use it in Personal or Commerical uses .
 *  
 */
//$p_name,$p_created_in,$p_job,$p_deadline,$p_client_name,$p_client_email,$p_fixed_price


class PMT extends DB{

	public static function user_logged_in(){
		if(isset($_SESSION['username']) && isset($_SESSION['password'])){
			return true;
		}else{
			return false;
		}
	}

	public function login($data){

		if(secure::array_empty($data)){
			return false;
		}

		$db_data = $this->db_where('users','u_name',$data['u_name']);

		$username = $data['u_name'];
		$password = md5($data['u_pass']);

		if($username == $db_data->u_name and $password  == $db_data->u_pass){
			return true;
		}else{
			return false;
		}

	}

	/**
	 * Function to Get All Projects From DB
	 * @return Array Contains Projects Data
	 */
	public function get_all_projects(){

		$data = $this->db_get_all('projects','ORDER BY id DESC');

		return $data;

	}
	
	public function add_project($data){
		$data  = secure::xss_array($data);
		$SQLquery = "INSERT INTO projects(p_name,p_created_in,p_job,p_currently,p_deadline,p_client_name,p_client_email,p_fixed_price,p_currency) VALUES(
			:p_name,:p_created_in,:p_job,:p_currently,:p_deadline,:p_client_name,:p_client_email,:p_fixed_price,:p_currency
			)" ;
		if(secure::array_empty($data)){
			//HTML::show_error('Please Enter data in All Fields ! ');
			return false;
		}else{
			$query = $this->db_query($SQLquery,$data);
			if($query){
				//HTML::show_succeed('Project has been added Succesfully !');
				return true;
			}
		}
	}

}

?>


