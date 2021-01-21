<?php
$config['server_timezone']='Etc/GMT';
$site_root=$_SERVER['DOCUMENT_ROOT'];

putenv('TZ='.$config['server_timezone']);
date_default_timezone_set($config['server_timezone']);