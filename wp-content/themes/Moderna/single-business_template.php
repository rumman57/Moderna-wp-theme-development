<?php get_header();?>

 <div class="container">
   <div class="row">
     <div class="col-lg-12">
 <?php 
        
        if(have_posts())
        {
           while(have_posts())
           {
             the_post();
             $templatetitle = get_post_meta(get_the_ID(),'_rumman_templatetitle',true);
             $templateicon = get_post_meta(get_the_ID(),'_rumman_templateicon',true);
             $templatedesc = get_post_meta(get_the_ID(),'_rumman_templatedesc',true);
             ?>
             <div class="col-lg-12">
             <div class="box">
        <div class="box-gray aligncenter">
					<h2><?php echo $templatetitle; ?></h2>
					<h4>
					   <?php echo $templatedesc; ?>
					</h4>
          <?php    the_content();?>

						
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

<?php get_footer();?>