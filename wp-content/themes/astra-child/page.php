<?php

global $elementor_mode;
get_header();
?>
    <div class="main-content">
    <?php
    while (have_posts()) {
        the_post();
        the_content();
    }
    ?>
    </div>
<?php
get_footer();