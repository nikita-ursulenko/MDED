<?php
/**
 * Înregistrarea câmpurilor ACF pentru secțiunea "Cine poate beneficia?"
 * (Who can benefit?)
 * Pentru versiunea GRATUITĂ a ACF.
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_beneficiaries_section',
    'title' => 'Beneficiari', // Title in WP Admin
    'fields' => array(
        // --- SECTION MAIN TITLE & DESCRIPTION ---
        array(
            'key' => 'field_beneficiaries_main_title_heading',
            'label' => 'Titlul principal și descrierea secțiunii',
            'name' => '', // Message field doesn't need a name
            'type' => 'message',
            'message' => 'Configurați titlul principal și textul introductiv al secțiunii "Cine poate beneficia?".',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_beneficiaries_main_title',
            'label' => 'Titlul principal',
            'name' => 'beneficiaries_main_title',
            'type' => 'text',
            'instructions' => 'Introduceți titlul principal al secțiunii, de exemplu: "Cine poate beneficia?".',
            'required' => 0,
            'placeholder' => 'Cine poate beneficia?',
        ),
        array(
            'key' => 'field_beneficiaries_main_description',
            'label' => 'Descrierea principală',
            'name' => 'beneficiaries_main_description',
            'type' => 'textarea',
            'instructions' => 'Introduceți textul introductiv al secțiunii. Suportă întreruperi de linie.',
            'required' => 0,
            'rows' => 4,
            'new_lines' => 'wpautop', // This will convert new lines to <p> tags
            'placeholder' => 'Programul „Ajutor de Stat pentru Industrie" se adresează unei game variate de investitori...',
        ),

        // --- CARD 1: Companii naționale (National Companies) ---
        array(
            'key' => 'field_beneficiaries_card1_group_heading',
            'label' => 'Card 1: Companii naționale',
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați conținutul primei carduri interactive.',
            'new_lines' => 'wpautop',
        ),
        // Note: SVG icon is hardcoded as it's complex for ACF image field without Pro/custom rendering
        array(
            'key' => 'field_beneficiaries_card1_title',
            'label' => 'Card 1: Titlu',
            'name' => 'beneficiaries_card1_title',
            'type' => 'text',
            'placeholder' => 'Companii naționale',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card1_short_desc',
            'label' => 'Card 1: Descriere scurtă',
            'name' => 'beneficiaries_card1_short_desc',
            'type' => 'textarea',
            'placeholder' => 'Companiile din Moldova care doresc să se extindă...',
            'instructions' => 'Text scurt, vizibil înainte de clic.',
            'rows' => 3,
            'new_lines' => 'wpautop',
            'required' => 0,
        ),
        

        // --- CARD 2: Investitori internaționali (International Investors) ---
        array(
            'key' => 'field_beneficiaries_card2_group_heading',
            'label' => 'Card 2: Investitori internaționali',
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați conținutul celei de-a doua carduri interactive.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_beneficiaries_card2_title',
            'label' => 'Card 2: Titlu',
            'name' => 'beneficiaries_card2_title',
            'type' => 'text',
            'placeholder' => 'Investitori internaționali',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card2_short_desc',
            'label' => 'Card 2: Descriere scurtă',
            'name' => 'beneficiaries_card2_short_desc',
            'type' => 'textarea',
            'placeholder' => 'Oferim un cadru stabil și predictibil pentru investitorii internaționali...',
            'instructions' => 'Text scurt, vizibil înainte de clic.',
            'rows' => 3,
            'new_lines' => 'wpautop',
            'required' => 0,
        ),
        

        // --- CARD 3: Diaspora ---
        array(
            'key' => 'field_beneficiaries_card3_group_heading',
            'label' => 'Card 3: Diaspora',
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați conținutul celei de-a treia carduri interactive.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_beneficiaries_card3_title',
            'label' => 'Card 3: Titlu',
            'name' => 'beneficiaries_card3_title',
            'type' => 'text',
            'placeholder' => 'Diaspora',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card3_short_desc',
            'label' => 'Card 3: Descriere scurtă',
            'name' => 'beneficiaries_card3_short_desc',
            'type' => 'textarea',
            'placeholder' => 'Moldovenii din diaspora care doresc să revină acasă...',
            'instructions' => 'Text scurt, vizibil înainte de clic.',
            'rows' => 3,
            'new_lines' => 'wpautop',
            'required' => 0,
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
    'hide_on_screen' => '',
    'active' => true,
    'description' => 'Câmpuri pentru secțiunea "Cine poate fi beneficiar?" pe pagină.',
));

endif;
?>
