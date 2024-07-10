<?php
// Funções de ajuda
function get_field2($key, $page_id = 0) {
  $id = $page_id !== 0 ? $page_id : get_the_ID();
  return get_post_meta($id, $key, true);
}

function the_field2($key, $page_id = 0) {
  echo get_field2($key, $page_id);
}

// carrega os campos personalizados do CMB2 e Carbon Fields
require_once get_template_directory() . '/custom_fields/contato.php';
require_once get_template_directory() . '/custom_fields/home.php';
require_once get_template_directory() . '/custom_fields/sobre.php';
require_once get_template_directory() . '/custom_fields/seo.php';

?>