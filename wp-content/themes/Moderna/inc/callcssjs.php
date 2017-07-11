<?php
function getCssJs()
{
	wp_enqueue_style('bootstrap',get_template_directory_uri()."/css/bootstrap.min.css","null","v1.20",'all');
	wp_enqueue_style('isotopstyle',get_template_directory_uri()."/css/isotop.css","null","v1.20",'all');
	wp_enqueue_style('fancybox',get_template_directory_uri().'/css/fancybox/jquery.fancybox.css','null','v1.20','all');
	wp_enqueue_style('ovewrite',get_template_directory_uri().'/css/overwrite.css','null','v1.20','all');
	wp_enqueue_style('stylecss',get_template_directory_uri().'/css/style.css','null','v1.20','all');
	wp_enqueue_style('animate11',get_template_directory_uri().'/css/animate.css','null','v1.20','all');
	
	wp_enqueue_style('flexslider',get_template_directory_uri().'/css/flexslider.css','null','v1.20','all');
	wp_enqueue_style('skins',get_template_directory_uri().'/skins/default.css','null','v1.20','all');
	wp_enqueue_style('styel',get_stylesheet_uri());
	
	wp_enqueue_script('easing',get_template_directory_uri().'/js/jquery.easing.1.3.js',array('jquery'),'v1.23',true);

	wp_enqueue_script('bootstrapjs',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'v1.23',true);

	wp_enqueue_script('fancybox-rumu',get_template_directory_uri().'/js/jquery.fancybox.pack.js',array('jquery'),'v1.23',true);

	wp_enqueue_script('fancybox-media-rumman',get_template_directory_uri().'/js/jquery.fancybox-media.js',array('jquery'),'v1.23',true);

	wp_enqueue_script('bootstrapjs1-nishi',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'v1.23',true);

	wp_enqueue_script('google-code-prettify',get_template_directory_uri().'/js/google-code-prettify/prettify.js',array('jquery'),'v1.23',true);

	wp_enqueue_script('portfolio-has',get_template_directory_uri().'/js/portfolio/jquery.quicksand.js',array('jquery'),'v1.23',true);

	wp_enqueue_script('portfolio1-sa',get_template_directory_uri().'/js/portfolio/setting.js',array('jquery'),'v1.23',true);

	wp_enqueue_script('flexslider-yes',get_template_directory_uri().'/js/jquery.flexslider.js',array('jquery'),'v1.23',true);

	wp_enqueue_script('animate',get_template_directory_uri().'/js/animate.js',array('jquery'),'v1.23',true);

	wp_enqueue_script('custom',get_template_directory_uri().'/js/custom.js',array('jquery'),'v1.23',true);
	wp_enqueue_script('new',get_template_directory_uri().'/js/new.js',array('jquery'),'v1.23',false);
	wp_enqueue_script('isotop',get_template_directory_uri().'/js/isotop.js',array('jquery'),'v1.23',true);
	wp_enqueue_script('isotopfunction',get_template_directory_uri().'/js/functionisotopo.js',array('jquery'),'v1.23',true);
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts','getCssJs');



         // Na  dileu hbe
/*function getBelowFooter()
{ ?>

<script src="<?php echo get_template_directory_uri();?>/js/functionisotopo.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/isotop.js"></script>
  
<?php
}
add_action('wp_footer','getBelowFooter',30);*/


?>