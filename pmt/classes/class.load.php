<?php
/**
 * 
 * 	Project Managment Tool
 *	@author Khalid Magdy <khalid.k@aol.com>
 *  This work is licensed under a Creative Commons Attribution 3.0 Unported License.
 *  You can edit on it , Use it in Personal or Commerical uses .
 *  
 */

class load{
	
	public static function view($vname,$data = null){
				
				//Generating Class file based on Class name
				$vfile = 'views/'.$vname.'.tmpl.php';

				//Check if Class File exists
				if(file_exists($vfile)){

				require($vfile);

				}else{

					echo 'Error : Sorry . But The View You\'ve Called is Not Found ! ';

				}
	}
}

?>