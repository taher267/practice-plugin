
<?php
/*
Plugin Name: JAZA SCode
VERSION: 1.0.0
author: Abu Taher
*/
// add_action('init','jaza_scode_social_init');
// function jaza_scode_social($atts,$contents=null){
// 	extract(shortcode_atts(
// 		array(
// 			'href' =>'#', 
// 			'sname' =>'',
// 			'target'=>'_blank', 
// 		),$atts,




// 	));
// 	return '<a href="'.$href.'" target="'.$target.'">'.$sname.'</a>';
	
// }
// function jaza_scode_social_init(){
// add_shortcode('social_scode','jaza_scode_social');
// }



//add_action('init','jaza_code_social_init');

//function jaza_code_social_init(){

add_shortcode('social_scode','jaza_code_social');
//}
function jaza_code_social($atts,$contents=null){
	//ob_start();
	$attrs=shortcode_atts(
		array(
			'href' =>'#', 
			'sname' =>'',
			'target'=>'_blank', 
		),$atts,




	);
return '<ul>
	<li><a class="social_style" href="'.$attrs['href'].'" target="'.$attrs['target'].'">'.$attrs['sname'].'</a></li>
</ul>';
//return '<a href="'.$attrs['href'].'" target="'.$attrs['target'].'">'.$attrs['sname'].'</a>';
	//ob_get_clean();
	
}
?>

