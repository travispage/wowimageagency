<?php
$id = get_the_ID();
$tags = wp_get_object_terms($id, 'my-product_tags');
if(!empty($tags)) { ?>
	<div class="post-tags">
		<ul>
			<?php foreach($tags as $tag) : ?>
				<li class="post-tags-item">
					<a href="<?php echo esc_url(get_term_link($tag->slug, 'my-product_tags')); ?>"><?php echo $tag->name; ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
<?php }