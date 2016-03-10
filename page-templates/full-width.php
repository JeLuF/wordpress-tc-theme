<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage MH
 * @since 2016-03-04
 */
?>
<?php get_header(); ?>
<div class="mh-wrapper clearfix">
    <div id="main-content" class="mh-content" style="width:100%;"><?php
    	while (have_posts()) : the_post();
			mh_before_page_content();
			get_template_part('content', 'page');
			comments_template();
		endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>
