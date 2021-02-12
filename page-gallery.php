<?php 
    /*
    * Template Name: Gallery Page
    *
    * @package WordPress
    */
?>

<?php get_header() ?>

<section class="block block--galleryInfo">
    <a href="#" class="link link--arrow link--arrow--back">Retour</a>
    <h2 class="title title--2">Galerie</h2>
    <div class="gallery__description">
        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend mollis urna, non
            sollicitudin erat mollis a. Integer urna ligula, facilisis non nibh ac, porta dapibus turpis.</p>
        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend mollis urna, non
            sollicitudin erat mollis a. Integer urna ligula, facilisis non nibh ac, porta dapibus turpis.</p>
    </div>
    <img src="./asset/img/placeholder-painting.jpg" alt="placeholder-painting">
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
        <a href="#" class="btn btn--gallery btn--gallery--back">Dessins</a>

        <a href="#" class="btn btn--gallery btn--gallery--next">Galerie</a>
    </nav>
</section>

<?php get_footer() ?>