<?php get_header(); ?>
<div class="container-fluid container-custom">
	<div class="imagem">
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/slider.jpg" class="img-responsive" alt="">
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div class="artigo">
					<h1><?php the_title(); ?></h1>
					<p><?php the_time('d/M/Y' ); ?></p>
					<p><?php the_content(); ?></p>
				</div>
			<?php endwhile; else: ?>
			<div class="erro">
			<p>Desculpe, nada encontrdo.</p>
			</div>
			<?php endif; ?>	
		</div>
	</div>
</div>

<?php get_footer(); ?>