<?php get_header();?>
<section>
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
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
              <?php
               if(have_posts())
               {
               	 while(have_posts())
               	 {
               	 	the_post();?>
               	 	
                <h3><?php the_title();?></h3>
                <?php the_content();?>


               <?php }
               } else{
               	echo "No Posts here";
               }
               wp_reset_postdata();
              ?>
			</div>			
		</div>
	</div>
</section>
	<?php get_footer();?>