	<?php get_header(); ?>
	<div class="container-fluid">
		<div class="row">
			<div id="home" class="slider">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<?php
						$args = array('post_type' =>'slider', 'showposts' =>5);
						$my_slider = get_posts( $args );
						$cont = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
						?>
						<li data-target="#carousel-example-generic" data-slide-to="<?php echo $count; ?>" <?php if($count == 0): ?> class="active" b<?php endif; ?>></li>
						<?php
						$count ++ ;
						endforeach;
						endif;

						?>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">

						<?php
						$cont = 0 ; if($my_slider) : foreach ($my_slider as $post) : setup_postdata( $post );
						?>
						<div class="item <?php if($cont == 0) echo "active"; ?>">
							<?php the_post_thumbnail( 'full' ); ?>
							<div class="carousel-caption">
								<h2><?php the_title(); ?></h2>
							</div>
						</div>
						<?php
						$cont ++ ;
						endforeach;
						endif;

						?>

					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<div id="servicos" class="servicos">
			<br>
			<br>
			<h2>Serviços</h2>
			<div class="container">
				<div class="row">
					<?php
					$args = array('post_type'=>'servicos', 'showposts' =>3);
					$my_servicos = get_posts( $args );
					if($my_servicos) : foreach ($my_servicos as $post) : setup_postdata( $post );
					?>

					<div class="col-md-4 col-lg-4">
						<i class="<?php the_field('icones'); ?>"></i>
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>

					<?php
					endforeach;
					endif;
					?>
				</div>
			</div>
		</div>
<!--div portfolio-->

<div id="portfolio" class="portfolio">
	<br>
	<br>
	<h2>Portfólio</h2>
	<div class="container">
		<div class="row">
			<?php 
			$args = array('post_type' => 'portfolio', 'show_posts' =>-1);
			$my_portfolio = get_posts($args);
			if($my_portfolio) : foreach($my_portfolio as $post) : setup_postdata( $post );

			?>
			<div class="col-md-4 col-lg-4">
				<figure class="thumb-box">
					<?php the_post_thumbnail ('full'); ?>
					<figcaption><span class="descricao"><?php the_title(); ?></span></figcaption>
				</figure>
			</div>	

			<?php
			endforeach; 
			endif; 
			?>	
		</div>
	</div>
</div>

<!-- div nosso time -->

<div class="time" id="time">
	<br>
	<br>
	<h2>Nosso time</h2>
	<div class="container">
		<div class="row">
			<?php 
			$args = array('post_type' => 'membro', 'show_posts' =>-1);	
			$my_membros = get_posts( $args ); 
			if($my_membros) : foreach($my_membros as $post) : setup_postdata( $post );

			?>
			<div class="col-md-4 col-lg-4">
				<div class="img-box">
					<?php the_post_thumbnail('full'); ?>
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
				</div>
			</div>
			<?php 
			endforeach;
			endif;
			?>	
		</div>
	</div>
</div>

<!-- Contato -->

<div class="contato" id="contato" 	>
<br>
<br>
	<h2>Contato</h2>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
					<?php echo FrmFormsController::get_form_shortcode(array('id' => 2, 'key' =>'', 'title' => false, 'descripttion' => false, 'readonly' => flase, 'entry_id' => false)); ?>
				</div>
			</div>
		</div>
	</div>





<script>
  jQuery.$(document).ready(function($) {
    $(".scroll").click(function(event) {
      envent.preventDefault();
      $('.contato').animate({scrollTop:$(this.hash).offset().top}, 100)
    });
    
  });
</script> 

<?php get_footer(); ?>
