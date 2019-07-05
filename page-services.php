<?php get_header(); ?>

<!-- Start the main container -->
<main class="container" role="document"> <!-- needs fix. two main in the first few lines nested -->

<?php if (have_posts()) :
  while (have_posts()) : the_post(); ?>

    <main class="grid-container gp2-top gp3-bottom">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="grid-x grid-padding-x">
          <?php
        $services = get_page_by_title('Services');
        $services_id = $services->ID;

        $the_query = new WP_Query( array (
          'post_type' => 'page',
          'post_parent' => $services_id,
          'orderby' => 'menu_order',
          'order' => 'ASC'
        ) );
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
            $the_query->the_post();

            $remove = array(
              "&#8208;", // hypen
              "&#8209;", // non-breaking hypen
              "&#8210;", // figure dash
              "&#8211;", // en dash
              "&#8212;", // em dash
              "&#8213;", // horizontal bar
              "christchurch",
              "Christchurch",
              "CHRISTCHURCH"
            );
            $short_title = str_replace ( $remove, "", get_the_title()); ?>

            <div class="grid-x grid-padding-x gm-tb">
              <div class="small-12 large-6 cell gp-tb-large">
                <div class="service-grid shadow img-100">
                  <?php the_post_thumbnail('medium_large'); ?> <!-- 768 accross -->
                </div>
              </div>
              <div class="small-12 large-6 cell gp-tb-large">
                <div class="bg-light-gray shadow">
                  <h4 class="service-grid-bg no-margin-bottom gp-4"><a href="<?php the_permalink(); ?>" class="inline-block-100w"><?php echo $short_title; ?></a></h4>
                  <div class="gp-4 no-margin-bottom">
                    <?php the_excerpt(); ?>
                  </div>
                  <a href="<?php the_permalink(); ?>" class="gm-4 button hollow">More about <?php echo $short_title; ?></a>
                </div>
              </div>
            </div>

          <?php }
        }
        wp_reset_query(); // Restore global post data ?>
        </div><!-- grid-x -->
      </article>
    </main> <!-- .grid-container -->
  <?php endwhile; // while have posts -->

  else : ?>
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="cell">
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
            <p>How about head back to the <a href="/" title="home">home page</a> and start again</p>
          </div><!--.entry-->
        </div>
      </div>
    </div>

  <?php endif; ?> <!-- if have posts -->
</main> <!--.container -->
<?php get_footer(); ?>
