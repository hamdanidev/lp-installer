<?php 

define('VERSION', '1.0');
 define('SOURCE_FILE', ''.__DIR__.'/source.zip');

$current_phpextensions = get_loaded_extensions();
$next_step = null;
$is_next_step = true;
$is_source_file_writeable = false;
$is_open_ssl = false;
$is_pdo = false;
$is_mbstring = false;
$is_tokenizer = false;
$is_xml = false;

 //Set step session
 if(!isset($_SESSION['step'])) {
 	$_SESSION['step'] = 0;
 	$_SESSION['errors'] = null;
 }

//Checking source file
if(!file_exists(SOURCE_FILE)) {
	die('Source File Installer tidak ada..');
} else {
	//Check writeable source file
	if(is_writable(SOURCE_FILE)) {
		$is_source_file_writeable = true;
	}
}

//Set step
$next_step = $_SESSION['step'];

//Checking req php extension loaded
if (in_array('pdo_pgsql', $current_phpextensions) == 1) {
	$is_pdo = true;
}
if (in_array('openssl', $current_phpextensions) == 1) {
	$is_open_ssl = true;
}
if (in_array('mbstring', $current_phpextensions) == 1) {
	$is_mbstring = true;
}
if (in_array('tokenizer', $current_phpextensions) == 1) {
	$is_tokenizer = true;
}
if (in_array('xml', $current_phpextensions) == 1) {
	$is_xml = true;
}

//Disabeld Next Button If Server Requirements Not Support
if(!$is_open_ssl OR !$is_pdo OR !$is_mbstring OR !$is_tokenizer OR !$is_xml) {
	$is_next_step = false;
}

 ?>