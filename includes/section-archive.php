<?php if( have_posts() ): while( have_posts() ): the_post();?>
	



                        
<div class="blog" style="background-color: #0ccf6a;">
<a href="<?php the_permalink();?>">
<div class="background"><?php if(has_post_thumbnail()):?><img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?> image"><?php endif;?></div>
<div class="name"><?php the_title();?></div>
</a>
</div>



<?php endwhile; else: endif;?>

