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

require('classes/app.php');

//Check if user is logged in
if(!PMT::user_logged_in()){
	header('Location: index.php');
}

$data = $PMT->get_all_projects();

load::view('user_index',$data);

?>