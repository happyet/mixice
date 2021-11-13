<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<div class="post-list">
		<?php while (have_posts()) : the_post(); ?>
			<div class="post">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h1>
				<div class="entry-meta">
					<?php the_author() ?> &#183; <?php the_category(', ') ?>
				</div>
				<div class="entry-content">
					<?php 
						if(preg_match('/<!--more.*?-->/',$post->post_content)){
							the_content();
						}else{
							if( has_post_thumbnail() ){
								echo '<div class="thumb text-center"><a href="' . get_the_permalink() . '">';
									the_post_thumbnail();
								echo '</a></div>';
							}
							the_excerpt();
						} 
					?>
				</div>
				<div class="entry-footer">
					<?php the_time('Y-m-d(D) H:i') ?> &#183;
					浏览: <?php lmsim_theme_views(); ?> &#183; <?php comments_popup_link('评论: 0', '评论: 1', '评论: %', '', '评论已关闭'); ?>	
				</div>
			</div>
		<?php endwhile; ?>
		<div class="navigation">
			<?php the_posts_pagination(); ?>
		</div>
		</div>
	<?php else : ?>

		<h2 class="center"><?php _e('Not Found'); ?></h2>
		<p class="center"><?php _e('Sorry, but you are looking for something that isn&#8217;t here.'); ?></p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
	<?php endif; ?>
<?php get_footer(); ?>