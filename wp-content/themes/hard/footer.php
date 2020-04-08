<footer>
    <div class="maxwidth center">
        <img class="logo" src="<?php echo bloginfo('template_url') . '/img/logos/hard-white.svg'; ?>">
        
        <div class="footer-text">
            <?php the_field('footer_text', 'option'); ?>
        </div>

        <?php 
        if( function_exists( 'mc4wp_show_form' ) ) {
            mc4wp_show_form(116);
        }
        ?>
    
        <a href="http://wildsea.nl/?from=HARD" target="blank">
            <img class="wildsea creator sponsor" src="<?php echo bloginfo('template_url') . '/img/wildsea.png'; ?>">
        </a>

    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>