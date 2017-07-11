<?php get_header();?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="<?php echo site_url();?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Home</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<article>


				<?php

             if(have_posts())
             {
             	while (have_posts()) {
             		the_post();?>

          <div class="post-image">
							<div class="post-heading">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
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
								
							</ul>
						</div>

          <?php   	}
      
      the_posts_pagination(array(
               'prev_text' =>"«",
               'next_text' => '»',
               'mid_size'  =>1

            ));




             }else{
             	echo "No posts here";
             }
             wp_reset_postdata();

				?>
						<!--<div class="post-image">
							<div class="post-heading">
								< <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
							</div>
							<?php the_post_thumbnail();?>
						</div>
						<p>
							 <?php the_excerpt();?>
						</p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
								<li><i class="icon-user"></i><a href="#"> Admin</a></li>
								<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
								<li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
							</ul>
							<a href="#" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
						</div>-->
				</article>
				<!-- <article>
						<div class="post-slider">
							<div class="post-heading">
								<h3><a href="#">This is an example of slider post format</a></h3>
							</div>
							<!-- start flexslider 
							<div id="post-slider" class="flexslider">
								<ul class="slides">
									<li>
									<img src="img/dummies/blog/img1.jpg" alt="" />
									</li>
									<li>
									<img src="img/dummies/blog/img2.jpg" alt="" />
									</li>
									<li>
									<img src="img/dummies/blog/img3.jpg" alt="" />
									</li>
								</ul>
							</div
							<!-- end flexslider 
						</div>
						<p>
							 Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed.
						</p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
								<li><i class="icon-user"></i><a href="#"> Admin</a></li>
								<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
								<li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
							</ul>
							<a href="#" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
						</div>
				</article>
				<article>
						<div class="post-quote">
							<div class="post-heading">
								<h3><a href="#">Nice example of quote post format below</a></h3>
							</div>
							<blockquote>
								<i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, ei quod constituto qui. Summo labores expetendis ad quo, lorem luptatum et vis. No qui vidisse signiferumque...
							</blockquote>
						</div>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
								<li><i class="icon-user"></i><a href="#"> Admin</a></li>
								<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
								<li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
							</ul>
							<a href="#" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
						</div>
				</article>
				<article>
						<div class="post-video">
							<div class="post-heading">
								<h3><a href="#">Amazing video post format here</a></h3>
							</div>
							<div class="video-container">
								<iframe src="http://player.vimeo.com/video/30585464?title=0&amp;byline=0">
								</iframe>
							</div>
						</div>
						<p>
							 Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei.
						</p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
								<li><i class="icon-user"></i><a href="#"> Admin</a></li>
								<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
								<li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
							</ul>
							<a href="#" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
						</div>
				</article>-->
				<!--<div id="pagination">
					<span class="all">Page 1 of 3</span>
					<span class="current">1</span>
					<a href="#" class="inactive">2</a>
					<a href="#" class="inactive">3</a>
				</div>-->
			</div>
			<div class="col-lg-4">
				<aside class="right-sidebar">

            <?php if(!dynamic_sidebar('blogsidebar')) : ?>



				<!--<div class="widget">
					<form class="form-search">
						<input class="form-control" type="text" placeholder="Search..">
					</form>
				</div>



				<div class="widget">
					<h5 class="widgetheading">Categories</h5>
					<ul class="cat">
						<li><i class="icon-angle-right"></i><a href="#">Web design</a><span> (20)</span></li>
						<li><i class="icon-angle-right"></i><a href="#">Online business</a><span> (11)</span></li>
						<li><i class="icon-angle-right"></i><a href="#">Marketing strategy</a><span> (9)</span></li>
						<li><i class="icon-angle-right"></i><a href="#">Technology</a><span> (12)</span></li>
						<li><i class="icon-angle-right"></i><a href="#">About finance</a><span> (18)</span></li>
					</ul>
				</div>




				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="recent">
						<li>
						<img src="img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
						<h6><a href="#">Lorem ipsum dolor sit</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
						<li>
						<a href="#"><img src="img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" /></a>
						<h6><a href="#">Maiorum ponderum eum</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
						<li>
						<a href="#"><img src="img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" /></a>
						<h6><a href="#">Et mei iusto dolorum</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
					</ul>
				</div>



				<div class="widget">
					<h5 class="widgetheading">Popular tags</h5>
					<ul class="tags">
						<li><a href="#">Web design</a></li>
						<li><a href="#">Trends</a></li>
						<li><a href="#">Technology</a></li>
						<li><a href="#">Internet</a></li>
						<li><a href="#">Tutorial</a></li>
						<li><a href="#">Development</a></li>
					</ul>
				</div>-->

              <?php endif ?>

				</aside>
			</div>
		</div>
	</div>
	</section>
	<?php get_footer();?>