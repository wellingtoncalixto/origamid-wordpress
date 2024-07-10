<?php 
add_action('cmb2_admin_init', 'cmb2_fields_information');
function cmb2_fields_information() {
	$cmb = new_cmb2_box([
		'id' => 'information_box',
		'title' => 'information',
		'object_types' => ['page'],
	]);

	$cmb->add_field([
		'name' => 'Endereço - Rua',
		'id' => 'adress_streat',
		'type' => 'text',
	]);
	
	$cmb->add_field([
		'name' => 'Endereco - Numero',
		'id' => 'adress_number',
		'type' => 'text',
	]);
	
	$cmb->add_field([
		'name' => 'Endereço - Bairro',
		'id' => 'adress_neighborhood',
		'type' => 'text',
	]);

  $cmb->add_field([
		'name' => 'Endereço - Cidade',
		'id' => 'adress_city',
		'type' => 'text',
	]);
}
?>