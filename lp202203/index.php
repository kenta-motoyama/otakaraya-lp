<?php
/*
Template Name: おたからやLP
*/

get_header();
?>
<main class="otkr_content">
    <article>
        <?php 
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
            <h1><?php the_title(); ?></h1>
            <section>
            <?php the_content(); ?>
            </section>
        <?php 
            endwhile;
        endif;
        ?>
    </article>
</main>

<?php get_footer(); ?>
