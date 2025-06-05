<?php
/* funcion para traer los estilos del tema padre */        
// function childtheme_parent_styles() {
//  // estilo del tema padre
//  wp_enqueue_style( 'storefront', get_template_directory_uri().'/style.css' );                       
// }
// add_action( 'wp_enqueue_scripts', 'childtheme_parent_styles');


/*Redes sociales */
add_action( 'wp_enqueue_scripts', 'storefront_social_icons_enqueue_fab' );
function storefront_social_icons_enqueue_fab() {
	wp_enqueue_style( 'font-awesome-5-brands', '//use.fontawesome.com/releases/v5.0.13/css/brands.css' );
}  