<?php

/**
 * 
 * 	Project Managment Tool
 *	@author Khalid Magdy <khalid.k@aol.com>
 *  This work is licensed under a Creative Commons Attribution 3.0 Unported License.
 *  You can edit on it , Use it in Personal or Commerical uses .
 *  
 */

require('autoload.php');

require('class.pmt.php');

require('config.php');

//Set Timezone
date_default_timezone_set("Asia/Kuwait");

//Load Page Head
load::view('head');
//Define a new instance of PMT main Application Class
$PMT = new PMT($host,$user,$pass,$dbname);

?>
