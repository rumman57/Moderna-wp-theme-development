
<?php get_header();?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="<?php echo site_url();?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active"><?php the_title();?></li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="map">
	<?php 
   if ( function_exists( 'ot_get_option' ) ) {
	  $maps = ot_get_option( 'maps' );
	  $contactheading = ot_get_option( 'formtitle' );
	}
	?>

		<?php echo $maps;?>


	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4><?php echo $contactheading; ?></strong></h4>

  <?php echo do_shortcode('[contact-form-7 id="372" title="Moderna_contact"]'); ?>




			</div>
		</div>
	</div>
	</section>
	<?php get_footer()?>