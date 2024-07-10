<?php 

use Carbon_Fields\Field;
use Carbon_Fields\Container;

add_action( 'carbon_fields_register_fields', 'crb_attach_post_meta' );
function crb_attach_post_meta() {
	Container::make( 'post_meta', __( 'Menu da Semana - Carbon' ) )
  		->where( 'post_type', '=', 'page' )
			->where('post_template', '=', 'page-home.php')
  		->add_fields( array(
				Field::make( 'complex', 'crb_week_menu_category', 'Categorias' )
					->set_layout( 'tabbed-horizontal' )
					->add_fields( array(
						Field::make( 'text', 'category_name', 'Nome da Categoria' ),
						Field::make( 'complex', 'crb_week_menu_dishes', 'Pratos' )
						->set_layout( 'tabbed-horizontal' )
						->add_fields( array(
							Field::make( 'text', 'name', 'Nome' ),
							Field::make( 'text', 'description', 'Descrição' ),
							Field::make('text', 'price', 'Preço'  ),
					) ),
						)),
		) );
};
?>