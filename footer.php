</main>

    <?php
        if(has_nav_menu('footer-menu')) {
            wp_nav_menu(array('theme_location' => 'footer-menu'));
        }
    ?>

<footer>
    <p>&copy; Copyright <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>. All rights reserved. </a></p>
</footer>

<?php dynamic_sidebar('footer_sidebar'); ?>

<?php wp_footer(); ?>

</body>
</html>