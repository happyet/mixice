<div id="sidebar">
	<div class="sidebar-inner">
		<?php
		if(is_home()){
			$args = array(
				'orderby' => 'rand',
				'posts_per_page' => 5,
				'ignore_sticky_posts' => 1
			);
			query_posts($args);
			echo '<h5><span>随机文章</span></h5>';
			echo '<ul class="show-posts">';
			if(have_posts()){
				while (have_posts()) :  the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						<p><span class="post-time"><?php echo get_the_time('Y-m-d'); ?></span></p>	
					</li><?php
				endwhile;
			}
			echo '</ul>';
			wp_reset_query();
		}elseif(is_single()){ 
			the_post_navigation(
				array(
					'next_text' => '<p>下一篇</p>',
					'prev_text' => '<p>上一篇</p>',
				)
			);
			
			global $post;
			$post_date = $post->post_date;
			$month = gmdate("n",strtotime($post_date));
			$day = gmdate("d",strtotime($post_date));

			$args = array(
				'date_query' => array(array( 'month' => $month, 'day' => $day )),
				'orderby' => 'date',
				'post__not_in' => array($post->ID),
				'posts_per_page' => 5,
				'ignore_sticky_posts' => 1
			);
			query_posts($args);
			echo '<h5><span>往年今日</span></h5>';
			echo '<ul class="show-posts">';
			if(have_posts()){
				while (have_posts()) :  the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						<p><span class="post-time"><?php echo get_the_time('Y-m-d'); ?></span></p>	
					</li><?php
				endwhile;
			}else{
				echo '<li>当时啥都没写哦</li>';
			}
			echo '</ul>';
			wp_reset_query();

		}else{
			$args = array(
				'posts_per_page' => 5,
				'ignore_sticky_posts' => 1
			);
			query_posts($args);
			echo '<h5><span>最新文章</span></h5>';
			echo '<ul class="show-posts">';
			if(have_posts()){
				while (have_posts()) :  the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						<p><span class="post-time"><?php echo get_the_time('Y-m-d'); ?></span></p>	
					</li><?php
				endwhile;
			}
			echo '</ul>';
			wp_reset_query();
		}
		?>
		<div class="rc-comments">
			<h5><span>最新评论</span></h5>
			<?php
				$comments_args = array(
					'type' 				=> 'comment',
					'status'			=> 'approve',
					'post_status'		=> 'publish',
					'author__not_in' 	=> 1,
					'number'  			=> 5
				);
				$recent_comments = get_comments($comments_args);
				if($recent_comments){
					$recent_comments_cache = '<ul class="text-center">';
					foreach($recent_comments as $rc_comment):
						$recent_comments_cache .= '
						<li>
							<a title="' . $rc_comment->comment_author . ' 发表在《'.get_the_title($rc_comment->comment_post_ID).'》" href="'.get_comment_link($rc_comment->comment_ID).'">'.get_avatar($rc_comment->comment_author_email, 45).'</a>
						</li>';
					endforeach; 
					$recent_comments_cache .= '</ul>';
				}
				echo $recent_comments_cache;
			?>
		</div>
	</div>
</div>