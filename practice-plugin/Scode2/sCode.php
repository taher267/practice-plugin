
<?php
/*
Plugin Name: SCode
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

add_shortcode('social_code','jaza_code_social');
//}
function jaza_code_social($atts,$contents=null){
	//ob_start();
	shortcode_atts(
		$attrs=array(
			'href' =>'#', 
			'socialic' =>'',
			'target'=>'_blank', 
		),$atts,




	);
return '<a href="'.$attrs['href'].'" target="'.$attrs['target'].'">'.$attrs['socialic'].'</a>';
	?>
	<?php
	//ob_get_clean();
	
}
