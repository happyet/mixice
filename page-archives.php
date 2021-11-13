<?php
/*
Template Name: Archives
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
				<div style="display:flex">
					<div style="width:50%">
					<h2>页面存档</h2>
					<ul>
					<?php wp_list_pages(array('title_li' => '')); ?>
					</ul>
					</div>
					<div style="width:50%">
					<h2>分类存档</h2>
					<ul>
						<?php wp_list_categories(array('title_li' => '')); ?>
					</ul>
					</div>
				</div>
                <h2>月存档</h2>
				<ul class="blogroll">
				<?php wp_get_archives('type=monthly&show_post_count=true'); ?>
				</ul>
				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'kubrick') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		</div>
		<?php comments_template(); ?>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>