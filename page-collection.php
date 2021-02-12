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
            <?php 
                $my_wp_query = new WP_Query();
                $all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));
                
                $portfolio =  get_page_by_title('Portfolio');
                
                $portfolio_children = get_page_children( $post->ID, $all_wp_pages );
                
                foreach($portfolio_children as $child): ?>
                    <?php echo $child->ID; ?>
                <?php endforeach;
            ?>
            <ul class="gallery__li">
                <li class="gallery__el">
                    <a href="#" class="gallery__img link link--img">
                        <img src="asset/img/placeholder-painting.jpg" alt="placeholder-painting">
                    </a>
                    <div class="gallery__info">
                        <h3 class="gallery__title">Title</h3>
                        <a href="#" class="link link--arrow">Voir</a>
                    </div>
                </li>
                <li class="gallery__el">
                    <a href="#" class="gallery__img link link--img">
                        <img src="asset/img/placeholder-painting.jpg" alt="placeholder-painting">
                    </a>
                    <div class="gallery__info">
                        <h3 class="gallery__title">Title</h3>
                        <a href="#" class="link link--arrow">Voir</a>
                    </div>
                </li>
                <li class="gallery__el">
                    <a href="#" class="gallery__img link link--img">
                        <img src="asset/img/placeholder-painting.jpg" alt="placeholder-painting">
                    </a>
                    <div class="gallery__info">
                        <h3 class="gallery__title">Title</h3>
                        <a href="#" class="link link--arrow">Voir</a>
                    </div>
                </li>
            </ul>
            <a href="<?php echo get_home_url(); ?>" class="btn btn--outline">Retour</a>
        </section>

<?php get_footer() ?>