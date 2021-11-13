<?php
/*
Template Name: Links
*/
?>
<?php get_header(); ?>
<div class="post-list">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>
			<?php edit_post_link(__('Edit this entry.'), '<p>', '</p>'); ?>
			<div class="entry-content">
				<?php the_content(); ?>
                <?php wp_list_bookmarks('title_li=&category_before=&category_after='); ?>
				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'kubrick') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		</div>
		<?php comments_template(); ?>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>