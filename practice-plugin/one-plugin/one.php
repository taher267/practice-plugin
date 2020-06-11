<?php
/*
plugin Name: One
version: 1.0

*/
function headShow(){
	echo "<marquee behavior='12' direction='' style='color:red;z-index:-999;'> This is heading for admin board</marquee>";
}
add_action('wp_footer','headShow');



?>
