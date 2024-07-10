<?php
// Template Name: Menu da Semana
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container">
			<h2 class="subtitulo"><?php the_title(); ?></h2>
			<?php 
			$categorys = carbon_get_the_post_meta( 'crb_week_menu_category' );
			if(isset($categorys)) { foreach($categorys as $category) {
			?>
				<div class="menu-prato grid-8">
				<h2><?php echo $category['category_name'] ?></h2>
				<ul>
					<?php
						$pratos = $category['crb_week_menu_dishes'];
						if(isset($pratos)) { foreach($pratos as $prato) {
					?>
						<li>
							<span><sup>R$</sup><?php echo $prato['price']; ?></span>
							<div>
								<h3><?php echo $prato['name']; ?></h3>
								<p><?php echo $prato['description']; ?></p>
							</div>
						</li>
					<?php } } ?>
				</ul>
			</div>
			<?php } } ?>
			
		</section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>