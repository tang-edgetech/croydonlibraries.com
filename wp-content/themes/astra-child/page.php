<?php

get_header();
?>
    <div class="main-content">
    <?php
    while (have_posts()) {
        the_post();
        if ( !is_front_page() || !is_search() || !is_404() ) {
            $first_model = ['join-the-library', 'find-your-library', 'online-library', 'news-events'];
            $current_slug = get_post_field('post_name', get_post());
            if (in_array($current_slug, $first_model)) {
            ?>
            <div class="hajimi-container">
                <div class="hajimi-page-header">
                    <div class="hajimi-page-title"><?= get_the_title();?></div>
                </div>
                <?php hajimi_breadcrumb();?>
            </div>
        <?php
            }
        }
        the_content();
    }
    ?>
    </div>
<?php
get_footer();