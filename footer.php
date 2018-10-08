<?php
/*
Theme Name: pazan
Theme URI: https://wordpress.org/themes/pazan/
Author: Pazan Team
Author URI: https://wordpress.org/
Version: 1.9
*/
?>
<footer class="footer-main">
    <div class="row">
        <?php get_template_part('partials/footer', 'logo'); ?>
        <div class="row container-fluid">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-2">
                <label>
				    <?php _e('guide for you','pazan');?>
                </label>
                <?php
                wp_nav_menu( array(
	                'theme_location' => 'footer guides',
                    'menu' => 'guides'
                ) );
                ?>
            </div>
            <div class="col-sm-2">
                <label>
				    <?php _e('about us','pazan');?>
                </label>
	            <?php
	            wp_nav_menu( array(
		            'theme_location' => 'footer about us',
		            'menu' => 'about_us'

	            ) );
	            ?>
            </div>
            <div class="col-sm-5">
                <label>
				    <?php _e('category','pazan');?>
                </label>

	            <?php
	            wp_nav_menu( array(
		            'theme_location' => 'footer about us',
		            'menu' => 'categories'
	            ) );
	            ?>
            </div>
        </div>
    </div>
	<?php get_template_part('partials/footer', 'copyright'); ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>