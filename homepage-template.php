<?php
  /**
  * Template Name: Home Version Two Page Template
  * @version 1.0
  * Description: This template will use the plugin Advanced Custom Fields
  */
  // the below php hook is used to call the header template
  get_header();
?>
  <!-- this is the part of the document that will handle the content of the webpage -->
  <main>
    <section class="masthead">
    <div class="image" style="background-image: url(<?php the_field('masthead_image'); ?>);">
      <div>
        <h1 class="title"><?php the_field('masthead_title'); ?></h1>
      </div>
      </div>
    </section>
   
    <section class="row-one">
      <article>
        <img src="<?php the_field('image_one'); ?>" alt="image one">
      </article>
      <article>
        <img src="<?php the_field('image_two'); ?>" alt="image two">
      </article>
      <article>
        <img src="<?php the_field('image_three'); ?>" alt="image three">
      </article>
    </section>
    <section class="row-two">
      <article>
        <h2><?php the_field('title_1'); ?></h2>
        <p><?php the_field('text_1'); ?></p>
      </article>
      <article>
        <img src="<?php the_field('image_four'); ?>" alt="image four">
      </article>
      <article>
        <h2><?php the_field('title_2'); ?></h2>
        <p><?php the_field('text_2'); ?></p>
      </article>
    </section>
 
       <!-- display the post category -->
       <section class="b-post">
      <?php
           $banksc = array(
               'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'Shred the art', 'Dismaland', 'In the Streets'
        );
        $banksc_posts = new WP_Query($banksc);
        if( $banksc_posts->have_posts()) :
          while( $banksc_posts->have_posts()) :
          $banksc_posts->the_post();
        ?>
        <article class="ba-post">
            <?php
              if (has_post_thumbnail()) :
                the_post_thumbnail();
              endif;
            ?>
            <header class="b-title">
                <h4><?php the_title(); ?></h4>
            </header>
            <div>
                <?php the_category(); ?>
                <?php the_excerpt(10); ?>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </div>
        </article>
        <?php
        endwhile;
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>