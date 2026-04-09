<?php

get_header();
?>
    <div class="main-content">
    <?php
    while (have_posts()) {
        the_post();
        if ( !is_front_page() && !is_search() && !is_404() ) {
        ?>
            <div class="page-header">
                <div class="page-title"><?= get_the_title();?></div>
                <?php hajimi_breadcrumb();?>
            </div>
        <?php
        }
        the_content();
    }
    ?>
    </div>
<?php
get_footer();