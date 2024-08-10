<?php
get_header();

?>
<main id="primary" class="site-main">

    <?php
    if ( have_posts() ) :

        if ( is_home() && ! is_front_page() ) :
            ?>
            <header>
                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </header>
        <?php
        endif;
        ?>
        <h2 class="page-section-heading text-center text-uppercase text-secondary my-5" id="news">Last News</h2>

        <div class="row">

            <?php

            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', get_post_type() );
            endwhile;
            ?>
        </div>
        <?php
        the_posts_navigation();

    else :

        get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>

</main>

get_sidebar();
get_footer();
