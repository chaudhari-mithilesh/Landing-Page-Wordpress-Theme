<?php
if (!is_active_sidebar('footer-address')) {
    return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">

    <?php dynamic_sidebar('footer-address'); ?>

</aside>