<?php 
add_action('cmb2_admin_init', 'cmb2_fields_seo');
function cmb2_fields_seo() {
	$cmb = new_cmb2_box([
		'id' => 'seo_box',
		'title' => 'SEO',
		'object_types' => ['page', 'post'],
	]);

  $cmb->add_field([
		'name' => 'Titulo',
		'id' => 'title_seo',
		'type' => 'text',
	]);

	$cmb->add_field([
		'name' => 'Descrição',
		'id' => 'descriptin_seo',
		'type' => 'text',
	]);
}




?>