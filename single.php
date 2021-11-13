<?php get_header(); ?>
<div class="post-list">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
			<h1><?php the_title(); ?></h1>
			<div class="entry-meta single-meta">
				<?php the_author() ?> &#183; <?php the_time('Y-m-d(D) H:i') ?> &#183; 浏览: <?php lmsim_theme_views(); ?> &#183; <?php comments_popup_link('评论: 0', '评论: 1', '评论: %', '', '评论已关闭'); ?> <?php edit_post_link(__(' &#183; Edit'), ''); ?>
			</div>
			<div class="entry-content">
				<?php the_content('<p class="serif">' . __('Read the rest of this entry &raquo;') . '</p>'); ?>
			</div>
			<div class="entry-footer">
				<?php the_category(', ') ?> <?php the_tags( ' &#183;  ', ', ', ' '); ?> 
			</div>
		</div>

		<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>
	</div>
<?php get_footer(); ?>
