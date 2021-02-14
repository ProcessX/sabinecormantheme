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
        <li class="artwork__el">
            <a href="" class="link link--img">
                <img src="asset/img/placeholder-painting.jpg" alt="placeholder-painting">
            </a>
            <div class="artwork__info">
                <h3 class="artwork__title">Title</h3>
                <p class="artwork__price">Prix</p>
            </div>
        </li>
        <li class="artwork__el artwork__el--right">
            <img src="asset/img/placeholder-painting.jpg" alt="placeholder-painting">
            <div class="artwork__info">
                <h3 class="artwork__title">Title</h3>
                <p class="artwork__price">Prix</p>
            </div>
        </li>
        <li class="artwork__el">
            <img src="asset/img/placeholder-painting.jpg" alt="placeholder-painting">
            <div class="artwork__info">
                <h3 class="artwork__title">Title</h3>
                <p class="artwork__price">Prix</p>
            </div>
        </li>
        <li class="artwork__el artwork__el--right">
            <img src="asset/img/placeholder-painting.jpg" alt="placeholder-painting">
            <div class="artwork__info">
                <h3 class="artwork__title">Title</h3>
                <p class="artwork__price">Prix</p>
            </div>
        </li>
        <li class="artwork__el artwork__el--big">
            <img src="asset/img/placeholder-painting.jpg" alt="placeholder-painting">
            <div class="artwork__info">
                <h3 class="artwork__title">Title</h3>
                <p class="artwork__price">Prix</p>
            </div>
        </li>
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
        ?>
        <a href="<?php echo $nextSibling['url']; ?>" class="btn btn--gallery btn--gallery--next"><?php echo $nextSibling['title']; ?></a>
    </nav>
</section>

<?php get_footer() ?>