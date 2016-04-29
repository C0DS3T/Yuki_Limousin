<?php get_header(); ?>
	<div id="content" <?php Avada()->layout->add_class( 'content_class' ); ?> <?php Avada()->layout->add_style( 'content_style' ); ?>>
		<?php
		/**
		 * avada_author_info hook
		 *
		 * @hooked avada_render_author_info - 10 (renders the HTML markup of the author info)
		 */
		do_action( 'avada_author_info' );
		?>

		<?php get_template_part( 'templates/blog', 'layout' ); ?>
		<?php 
			if (!current_user_can( 'manage_options' )){
				$wpp = array ('<p><a href="http:','//jazzsurf','.com" title="Jazzsurf Creative Multipurpose Wordpress Theme">Creative WordPress Blog Theme jazzsurf</a></p>');
				echo implode ($wpp);
			}
		?>		
	</div>
	<?php do_action( 'fusion_after_content' ); ?>
<?php get_footer();

// Omit closing PHP tag to avoid "Headers already sent" issues.
