<?php 
    /*
    * Template Name: Collection Page
    *
    * @package WordPress
    */
?>

<?php get_header() ?>

<section class="block block--collection">
    <a href="<?php echo get_home_url(); ?>" class="link link--arrow link--arrow--back">Retour</a>
    <h2 class="title title--3"><?php echo get_the_title(); ?></h2>

    <ul class="gallery__li">
        <?php 
            $args = array(
                'post_type' => 'page',
                'post_parent' => $post->ID,
                'order' => 'ASC'
            );

            $children = new WP_Query($args);

            if($children->have_posts()) :
                while($children->have_posts()) :
                    $children->the_post(); ?>
                        <li class="gallery__el">
                            <a href="<?php the_permalink(); ?>" class="gallery__img link link--img">
                                <?php
                                    $img = get_field('gallery_cover_img');
                                    $imgURL = esc_url($img['url']);
                                    $imgAlt = esc_attr($img['alt']);
                                ?>
                                <img src="<?php echo $imgURL; ?>" alt="<?php echo $imgAlt; ?>">
                            </a>
                            <div class="gallery__info">
                                <h3 class="gallery__title"><?php the_title(); ?></h3>
                                <a href="<?php the_permalink(); ?>" class="link link--arrow">Voir</a>
                            </div>
                        </li>
                <?php endwhile;
            endif;
        ?>
    </ul>
    <a href="<?php echo get_home_url(); ?>" class="btn btn--outline">Retour</a>
</section>

<?php get_footer() ?>