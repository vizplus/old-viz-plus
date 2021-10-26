<?php

function short_viz($str,$symbol=true){
	return number_format(floatval($str),2,'.','&nbsp;').($symbol?' viz':'');
}

include('ltmp_arr.php');
$replace['title']=$ltmp_arr['meta']['title'];
$replace['description']=$ltmp_arr['meta']['description'];

$replace['css_change_time']=$css_change_time;
$replace['script_change_time']=$script_change_time;
$replace['index_page_selected']='';
$replace['head_addon']='';

$replace['head_addon'].=$ltmp_arr['meta']['image'];
$replace['head_addon'].='<script>var selected_lang=\''.$ltmp_current.'\';</script>';