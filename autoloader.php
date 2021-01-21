<?php
include($site_root.'/class/template.php');
$t=new DataManagerTemplate($site_root.'/templates/');

$script_change_time=filemtime($site_root.'/app.js');
$css_change_time=filemtime($site_root.'/app.css');

$time=time();

$ip='';
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
	$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else{
	if(isset($_SERVER['REMOTE_ADDR'])){
		$ip=$_SERVER['REMOTE_ADDR'];
	}
}