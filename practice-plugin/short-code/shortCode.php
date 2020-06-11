<?php 

/*
plugin name:short-code
author: Abu Taher
author url:https://abutaher.com
version:1.0

*/
function jaza_shortcode_social($atts,$content=null){
	ob_start(); //take some times for loading data
	$arrt=extract(shortcode_atts(
		array(
			'href'=>'#',
			'sname'=>'',
			'target'=>'_blank'
		),$atts));
	return'<a target="'.$target.'" href="'.$href.'"  >'.$sname.'</a> <br/>';

	return ob_get_clean(); 
	 }


function jaza_social_init(){
	add_shortcode('jaza_social','jaza_shortcode_social');
}
add_action('init','jaza_social_init');