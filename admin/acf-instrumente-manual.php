<?php
/**
 * Înregistrează câmpurile pentru blocul "Investment Tools" (versiunea gratuită ACF).
 * Utilizează câmpuri separate pentru fiecare buton.
 */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_investment_tools_buttons',
    'title' => 'Investment Tools – Butoane',
    'fields' => array(

        // --- Separator: prima carte ---
        array(
            'key' => 'field_heading_card_1',
            'label' => 'Buton 1 (prima carte)',
            'name' => '',
            'type' => 'message',
            'message' => 'Completați textul și linkul pentru butonul din prima carte.',
        ),

        array(
            'key' => 'field_card_1_button_text',
            'label' => 'Text buton 1',
            'name' => 'card_1_button_text',
            'type' => 'text',
            'instructions' => 'Introduceți textul care va fi afișat pe buton.',
            'placeholder' => 'Exemplu: Află mai multe',
            'default_value' => 'Află mai multe', // Added default value from placeholder
            'wrapper' => array('width' => '50'),
        ),

        array(
            'key' => 'field_card_1_button_link',
            'label' => 'Link buton 1',
            'name' => 'card_1_button_link',
            'type' => 'link',
            'instructions' => 'Specificați linkul către care duce butonul.',
            'wrapper' => array('width' => '50'),
        ),

        // --- Separator: a doua carte ---
        array(
            'key' => 'field_heading_card_2',
            'label' => 'Buton 2 (a doua carte)',
            'name' => '',
            'type' => 'message',
            'message' => 'Completați textul și linkul pentru butonul din a doua carte.',
        ),

        array(
            'key' => 'field_card_2_button_text',
            'label' => 'Text buton 2',
            'name' => 'card_2_button_text',
            'type' => 'text',
            'placeholder' => 'Exemplu: Contactează-ne',
            'default_value' => 'Contactează-ne', // Added default value from placeholder
            'wrapper' => array('width' => '50'),
        ),

        array(
            'key' => 'field_card_2_button_link',
            'label' => 'Link buton 2',
            'name' => 'card_2_button_link',
            'type' => 'link',
            'wrapper' => array('width' => '50'),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_type',
                'operator' => '==',
                'value' => 'front_page',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'active' => true,
    'description' => 'Butoane pentru blocul Investment Tools (fără ACF PRO).',
));

endif;
?>