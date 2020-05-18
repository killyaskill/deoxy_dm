<?php if( have_posts() ): while( have_posts() ): the_post();?>
<?php the_content();?>
<br>
<br>
<span class="page_CenterBoxTitle"><span class="title">About</span></span>
<br>
<p style="text-align: center;"><?php echo get_the_date('l jS F, Y');?></p>




	<?php 
	$fname = get_the_author_meta('first_name');
	$lname = get_the_author_meta('last_name');
	?>

<p style="text-align: center;">Posted by <?php echo $fname;?> <?php echo $lname;?></p>


	<?php
	$tags = get_the_tags();
	if($tags):
	foreach($tags as $tag):?>

			<a style="text-align: center;" href="<?php echo get_tag_link($tag->term_id);?>" class="badge badge-success">
				<?php echo $tag->name;?>
			</a>

	<?php endforeach; endif;?>




	

	<?php 
	$categories = get_the_category();
	foreach($categories as $cat):?>
		
			<a style="text-align: center;" href="<?php echo get_category_link($cat->term_id);?>">
				<?php echo $cat->name;?>
			</a>


	<?php endforeach;?>







	<?php // comments_template();?>




<?php endwhile; else: endif;?>

