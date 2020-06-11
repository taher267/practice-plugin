<?php 

/*
plugin name: post create
author: Abu Taher
version: 1.0


*/
add_action('init','wp_jaza_custom_post');
function wp_jaza_custom_post(){
	register_post_type('jazacustom_post',
		array(
		'labels'=>array(
					'name'=>__('Jaza Post'),
					'singular_name'=>__('JazaPost'),
					'add_new'=>__('JazaNewPost'),
					'add_new_item'=>__('AddJzNewPost'),
					),
				//'taxonomies'=>array('category','post_tag'),
				'public'=>true,
				'supports'=>array('title','editor','thumbnail','excerpt','comments'),
				)
			);
}

add_action('init','jaza_shortcode_init');
function jaza_shortcode_init(){
	add_shortcode('jaza','jaza_shortcode_register');
}

function jaza_shortcode_register(){
	$args=array(
	'post_type'=>'jazacustom_post'
	);

$postLoop=new WP_Query($args);
if($postLoop->have_posts()){
	//show custom post loop
	while($postLoop->have_posts()){
		$postLoop->the_post();
		?>
			<h3><?php the_title(); ?></h3>
			<?php the_post_thumbnail(); 
					the_excerpt();
			?>


		<?php
	}
	wp_reset_postdata();
}else{
	echo "Nothing found in the post type";
}
}

add_action('init','jaza_tax_init');
function jaza_tax_init(){
	register_taxonomy('jazaTax','jazacustom_post',
	array(
		'label'=>__('Tuto Category','Tracking'),
		'rewrite'=>array('slug' => 'genre' ),
		'hierarchical'=>true,


));
}