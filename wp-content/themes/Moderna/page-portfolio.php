<?php
 get_header();
?>

	<!-- end header -->
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
			<div class="col-lg-12">
       

        <div id="filters" class="button-group">  
	  <button class="button is-checked" data-filter="*">All</button>
	  <button class="button" data-filter=".web">Web Design</button>
	  <button class="button" data-filter=".icons">Icons</button>
	  <button class="button" data-filter=".graphics">Graphic Design</button>
	   </div>

				<div class="clearfix">
				</div>
               


				<div class="row">

 

					<section id="projects">
					<ul id="thumbs" class="portfolio">

           <div class="grid">
  <div class="element-item ">



 </div>

 <div class="element-item  graphics" >
    
<?php

    $obj2 = new WP_Query(array(
           'post_type' => 'portfolio',
           'posts_per_page' =>-1,
          'tax_query' => array(
		array(
			'taxonomy' => 'portfolio',
			'field'    => 'slug',
			'terms'    => 'graphic-design'
		))
          ));
        if($obj2->have_posts())
        {
           while($obj2->have_posts())
           {
             $obj2->the_post();
        $zoomtitle = get_post_meta(get_the_ID(),'_rumman_zoomtitle',true);
         $portfolio_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');


             ?>
            <!-- Item Project and Filter Name -->
      <li class="col-lg-3 design" data-id="id-0" data-type="web">
      <div class="item-thumbs">
      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $zoomtitle;?>" href="<?php echo $portfolio_image[0]; ?>">
      <span class="overlay-img"></span>
      <span class="overlay-img-thumb font-icon-plus"></span>
      </a>
      <!-- Thumb Image and Description -->
       <?php the_post_thumbnail('portfolio_image') ;?>
      </div>
      </li>

                         
         <?php  }
        }
        else
               {
                 echo "No Slider Here";
               }
               wp_reset_postdata();

           ?>
  </div>
   <div class="element-item  web" >
    
<?php
    $test = new WP_Query(array(
           'post_type' => 'portfolio',
           'posts_per_page' =>-1,
            'tax_query' => array(
		array(
			'taxonomy' => 'portfolio',
			'field'    => 'slug',
			'terms'    => 'web-design'
		))
          ));
        if($test->have_posts())
        {
           while($test->have_posts())
           {
             $test->the_post();
        $zoomtitle = get_post_meta(get_the_ID(),'_rumman_zoomtitle',true);
         $portfolio_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');


             ?>
            <!-- Item Project and Filter Name -->
      <li class="col-lg-3 design" data-id="id-0" data-type="web">
      <div class="item-thumbs">
      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $zoomtitle;?>" href="<?php echo $portfolio_image[0]; ?>">
      <span class="overlay-img"></span>
      <span class="overlay-img-thumb font-icon-plus"></span>
      </a>
      <!-- Thumb Image and Description -->
       <?php the_post_thumbnail('portfolio_image') ;?>
      </div>
      </li>

                         
         <?php  }
        }
        else
               {
                 echo "No Slider Here";
               }
               wp_reset_postdata();

           ?>
  </div>
  <div class="element-item  icons" >
    
<?php
    $test = new WP_Query(array(
           'post_type' => 'portfolio',
           'posts_per_page' =>-1,
           'tax_query' => array(
		array(
			'taxonomy' => 'portfolio',
			'field'    => 'slug',
			'terms'    => 'icon'
		))
          ));
        if($test->have_posts())
        {
           while($test->have_posts())
           {
             $test->the_post();
        $zoomtitle = get_post_meta(get_the_ID(),'_rumman_zoomtitle',true);
         $portfolio_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');


             ?>
            <!-- Item Project and Filter Name -->
      <li class="col-lg-3 design" data-id="id-0" data-type="web">
      <div class="item-thumbs">
      <!-- Fancybox - Gallery Enabled - Title - Full Image -->
      <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $zoomtitle;?>" href="<?php echo $portfolio_image[0]; ?>">
      <span class="overlay-img"></span>
      <span class="overlay-img-thumb font-icon-plus"></span>
      </a>
      <!-- Thumb Image and Description -->
       <?php the_post_thumbnail('portfolio_image') ;?>
      </div>
      </li>

                         
         <?php  }
        }
        else
               {
                 echo "No Slider Here";
               }
               wp_reset_postdata();

           ?>
  </div>
  </div><!-- grid-->


					</ul>
					</section>


				</div>
			</div>
		</div>
	</div>
	</section>
	<?php get_footer();?>