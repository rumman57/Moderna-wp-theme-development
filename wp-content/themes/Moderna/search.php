
<?php get_header();?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="<?php echo site_url();?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active"><?php bloginfo();?></li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
               <h2 style="text-align: center; color:crimson;">Your Search Result</h2>
            	<?php

             if(have_posts())
             {
             	while (have_posts()) {
             		the_post();?>

          <div class="post-image">
							<div class="post-heading">
			<h3><a href="<?php the_permalink(); ?>"><?php search_title_highlight();?></a></h3>
							</div>
							<?php 

							$pic=get_the_post_thumbnail();
							if($pic)?>
							<a href="<?php the_permalink();?>"> <?php the_post_thumbnail('blog_image'); ?></a>

							
						</div>
							 <?php the_excerpt();?>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><?php echo get_the_date('F d,Y')?></li>
								<li><i class="icon-user"></i><a href="#"> <?php echo get_the_author();?></a></li>
								<?php the_tags('<li>','<i class="icon-folder-open"></i>','</li>') ?>							
								<li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
							</ul>
						</div>

          <?php   	}

	  the_posts_pagination(array(
               'prev_text' =>"«",
               'next_text' => '»',
               'mid_size'  =>1
               ));

             }


             else{
             	echo "No posts here";
             }
             wp_reset_postdata();

  ?>
				
			</div>			
		</div>
	</div>
</section>
	<?php get_footer();?>