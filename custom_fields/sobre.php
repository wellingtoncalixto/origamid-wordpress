<?php 
add_action('cmb2_admin_init', 'cmb2_fields_sobre');
function cmb2_fields_sobre() {
	$cmb = new_cmb2_box([
		'id' => 'sobre_box',
		'title' => 'Sobre',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-sobre.php',
		],
	]);

	$cmb->add_field([
		'name' => 'Foto Rest',
		'id' => 'foto_rest',
		'type' => 'file',
		'options' => [
			'url' => false,
		],
	]);

	$cmb->add_field([
		'name' => 'Texto da Historia',
		'id' => 'history_text',
		'type' => 'textarea_small',
	]);
	
	$cmb->add_field([
		'name' => 'Texto da Visao',
		'id' => 'vision_text',
		'type' => 'textarea_small',
	]);
	
	$cmb->add_field([
		'name' => 'Texto dos Valores',
		'id' => 'values_text',
		'type' => 'textarea_small',
	]);
}
?>