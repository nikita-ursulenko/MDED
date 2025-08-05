<?php
/**
 * Înregistrarea manuală a tuturor câmpurilor ACF pentru tabelul de granturi (pentru versiunea GRATUITĂ a ACF).
 * Utilizează câmpuri separate pentru fiecare rând, deoarece Repeater Field necesită ACF PRO.
 *
 * Asigurați-vă că pluginul Advanced Custom Fields este activ.
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_company_grants_table_free', // Cheie unică nouă pentru grupul de câmpuri
    'title' => 'Setări tabel granturi', // Titlul grupului de câmpuri în panoul de administrare WP
    'fields' => array(
        // --- 1. Câmp: Titlul tabelului ---
        array(
            'key' => 'field_table_main_title_free', // Cheie unică
            'label' => 'Titlul tabelului',
            'name' => 'table_main_title',
            'type' => 'text',
            'instructions' => 'Introduceți titlul care va fi afișat deasupra tabelului.',
            'required' => 0,
            'default_value' => 'Condiții de finanțare pe tipuri de întreprinderi', // Adăugat: Valoare implicită
            'wrapper' => array('width' => '', 'class' => '', 'id' => ''),
            'placeholder' => 'Exemplu: Condiții de finanțare pe tipuri de întreprinderi',
        ),

        // --- Separator pentru comoditate în panoul de administrare ---
        array(
            'key' => 'field_heading_small_enterprise',
            'label' => 'Date pentru "Întreprindere mică"',
            'name' => '', // Numele nu este necesar pentru câmpul de tip "Message"
            'type' => 'message',
            'message' => 'Introduceți datele pentru rândul "Întreprindere mică".',
            'new_lines' => 'wpautop',
            'esc_html' => 0,
            'wrapper' => array('width' => '', 'class' => '', 'id' => ''),
        ),
        // --- 3. Câmpuri pentru rândul "Întreprindere mică" ---
        array(
            'key' => 'field_small_enterprise_most_districts', // Cheie unică
            'label' => 'Întreprindere mică: Majoritatea raioanelor (%)',
            'name' => 'small_enterprise_most_districts',
            'type' => 'text',
            'instructions' => 'Procentul pentru întreprinderile mici în majoritatea raioanelor.',
            'required' => 1,
            'default_value' => '75%', // Adăugat: Valoare implicită
            'wrapper' => array('width' => '50', 'class' => '', 'id' => ''), // 50% lățime
            'placeholder' => 'Exemplu: 75%',
        ),
        array(
            'key' => 'field_small_enterprise_chisinau', // Cheie unică
            'label' => 'Întreprindere mică: Municipiul Chișinău (%)',
            'name' => 'small_enterprise_chisinau',
            'type' => 'text',
            'instructions' => 'Procentul pentru întreprinderile mici în Chișinău.',
            'required' => 1,
            'default_value' => '60%', // Adăugat: Valoare implicită
            'wrapper' => array('width' => '50', 'class' => '', 'id' => ''), // 50% lățime
            'placeholder' => 'Exemplu: 60%',
        ),

        // --- Separator pentru comoditate în panoul de administrare ---
        array(
            'key' => 'field_heading_medium_enterprise',
            'label' => 'Date pentru "Întreprindere mijlocie"',
            'name' => '',
            'type' => 'message',
            'message' => 'Introduceți datele pentru rândul "Întreprindere mijlocie".',
            'new_lines' => 'wpautop',
            'esc_html' => 0,
            'wrapper' => array('width' => '', 'class' => '', 'id' => ''),
        ),
        // --- 4. Câmpuri pentru rândul "Întreprindere mijlocie" ---
        array(
            'key' => 'field_medium_enterprise_most_districts', // Cheie unică
            'label' => 'Întreprindere mijlocie: Majoritatea raioanelor (%)',
            'name' => 'medium_enterprise_most_districts',
            'type' => 'text',
            'instructions' => 'Procentul pentru întreprinderile medii în majoritatea raioanelor.',
            'required' => 1,
            'default_value' => '60%', // Adăugat: Valoare implicită
            'wrapper' => array('width' => '50', 'class' => '', 'id' => ''),
            'placeholder' => 'Exemplu: 60%',
        ),
        array(
            'key' => 'field_medium_enterprise_chisinau', // Cheie unică
            'label' => 'Întreprindere mijlocie: Municipiul Chișinău (%)',
            'name' => 'medium_enterprise_chisinau',
            'type' => 'text',
            'instructions' => 'Procentul pentru întreprinderile medii în Chișinău.',
            'required' => 1,
            'default_value' => '50%', // Adăugat: Valoare implicită
            'wrapper' => array('width' => '50', 'class' => '', 'id' => ''),
            'placeholder' => 'Exemplu: 50%',
        ),

        // --- Separator pentru comoditate în panoul de administrare ---
        array(
            'key' => 'field_heading_large_enterprise',
            'label' => 'Date pentru "Întreprindere mare"',
            'name' => '',
            'type' => 'message',
            'message' => 'Introduceți datele pentru rândul "Întreprindere mare".',
            'new_lines' => 'wpautop',
            'esc_html' => 0,
            'wrapper' => array('width' => '', 'class' => '', 'id' => ''),
        ),
        // --- 5. Câmpuri pentru rândul "Întreprindere mare" ---
        array(
            'key' => 'field_large_enterprise_most_districts', // Cheie unică
            'label' => 'Întreprindere mare: Majoritatea raioanelor (%)',
            'name' => 'large_enterprise_most_districts',
            'type' => 'text',
            'instructions' => 'Procentul pentru întreprinderile mari în majoritatea raioanelor.',
            'required' => 1,
            'default_value' => '60%', // Adăugat: Valoare implicită
            'wrapper' => array('width' => '50', 'class' => '', 'id' => ''),
            'placeholder' => 'Exemplu: 60%',
        ),
        array(
            'key' => 'field_large_enterprise_chisinau', // Cheie unică
            'label' => 'Întreprindere mare: Municipiul Chișinău (%)',
            'name' => 'large_enterprise_chisinau',
            'type' => 'text',
            'instructions' => 'Procentul pentru întreprinderile mari în Chișinău.',
            'required' => 1,
            'default_value' => '50%', // Adăugat: Valoare implicită
            'wrapper' => array('width' => '50', 'class' => '', 'id' => ''),
            'placeholder' => 'Exemplu: 50%',
        ),
    ),
    'location' => array( // Reguli de locație: unde va fi afișat acest grup de câmpuri
        array(
            array(
                'param' => 'page_type',
                'operator' => '==',
                'value' => 'front_page',
            ),
        ),
        // === IMPORTANT ===
        // Asigurați-vă că regulile dorite sunt setate aici!
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => 'Acest grup de câmpuri conține date pentru tabelul dinamic de granturi.',
));

endif;
?>