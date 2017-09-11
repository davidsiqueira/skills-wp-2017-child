<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

register_sidebar( array(
    'name'          => __( 'Footer 3', 'twentyseventeen' ),
    'id'            => 'sidebar-4',
    'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );


function max_title_length( $title ) {
    $max = 60;
    if( strlen( $title ) > $max ) {
    return substr( $title, 0, $max ). " &hellip;";
    } else {
    return $title;
    }
    }