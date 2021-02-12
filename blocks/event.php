<?php
    $args = array(
        'post_type' => 'events'
    );

    $the_query = new WP_Query( $args );
    if($the_query->have_posts() ) : 
        while ( $the_query->have_posts() ) : 
        $the_query->the_post(); 
        // content goes here
        print('Lolilol');
        endwhile; 
        wp_reset_postdata(); 
    else: 
    endif;

    wp_reset_postdata();
?>