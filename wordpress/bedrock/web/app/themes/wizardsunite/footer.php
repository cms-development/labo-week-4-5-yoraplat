
<footer class="footer-wrapper">
    <div class="container footer_container">
        <div class="row">
                <div class="col-12 col-md-6"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("widget_1_footer") ) : ?>
<?php endif;?>
</div>
                <div class="col-12 col-md-6"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("widget_2_footer") ) : ?>
<?php endif;?>
</div>
    </div>
</footer>
<?php wp_footer(); ?>

