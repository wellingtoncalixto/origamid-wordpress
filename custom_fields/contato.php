<?php 
add_action('cmb2_admin_init', 'cmb2_fields_contato_adress');
function cmb2_fields_contato_adress() {
	$cmb = new_cmb2_box([
		'id' => 'contato_adress_box',
		'title' => 'Contato - Endereço',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-contato.php',
		],
    'tabs' => true,
	]);

	$cmb->add_field([
		'name' => 'Foto Map Rest',
		'id' => 'foto_map_rest',
		'type' => 'file',
		'options' => [
			'url' => false,
		],
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

  $cmb->add_field([
		'name' => 'Endereço - Estado',
		'id' => 'adress_state',
		'type' => 'text',
	]);
}

add_action('cmb2_admin_init', 'cmb2_fields_contato_work_time');
function cmb2_fields_contato_work_time() {
	$cmb = new_cmb2_box([
		'id' => 'contato_work_time_box',
		'title' => 'Contato - Horario de Funcionamento',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-contato.php',
		],
    'tabs' => true,
	]);

  $cmb->add_field([
		'name' => 'Horario de Funcionamento',
		'id' => 'work_time_text',
		'type' => 'wysiwyg',
		'options' => [
			'textarea_rows' => get_option('default_post_edit_rows', 6),
		]
	]);
}

add_action('cmb2_admin_init', 'cmb2_fields_contato_data');
function cmb2_fields_contato_data() {
	$cmb = new_cmb2_box([
		'id' => 'contato_data_box',
		'title' => 'Contato - Dados Adicionais',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-contato.php',
		],
    'tabs' => true,
	]);

  $cmb->add_field([
		'name' => 'Telefone',
		'id' => 'phone',
		'type' => 'text',
	]);

	$cmb->add_field([
		'name' => 'E-mail',
		'id' => 'email',
		'type' => 'text',
	]);

	$cmb->add_field([
		'name' => 'Facebook - Text',
		'id' => 'facebook_text',
		'type' => 'text',
	]);

	$cmb->add_field([
		'name' => 'Facebook - Url',
		'id' => 'facebook_url',
		'type' => 'text_url',
	]);
}
?>