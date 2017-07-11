<?php get_header(); ?>
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->


        <div id="main-slider" class="flexslider">
            <ul class="slides">

 <?php
          $obj = new WP_Query(array(
           'post_type' => 'slider',
           'posts_per_page' =>-1,
           'order' => "ASC"
          ));
        if($obj->have_posts())
        {
           while($obj->have_posts())
           {
             $obj->the_post();
             $customcaptiontitle = get_post_meta(get_the_ID(),'_rumman_slidercptitle',true);
             $customcaptiondesc = get_post_meta(get_the_ID(),'_rumman_slidercpdesc',true);
             $customcaptionlntl = get_post_meta(get_the_ID(),'_rumman_slidercplnktle',true);
             $customcaptionlnln = get_post_meta(get_the_ID(),'_rumman_slidercplnklnk',true);?>

            <li>
                <?php the_post_thumbnail('slider_image'); ?>
                <div class="flex-caption">
                    <h3><?php echo $customcaptiontitle; ?></h3> 
					<p><?php echo $customcaptiondesc; ?></p> 
					<a href="<?php echo $customcaptionlnln; ?>" class="btn btn-theme"><?php echo $customcaptionlntl; ?></a>
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
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	
	

	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>Moderna</span> HTML Business Template</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					         
                   <!-- Business Part-->
						

        <?php 
        
          $obj1 = new WP_Query(array(
           'post_type' => 'Business_template',
           'posts_per_page' =>-1,
           'order' => "ASC"
          ));
        if($obj1->have_posts())
        {
           while($obj1->have_posts())
           {
             $obj1->the_post();
             $templatetitle = get_post_meta(get_the_ID(),'_rumman_templatetitle',true);
             $templateicon = get_post_meta(get_the_ID(),'_rumman_templateicon',true);
             $templatedesc = get_post_meta(get_the_ID(),'_rumman_templatedesc',true);
             $templatelinktitle = get_post_meta(get_the_ID(),'_rumman_templatelinktitle',true);
             $templatelinklink = get_post_meta(get_the_ID(),'_rumman_templatelinklink',true);

             ?>
             <div class="col-lg-3">
             <div class="box">
        <div class="box-gray aligncenter">
					<h4><?php echo $templatetitle; ?></h4>
					<div class="icon">
					<i class="fa <?php echo $templateicon; ?> fa-3x"></i>
					</div>
					<p>
					   <?php echo $templatedesc; ?>
					</p>
						
				</div>
				<div class="box-bottom">


					<a href="<?php if($templatelinklink=="")
                          the_permalink(); else
                          echo $templatelinklink; ?>"><?php echo $templatelinktitle; ?></a>


				</div>
				</div>
				</div>
                        
         <?php  }
        }
        else
               {
                 echo "No Slider Here";
               }
               wp_reset_postdata();

           ?>
				</div>
			</div>
		</div>
		
		<!-- Portfolio Projects -->

		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Recent Works</h4>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">


  <?php 
        
          $obj2 = new WP_Query(array(
           'post_type' => 'portfolio',
           'posts_per_page' =>4,
           'order' => "DESC"
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


					</ul>
					</section>
				</div>
			</div>
		</div>

	</div>
	</section>
<?php get_footer(); ?>