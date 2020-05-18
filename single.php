<?php get_header();?>

<section class="page-wrap">
<div class="container">
<div id="main" class="page_CenterBox page_CenterBox_AutomatedFadeIn" style="-webkit-animation-delay: .15s; -moz-animation-delay: .15s; -o-animation-delay: .15s; animation-delay: .15s;">
      <div>
        <p align="center">
		  <span class="page_CenterBoxTitle"><span class="title" style="color: hsl(149, 89%, 53%); text-transform: uppercase;"><?php the_title();?></span></span>
		  <br>
		  <?php wp_link_pages();?>

<?php get_template_part('includes/section','blogcontent');?>	
		  
			<br>
			<span class="page_CenterBoxTitle"><span class="title">Featured Image</span></span>
			<br>
			<?php if(has_post_thumbnail()):?>

<img style="text-align: center;" src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?> image" class="img-fluid mb-3 img-thumbnail">

<?php endif;?>
<br>
        </p>
      </div>
    </div>
	<div class="page_CenterBox page_CenterBox_AutomatedFadeIn" style="-webkit-animation-delay: .15s; -moz-animation-delay: .15s; -o-animation-delay: .15s; animation-delay: .15s;">
      <div>
	  
        <p align="center">
		  <span class="page_CenterBoxTitle"><span class="title" style="color: hsl(149, 89%, 53%); text-transform: uppercase;">Comments</span></span>
		  <br>
		  <?php comments_template(); ?>
		  </p>
      </div>
    </div>
			


			


</div>
</section>


<?php get_footer();?>