<?php 
    /*
    * Template Name: Front Page
    *
    * @package WordPress
    */
?>

<?php get_header() ?>

<section class="block block--intro block--home">
    <h1 class="title title--3 intro__title">Sabine Corman</span></h1>
    <p class="title title--1 title--section title--section--intro">Artiste peintre</p>
    <img src="./asset/img/placeholder-painting.jpg" alt="placeholder-painting" class="intro__img">
</section>


<?php
    //Event block
    $args = array(
        'post_type' => 'events'
    );

    $the_query = new WP_Query( $args );
    if($the_query->have_posts() ) : 
        while ( $the_query->have_posts() ) : 
            $the_query->the_post(); ?>
                <section class="block block--event block--home">
                    <h2 class="title title--1 title--section">Évévement</h2>
                    <?php
                        $img = get_field('event_img');
                        $imgURL = esc_url($img['url']);
                        $imgAlt = esc_attr($img['alt']);
                    ?>
                    <img src="<?php echo $imgURL; ?>" alt="<?php echo $imgAlt; ?>" class="event__img">
                    <h3 class="event__title title title--3"><?php the_title(); ?></h3>
                    <div class="para para--1 event__description"><?php the_content(); ?></div>
                    <div class="event__info">
                        <p class="event__date para para--big para--upper">Du <time><?php echo get_field('event_starting_date'); ?></time> au <time><?php echo get_field('event_ending_date'); ?></time></p>
                        <address class="event__address">
                            <p class="event__street para para--big para--upper"><?php echo get_field('event_street'); ?></p>
                            <p class="event__city para para--big para--upper"><?php echo get_field('event_city'); ?></p>
                        </address>
                    </div>
                    <a href="<?php echo get_field('event_link'); ?>" target="_blank" class="btn btn--outline btn--info">Info</a>
                    
                </section>
            <?php endwhile; 
        wp_reset_postdata(); 
    else: 
    endif;

    wp_reset_postdata();

?>


<section class="block block--work block--home">
    <h2 class="title title--1 title--section">Travaux</h2>
    <ul class="work__li">
        <li class="work__el">
            <h3 class="work__title title title--3">
                <a href="#" class="work__link">Dessins</a>
            </h3>
            <a href="#" class="work__link work__link--img">
                <img src="asset/img/placeholder-painting.jpg" alt="placeholder-painting" class="work__img">
            </a>
        </li>
        <li class="work__el">
            <h3 class="work__title title title--3">
                <a href="#" class="work__link">Peintures</a>
            </h3>
            <a href="#" class="work__link work__link--img">
                <img src="asset/img/placeholder-painting.jpg" alt="placeholder-painting" class="work__img">
            </a>
        </li>
        <li class="work__el">
            <h3 class="work__title title title--3">
                <a href="#" class="work__link">Pastels</a>
            </h3>
            <a href="#" class="work__link work__link--img">
                <img src="asset/img/placeholder-painting.jpg" alt="placeholder-painting" class="work__img">
            </a>
        </li>
    </ul>
</section>

<section class="block block--about block--home">
    <h2 class="title title--1 title--section">L'artiste</h2>
    <img src="asset/img/placeholder-mugshot.jpg" alt="placeholder-mugshot" class="about__mugshot">
    <p class="para para--big para--upper">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend
        mollis urna.</p>
    <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel viverra ligula, a lacinia purus.
        Nulla malesuada eleifend eros id venenatis. Sed cursus lacinia tellus, id tincidunt mi. Pellentesque at felis ac
        dui gravida convallis a sit amet enim. Etiam non purus ultrices, efficitur tortor eget, vehicula neque.</p>
    <div class="about__details about__details--career">
        <h3 class="title title--2 details__title">Parcours</h3>
        <ul class="details__li">
            <li class="details__el">
                <h4 class="career__year">2020</h4>
                <ul class="career__li">
                    <li class="career__el">
                        <p class="career__step">Lorem ipsum dolor sit amet</p>
                    </li>
                    <li class="career__el">
                        <p class="career__step">Lorem ipsum dolor sit amet</p>
                    </li>
                </ul>
            </li>
            <li class="details__el">
                <h4 class="career__year">2020</h4>
                <ul class="career__li">
                    <li class="career__el">
                        <p class="career__step">Lorem ipsum dolor sit amet</p>
                    </li>
                    <li class="career__el">
                        <p class="career__step">Lorem ipsum dolor sit amet</p>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="about__details about__details--relatives">
        <h3 class="title title--2 details__title">Famille & Amis</h3>
        <ul class="details__li">
            <li class="details__el">
                <a href="#" class="relative__link link link--arrow">John Doe - Profession</a>
            </li>
            <li class="details__el">
                <a href="#" class="relative__link link link--arrow">John Doe - Profession</a>
            </li>
            <li class="details__el">
                <a href="#" class="relative__link link link--arrow">John Doe - Profession</a>
            </li>
        </ul>
    </div>
</section>

<section class="block block--contact block--home">
    <h2 class="title title--1 title--section">Contact</h2>

    <ul class="contact__li">
        <li class="contact__el">
            <a href="mailto:contact@sabinecorman.be"
                class="contact contact--mail link link--animated link--animated--big">contact@sabinecorman.be</a>
        </li>
        <li class="contact__el">
            <a href="tel:+32487433601"
                class="contact contact--phone link link--animated link--animated--big">0487/XX.XX.XX</a>
        </li>
    </ul>
</section>

<section class="block block--books block--home">
    <h2 class="title title--1 title--section">Livres</h2>
    <ul class="book__li">
        <li class="book__el">
            <div class="book__imgContainer">
                <img src="./asset/img/placeholder-book.jpg" alt="placeholder-book" class="book__img">
            </div>
            <div class="book__info">
                <h3 class="book__title title title--2">Title</h3>
                <p class="book__description para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel
                    viverra ligula, a lacinia purus. Nulla malesuada eleifend eros id venenatis.</p>
                <ul class="book__detail__li">
                    <li class="book__detail__el">
                        <p class="para book__detail book__detail--page">56 pages couleur</p>
                    </li>
                    <li class="book__detail__el">
                        <p class="para book__detail book__detail--size">24 x 15 cm</p>
                    </li>
                </ul>
                <p class="book__price">Prix</p>
                <a href="#" class="btn btn--outline btn--command">Commander</a>
            </div>
        </li>
    </ul>
</section>

<?php get_footer() ?>