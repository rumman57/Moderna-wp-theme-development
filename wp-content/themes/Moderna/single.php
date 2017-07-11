<?php get_header(); ?>

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="<?php site_url();?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active"><?php the_title();?></li>
				</ul>
			</div>
		</div>
	</div>
	</section>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
			



<?php
if(have_posts())
{
	while (have_posts()) {
		the_post();?>
  
  <div class="post-image">
			<div class="post-heading">
    <h3><?php the_title();?></h3>
			</div>
			<?php 
			$pic=get_the_post_thumbnail();
			if($pic)
			the_post_thumbnail('blog_image');
			?>
		</div>
			 <?php the_content();?>
		<div class="bottom-article">
			<ul class="meta-post">
				<li><i class="icon-calendar"></i><?php echo get_the_date('F d,Y')?></li>
				<li><i class="icon-user"></i><a href="#"> <?php echo get_the_author();?></a></li>
				<?php the_tags('<li>','<i class="icon-folder-open"></i>','</li>') ?>							
			</ul>
		</div>



	<?php
    }
  }
else
{
	echo "no posts here";
}
wp_reset_postdata();

?>

</div>
 </div>
   </div>
     </section>






<?php get_footer();

?>