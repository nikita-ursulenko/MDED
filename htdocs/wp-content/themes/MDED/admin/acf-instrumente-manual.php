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
         // Câmpuri pentru titlul și descrierea secțiunii
        array(
            'key' => 'field_section_title',
            'label' => 'Titlu Secțiune',
            'name' => 'section_title',
            'type' => 'text',
            'default_value' => 'Alte instrumente care îți pot susține investiția',
        ),
        array(
            'key' => 'field_section_description',
            'label' => 'Descriere Secțiune',
            'name' => 'section_description',
            'type' => 'textarea',
            'rows' => 3,
            'default_value' => 'Pe lângă sprijinul acordat direct prin programul „Ajutor de Stat", investitorii pot accesa și alte mecanisme disponibile prin intermediul Organizației pentru Dezvoltarea Antreprenoriatului (ODA), pentru a facilita finanțarea completă a proiectelor.',
        ),
        // Câmpuri pentru prima cartelă
        array(
            'key' => 'field_card_1_title',
            'label' => 'Titlu Cartelă 1',
            'name' => 'card_1_title',
            'type' => 'text',
            'default_value' => 'Vrei să-ți subvenționezi dobânda?',
        ),
         array(
            'key' => 'field_card_1_item_1_text',
            'label' => 'Text element 1',
            'name' => 'card_1_item_1_text',
            'type' => 'text',
            'default_value' => 'Aplică la Programul 373',
        ),
        // NOU: Câmp pentru al doilea element din listă
        array(
            'key' => 'field_card_1_item_2_text',
            'label' => 'Text element 2',
            'name' => 'card_1_item_2_text',
            'type' => 'text',
            'rows' => 3,
            'default_value' => 'Dobândă maximă: <span>7%</span> în lei sau <span>3%</span> în valută, diferența fiind acoperită de stat prin ODA.',
            'instructions' => 'Poți folosi tag-uri HTML, de ex. <span> class="highlight" pentru a evidenția textul.',
        ),
        // --- Separator: prima carte ---
        array(
            'key' => 'field_heading_card_1',
            'label' => 'Buton 1 (prima carte)',
            'name' => '',
            'type' => 'message',
            'message' => 'Completați textul și linkul pentru butonul din prima carte.',
        ),
        // NOU: Câmp pentru al doilea element din listă
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
        // --- Secțiunea "A doua cartelă" ---
        array(
            'key' => 'field_heading_card_2',
            'label' => 'A doua cartelă',
            'name' => '',
            'type' => 'message',
            'message' => 'Personalizează conținutul celei de-a doua cartele.',
        ),
        array(
            'key' => 'field_card_2_title',
            'label' => 'Titlu cartelă 2',
            'name' => 'card_2_title',
            'type' => 'text',
            'default_value' => 'Nu ai gaj pentru credit?',
        ),
        
        // Câmp pentru primul element din listă
        array(
            'key' => 'field_card_2_item_1_text',
            'label' => 'Text element 1 (card 2)',
            'name' => 'card_2_item_1_text',
            'type' => 'text',
            'default_value' => 'Aplică la Fondul de Garantare a Creditelor',
        ),
        array(
            'key' => 'field_card_2_item_2_text',
            'label' => 'Text element 2 (card 2)',
            'name' => 'card_2_item_2_text',
            'type' => 'text',
            'rows' => 3,
            'default_value' => 'Statul garantează până la <span class="highlight">80%</span> din valoarea creditului, prin intermediul ODA.',
            'instructions' => 'Poți folosi tag-uri HTML, de ex. <span> class="highlight" pentru a evidenția textul.',
        ),
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