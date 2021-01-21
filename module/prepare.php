<?php
include('functions.php');
$replace['title']='Что такое ВИЗ?';
$replace['description']='Понятное объяснение в картинках. ';

$replace['css_change_time']=$css_change_time;
$replace['script_change_time']=$script_change_time;
$replace['index_page_selected']='';
$replace['head_addon']='';

$replace['head_addon'].='
<link rel="image_src" href="/meta-image.png"/>
<meta property="og:image" content="/meta-image.png"/>
<meta name="twitter:image" content="/meta-image.png"/>
<meta name="twitter:card" content="summary_large_image"/>
';