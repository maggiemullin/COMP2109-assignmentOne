<?php 
/**
 * Template Name: Custom Post Template No Custom Fields
 * Template Post Type: post
 */
get_header();
?>
 <main class="p-main">
     <section class="outline">
         <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
         <div class="wrapper">
             <?php the_post_thumbnail(); ?>
            <div>
                <h2><?php the_title(); ?></h2>
                <?php
                    the_content();
                    the_category();
                    endwhile;
                    else: 
                ?>
                <p> No Post Today!</p>
                <?php endif; ?>
            </div>
         </div>
     </section>
</main>
<?php get_footer(); ?>