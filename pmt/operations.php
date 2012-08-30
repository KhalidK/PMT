<?php

ob_start();
session_start();

/**
 * 
 * 	Project Managment Tool
 *	@author Khalid Magdy <khalid.k@aol.com>
 *  This work is licensed under a Creative Commons Attribution 3.0 Unported License.
 *  You can edit on it , Use it in Personal or Commerical uses .
 *  
 */
//$p_name,$p_created_in,$p_job,$p_deadline,$p_client_name,$p_client_email,$p_fixed_price

require('classes/app.php');

$p_data = array(
	"p_name"         => $_POST['p_name'],
	"p_created_in"   => $_POST['p_created_in'],
	"p_job"          => $_POST['p_job'],
	"p_currently"    => 1,
	"p_deadline"     => $_POST['p_deadline'],
	"p_client_name"  => $_POST['p_client_name'],
	"p_client_email" => $_POST['p_client_email'],
	"p_fixed_price"  => $_POST['p_fixed_price'],
	"p_currency"     => 'USD'
);

$u_data = array(
	"u_name"     => $_POST['username'],
	"u_pass"     => $_POST['password']
);

switch($_POST['operation']){
	case 'add':
		$operation = $PMT->add_project($p_data);
		if($operation){
			HTML::show_succ('Post has Been Added');
		}else{
			HTML::show_error('Error Has been Occured !');
		}
	break;	
	
	case 'login':

		if($PMT->login($u_data)){
			$_SESSION['username'] = $u_data['u_name'];
			$_SESSION['password'] = $u_data['u_pass'];
			HTML::show_succ('You\'ve benn logged in Successfuly !');
		}else{
			HTML::show_error('Please Verify Your Data !');
		}

	break;

	default:
		header('Location: index.php');
	break;

}

?>

