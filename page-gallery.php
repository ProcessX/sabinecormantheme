<?php 
    /*
    * Template Name: Gallery Page
    *
    * @package WordPress
    */
?>

<?php get_header() ?>

<section class="block block--galleryInfo">
    <?php
        if($post->post_parent):
            $parentURL = get_permalink( $post->post_parent );
            $parentTitle = get_the_title( $post->post_parent );?>
            <a href="<?php echo $parentURL; ?>" class="link link--arrow link--arrow--back">Retour</a>
        <?php endif;
    ?>
    <h2 class="title title--2"><?php the_title(); ?></h2>
    <div class="gallery__description">
        <?php the_content(); ?>
    </div>
    <?php
        $img = get_field('gallery_cover_img');
        $imgURL = esc_url($img['url']);
        $imgAlt = esc_attr($img['alt']);
    ?>
    <img src="<?php echo $imgURL; ?>" alt="<?php echo $imgAlt; ?>">
</section>


<section class="block block--gallery">
    <ul class="artwork__li">

        <?php
            /**
             * TODO : display list of posts using taxonomy and type
             */

            $artworkTaxonomy = get_field('gallery_label');

            $args = array(
                'post_type' => 'artwork',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'gallery',
                        'field' => $artworkTaxonomy->slug,
                        'terms' => $artworkTaxonomy->term_id,
                    )
                ),
                'order' => 'ASC',
            );

            $artworks = new WP_Query($args);
            if($artworks->have_posts()):
                $artworkCounter = 3;
                $artworkSpecial = 5;
                while($artworks->have_posts()) : $artworks->the_post();?>
                    <?php $artworkSide = '';
                    if($artworkCounter == $artworkSpecial){
                        $artworkSide = 'artwork__el--big';
                        $artworkCounter = 0;
                    }
                    elseif ($artworkCounter % 2 == 0){
                        $artworkSide = 'artwork__el--right';
                    }?>
                    <li class="artwork__el <?php echo $artworkSide; ?>">
                        <a href="" class="link link--img">
                            <?php
                                $artworkImg = get_field('artwork_img');
                                $artworkImgURL = esc_url($artworkImg['url']);
                                $artworkImgAlt = esc_attr($artworkImg['alt']);
                            ?>
                            <img src="<?php echo $artworkImgURL; ?>" alt="<?php echo $artworkImgAlt; ?>">
                        </a>
                        <div class="artwork__info">
                            <h3 class="artwork__title"><?php the_title(); ?></h3>
                            <?php if(get_field('artwork_price')): ?>
                                <p class="artwork__price"><?php echo get_field('artwork_price').'€'; ?></p>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php $artworkCounter += 1;
                endwhile;
            endif;
            wp_reset_query();
            wp_reset_postdata(); 
        ?>
    </ul>

    <nav class="gallery__nav">
        <?php
            if($post->post_parent):?>
                <a href="<?php echo $parentURL; ?>" class="btn btn--gallery btn--gallery--back"><?php echo $parentTitle; ?></a>
            <?php endif;
        ?>
        <?php 
            $siblings = get_pages('parent=' .$post->post_parent);
            foreach ($siblings as $key=>$sibling){
                if ($post->ID == $sibling->ID){
                    $ID = $key;
                }
            }
            $nextSibling = array(
                'url'=>get_permalink($siblings[$ID+1]->ID),
                'title'=>get_the_title($siblings[$ID+1]->ID)
            );
            wp_reset_postdata(); 
        ?>
        <a href="<?php echo $nextSibling['url']; ?>" class="btn btn--gallery btn--gallery--next"><?php echo $nextSibling['title']; ?></a>
    </nav>
</section>

<?php get_footer() ?>