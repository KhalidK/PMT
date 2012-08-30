<?php

/**
 * 
 * 	Project Managment Tool
 *	@author Khalid Magdy <khalid.k@aol.com>
 *  This work is licensed under a Creative Commons Attribution 3.0 Unported License.
 *  You can edit on it , Use it in Personal or Commerical uses .
 *  
 */

//Autoload Function for Classes
function __autoload($c_name){

	//Generating Class file based on Class name
	$cfile = 'classes/class.'.$c_name.'.php';

	//Check if Class File exists
	if(file_exists($cfile)){

		require($cfile);

	}else{

		echo 'Error : Sorry . But The Class You\'ve Called is Not Found ! ';

	}

}

?>