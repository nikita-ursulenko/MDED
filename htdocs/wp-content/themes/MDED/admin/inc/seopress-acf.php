<?php
// В functions.php или в seopress-acf.php (если ты там всё держишь)
add_filter( 'seopress_dynamic_variables', function( $variables ) {
    $variables['card_1_button_text'] = array(
        'name'  => 'Card 1 Button Text', // название в списке SEOPress
        'description' => 'ACF поле card_1_button_text',
        'callback' => function() {
            return get_field('card_1_button_text'); // вытаскиваем ACF
        }
    );
    return $variables;
});