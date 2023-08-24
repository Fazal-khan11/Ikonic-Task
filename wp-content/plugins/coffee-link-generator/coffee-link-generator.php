<?php
/*
Plugin Name: Coffee Link Generator
Description: Generates a direct link to a cup of coffee using the Random Coffee API.
Version: 1.0
*/

// Hook into WordPress to create a custom function
add_action('init', 'hs_give_me_coffee');

// Define the function to generate coffee link
function hs_give_me_coffee() {
    // Make an API request to the Random Coffee API
    $api_url = 'https://coffee.alexflipnote.dev/l4EYtp4p6mo_coffee.png"'; // Replace with the actual API endpoint

    $response = wp_safe_remote_get($api_url);

    // Check if the API request was successful
    if (is_wp_error($response)) {
        return;
    }

    // Parse the JSON response
    $coffee_data = json_decode(wp_remote_retrieve_body($response));

    // Extract the coffee link from the JSON data
    $coffee_link = $coffee_data->coffee_link;

    // Output the coffee link
    echo '<p>Here is your coffee link: <a href="' . esc_url($coffee_link) . '">Enjoy your coffee!</a></p>';
}
?>
