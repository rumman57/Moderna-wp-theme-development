<?php 
             // *****Start Shortcode****** For COMPONENTS PAGE //

function components_button( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'type' => '',
        'link' => '',
        'name' => ''
    ), $atts );

  return '<a class="btn btn-'.$a['type'].'" href="'.$a['link'].'">'.$a['name'].'</a>';
}
add_shortcode( 'bttn', 'components_button' );

function components_button_with_icon( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'type' => '',
        'link' => '',
        'name' => '',
        'icon' => ''
    ), $atts );

  return '<a href="'.$a['link'].'" class="btn btn-'.$a['type'].'"><i class="fa fa-'.$a['icon'].'"></i>'.$a['name'].'</a>';
}
add_shortcode( 'bttn_with_icon', 'components_button_with_icon' );

function components_more_buttons( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'type' => '',
        'name' => ''
    ), $atts );

  return '<button class="btn btn-'.$a['type'].'">'.$a['name'].'</button>';
}
add_shortcode( 'bttn_more', 'components_more_buttons' );

function components_bttn_sizes( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'type' => '',
        'name' => '',
        'link'  =>''
    ), $atts );

  return '<a href="'.$a['link'].'" class="btn '.$a['type'].'">'.$a['name'].'</a>';
}
add_shortcode( 'bttn_sizes', 'components_bttn_sizes' );

function components_bttn_edges( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'type' => '',
        'name' => '',
        'link'  =>''
    ), $atts );

  return '<a class="btn '.$a['type'].'" href="'.$a['link'].'">'.$a['name'].'</a>';
}
add_shortcode( 'bttn_edges', 'components_bttn_edges' );

function components_alerts( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'type' => '',
        'desctl'  =>'',
        'descdesc'  =>''
    ), $atts );

  return '<div class="alert alert-'.$a['type'].'">
			<strong>'.$a['desctl'].'</strong>'.$a['descdesc'].'</div>';
}
add_shortcode( 'cmp_alerts', 'components_alerts' );

function components_progress_bar( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'maindivcls' => '',
        'ariavalue'  =>'',
        'widthpercent'  =>'',
        'title' => ''
    ), $atts );
           ob_start();
    ?>
    <div class="progress <?php echo $a['maindivcls']?>">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $a['ariavalue'];?>" aria-valuemin="0"   aria-valuemax="100" style="width: <?php echo $a['widthpercent'];?>;">
    <span class="sr-only"><?php echo $a['title']?></span>
   </div>
    </div>
 <?php
   return ob_get_clean();
}
add_shortcode( 'cmp_progressbar', 'components_progress_bar' );


            // *****End Shortcode****** For COMPONENTS PAGE // 

            // *****Start Shortcode****** For PRICING BOX PAGE // 


function pricing_main_heading( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'title' => 'Example on 3 columns'
    ), $atts );

  return '<div class="col-lg-12">
				<strong><h4>'.$a['title'].'</h4></strong>
			</div>';
}
add_shortcode( 'pric_heading_title', 'pricing_main_heading' );

function pricing_main_columns3( $atts, $content) {
    $a = shortcode_atts( array(
        'column_line_type' => '4',
        'heading1' =>'Very ',
        'heading2' =>'Basic',
        'heading_style' =>'',
        'pricing_terms'=>'$15.00 / Month',
        'price_action_link'=>'#',
        'price_action_type'=>'success',
        'price_action_name' =>'Register Now'

    ), $atts ); ob_start();?>

 <div class="col-lg-<?php echo $a['column_line_type'];?>">
		<div class="pricing-box-alt <?php echo $a['heading_style'];?>">
			<div class="pricing-heading">
				<h3><?php echo $a['heading1'];?> <strong><?php echo $a['heading2'];?></strong></h3>
			</div>
			<div class="pricing-terms">
				<h6><?php echo $a['pricing_terms'];?></h6>
			</div>
			<div class="pricing-content">

            <?php echo $content;?>
				<!--<ul>
					<li><i class="icon-ok"></i> 100 applications</li>
					<li><i class="icon-ok"></i> 24x7 support available</li>
					<li><i class="icon-ok"></i> No hidden fees</li>
					<li><i class="icon-ok"></i> Free 30-days trial</li>
					<li><i class="icon-ok"></i> Stop anytime easily</li>
				</ul>-->
			</div>
			<div class="pricing-action">
				<a href="<?php echo $a['price_action_link'];?>" class="btn btn-medium btn-<?php echo $a['price_action_type'];?>"><i class="icon-bolt"></i> <?php echo $a['price_action_name'];?></a>
			</div>
		</div>
	</div>
  
<?php return ob_get_clean(); }
add_shortcode( 'pric_column_3', 'pricing_main_columns3' );

?>