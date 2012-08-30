<?php

/**
 * 
 * 	Project Managment Tool
 *	@author Khalid Magdy <khalid.k@aol.com>
 *  This work is licensed under a Creative Commons Attribution 3.0 Unported License.
 *  You can edit on it , Use it in Personal or Commerical uses .
 *  
 */
class HTML{
	public static function show_error($error_msg){
		echo "<div class='error'>$error_msg</div>";
	}
	public static function show_succ($succ_msg){
		echo "<div class='succ'>$succ_msg</div>";
	}
}
?>