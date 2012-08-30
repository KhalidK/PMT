<?php

/**
 * 
 * 	Project Managment Tool
 *	@author Khalid Magdy <khalid.k@aol.com>
 *  This work is licensed under a Creative Commons Attribution 3.0 Unported License.
 *  You can edit on it , Use it in Personal or Commerical uses .
 *  
 */

class secure{

	public static function xss_array($data, $tags = null){
		
		$stripped_data = array();
	    foreach ($data as $key => $value)
	    {
	        if (is_array($value))
	        {
	            $stripped_data[$key] = strip_tags_array($value, $tags);
	        }
	        else
	        {
	            $stripped_data[$key] = strip_tags($value, $tags);
	        }
	    }
	    return $stripped_data;
	}
	public static function array_empty($array){
		$i = 0;
		foreach($array as $key => $value){
	    	if(empty($value)){
	      		$i++;
	    	}
		}
		$result = ($i == 0) ? false : true;
		return $result;
	}

}

?>





