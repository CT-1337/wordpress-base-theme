<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 *
 */

?>
<footer>
	<div class="container">

		<div class="row">

			<?php if (is_active_sidebar('footer-column') ):?>

			<div class="col-12 column">
				<div class="container" id="footer">
					<?php dynamic_sidebar('footer-column');?>
				</div>
			</div>

			<?php endif;?>

			<div class="col-12 column nav-container-flex">

				<?php
                	if ( has_nav_menu('footer') ) {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer',
                                'depth' => 1,
                                'container'       => 'nav',
                                'container_class' => '',
                                'menu_class'      => 'footer-menu',
                            )
                        );
                	}
                ?>

			</div>

			<div class="col-12 column">
				<small class="copyright">&copy; Copyright <?php echo date('Y');?></small>
			</div>

		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

