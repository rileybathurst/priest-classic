<?php
$format = get_post_format();
get_template_part( 'format', $format );
?>

<div class="small-12 medium-6 large-4 cekk text-center fall end fake-eq" data-equalizer-watch>


    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="img-100 img-100-high fall-background" ><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>

        <h3 class="drop category-title">
            <a href="<?php the_permalink(); ?>">
                <?php if ( get_post_meta( $post->ID, 'category-title', true) ) 
                    echo get_post_meta( $post->ID, 'category-title', true) ; 
                else 
                 the_title(); ?>
            </a>
        </h3>
    </div> <!-- id post -->

</div> <!-- data equilizer infinite -->