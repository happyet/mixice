<!DOCTYPE html>
<html dir="ltr" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content ="initial-scale=1.0,user-scalable=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="head">
	<div id="blogLogo">
		<a href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a>
		<p><?php bloginfo('description'); ?></p>
	</div>
	<?php 
		if(has_nav_menu('topbar')){
			wp_nav_menu( array(
				'menu'              => '',
				'theme_location'    => 'topbar',
				'depth'             => 0,
				'container'         => '',
				'container_class'   => '',
				'fallback_cb'     	=> false,
				'menu_class'        => 'nav navbar-nav',
				'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
			)  );
		}
	?>
</div>
<div id="contain">
	<div id="containbg">
		<div id="announce">
			<p><svg class="icon" style="width: 1em;height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;margin-right:5px" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1850"><path d="M853.333333 202.666667H544V106.666667c0-17.066667-14.933333-32-32-32s-32 14.933333-32 32v96H170.666667c-40.533333 0-74.666667 34.133333-74.666667 74.666666v384c0 40.533333 34.133333 74.666667 74.666667 74.666667h187.733333l-87.466667 151.466667c-8.533333 14.933333-4.266667 34.133333 10.666667 42.666666 4.266667 2.133333 10.666667 4.266667 14.933333 4.266667 10.666667 0 21.333333-6.4 27.733334-17.066667l106.666666-183.466666h157.866667l106.666667 183.466666c6.4 10.666667 17.066667 17.066667 27.733333 17.066667 6.4 0 10.666667-2.133333 14.933333-4.266667 14.933333-8.533333 21.333333-27.733333 10.666667-42.666666L661.333333 736h192c40.533333 0 74.666667-34.133333 74.666667-74.666667V277.333333c0-40.533333-34.133333-74.666667-74.666667-74.666666z m10.666667 458.666666c0 6.4-4.266667 10.666667-10.666667 10.666667H170.666667c-6.4 0-10.666667-4.266667-10.666667-10.666667V277.333333c0-6.4 4.266667-10.666667 10.666667-10.666666h682.666666c6.4 0 10.666667 4.266667 10.666667 10.666666v384zM682.666667 501.333333H341.333333c-17.066667 0-32 14.933333-32 32s14.933333 32 32 32h341.333334c17.066667 0 32-14.933333 32-32s-14.933333-32-32-32zM682.666667 373.333333H341.333333c-17.066667 0-32 14.933333-32 32s14.933333 32 32 32h341.333334c17.066667 0 32-14.933333 32-32s-14.933333-32-32-32z" p-id="1851"></path></svg>
			<?php echo get_the_author_meta('description',1); ?></p>
		</div>
		<div id="maincontent">