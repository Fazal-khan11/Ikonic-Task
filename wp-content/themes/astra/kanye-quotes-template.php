<?php
/*
Template Name: Kanye Quotes Template
*/

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <h1>Kanye West Quotes</h1>
        <ul id="quoteList">
            <?php
            // Fetch and display quotes
            for ($i = 0; $i < 5; $i++) {
                $response = wp_remote_get('https://api.kanye.rest/');
                if (!is_wp_error($response)) {
                    $data = json_decode(wp_remote_retrieve_body($response));
                    $quote = $data->quote;
                    echo '<li>' . esc_html($quote) . '</li>';
                }
            }
            ?>
        </ul>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
