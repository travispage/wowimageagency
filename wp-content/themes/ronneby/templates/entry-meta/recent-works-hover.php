<?php 
	$thumb = get_post_thumbnail_id();
	$img_url = wp_get_attachment_url($thumb, 'full'); //get img URL
?>

<div class="hover-link">
	
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	
	<a data-rel="prettyPhoto[post-<?php the_ID(); ?>]" class="zoom-post" href="<?php echo esc_url($img_url); ?>">
		<?php _e('zoom', 'dfd'); ?>
	</a>
	<a class="open-post" href="<?php the_permalink(); ?>">
		<?php _e('view', 'dfd'); ?>
	</a>
</div>
