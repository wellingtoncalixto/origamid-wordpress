<?php
// Template Name: Contato
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container contato">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-16">
				<a href="https://www.google.com.br/maps" target="_blank"><img src="<?php the_field2('foto_map_rest'); ?>" alt="Map do Rest"></a>
			</div>

			<div class="grid-1-3 contato-item">
				<h2>Dados</h2>
				<p><?php the_field2('phone'); ?></p>
				<p><?php the_field2('email'); ?></p>
				<p><a href="<?php the_field2('facebook_url') ?>"><?php the_field2('facebook_text') ?></a></p>
			</div>
			<div class="grid-1-3 contato-item">
				<h2>Horários</h2>
				<?php echo wpautop( get_post_meta( get_the_ID(), 'work_time_text', true ) ); ?>
			</div>
			<div class="grid-1-3 contato-item">
				<h2>Endereço</h2>
				<p><?php echo the_field2('adress_streat')?>, <?php echo the_field2('adress_number')?></p>
				<p><?php echo the_field2('adress_neighborhood')?> - <?php echo the_field2('adress_city')?></p>
				<p>Brasil - Terra - Via Láctea</p>
			</div>
		</section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>