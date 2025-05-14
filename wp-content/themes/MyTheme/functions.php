<?php
// Enqueue theme CSS
function custom_theme_assets() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
// Hook to enqueue scripts and styles
add_action('wp_enqueue_scripts', 'custom_theme_assets');

// Tilføj Featured Image-support
add_theme_support('post-thumbnails');

// Tilføj til din themes functions.php eller en custom plugin
add_action('rest_api_init', function () {
    // Simpel GET endpoint
    register_rest_route('custom/v1', '/hello', array(
        'methods' => 'GET',
        'callback' => 'custom_api_hello',
    ));
    
    // Mere avanceret endpoint med parametre
    register_rest_route('custom/v1', '/data/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'custom_api_get_data',
    ));
});

function custom_api_hello() {
    return new WP_REST_Response(array(
        'message' => 'Hej fra WordPress API!',
        'success' => true
    ), 200);
}

function custom_api_get_data($request) {
    $id = $request->get_param('id');
    // Hent data baseret på ID
    return new WP_REST_Response(array(
        'id' => $id,
        'data' => 'Din data her'
    ), 200);
}
?>