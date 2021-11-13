	<?php get_sidebar();?>
	</div> 
  </div>
</div>
<div id="footer">
	<p>
		&copy; Copyright <?php the_date('Y'); ?> | <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a> | All Rights Reserved<br />
		Power by <a href="//wordpress.org/" target="_blank">WordPress</a> | Theme by <a href="//lms.im" title="不亦乐乎">LMS</a> | <a href="<?php echo admin_url(); ?>">Login</a>
	</p>
	<div class="backTop"><a href="#head">顶部</a></div>
</div>
<?php wp_footer(); ?>
</body>
</html>