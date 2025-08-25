<?php
/**
 * Înregistrează câmpurile ACF pentru secțiunea "Cum este structurat stimulentul financiar?"
 * (How financial support is structured?)
 * Pentru versiunea GRATUITĂ a ACF.
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_financial_support_structure',
    'title' => 'Structura Suportului Financiar', // Title in WP Admin
    'fields' => array(
        // --- SECTION MAIN TITLE ---
        array(
            'key' => 'field_first_fss_main_title',
            'label' => 'Titlul',
            'name' => 'fss_first_main_title',
            'type' => 'text',
            'instructions' => 'Sprijin financiar diferențiat pe regiuni',
            'required' => 0,
            'default_value' => 'Sprijin financiar diferențiat pe regiuni',
            'placeholder' => 'Sprijin financiar diferențiat pe regiuni?',
        ),
        array(
            'key' => 'field_fss_description_main_title',
            'label' => 'Titlul description',
            'name' => 'fss_description_main_title',
            'type' => 'text',
            'instructions' => 'Description',
            'required' => 0,
            'default_value' => 'Valoarea ajutorului de stat acordat prin acest program variază în funcție de localitatea în care se face investiția și de dimensiunea companiei. Astfel, se încurajează dezvoltarea economică în toate regiunile țării, oferind un sprijin mai mare acolo unde nevoia este mai mare.',
            'placeholder' => 'Valoarea ajutorului de stat acordat prin acest program variază în funcție de localitatea în care se face investiția și de dimensiunea companiei. Astfel, se încurajează dezvoltarea economică în toate regiunile țării, oferind un sprijin mai mare acolo unde nevoia este mai mare.',
        ),

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
        // --- TABLE HEADERS ---
        array(
            'key' => 'field_fss_table_heading',
            'label' => 'Titlurile tabelei',
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați titlurile pentru tabelul tipurilor de întreprinderi.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_fss_table_col1_title',
            'label' => 'Titlul Antet 1 (Tip de întreprindere)',
            'name' => 'fss_table_col1_title',
            'type' => 'text',
            'instructions' => 'Introduceți titlul pentru prima coloană a tabelei.',
            'required' => 0,
            'default_value' => 'Tip de întreprindere',
            'placeholder' => 'Tip de întreprindere',
            'wrapper' => array('width' => '33', 'class' => '', 'id' => ''),
        ),
        array(
            'key' => 'field_fss_table_col2_title',
            'label' => 'Titlul Antet 2 (Majoritatea raioanelor)',
            'name' => 'fss_table_col2_title',
            'type' => 'text',
            'instructions' => 'Introduceți titlul pentru a doua coloană a tabelei.',
            'required' => 0,
            'default_value' => 'Majoritatea raioanelor',
            'placeholder' => 'Majoritatea raioanelor',
            'wrapper' => array('width' => '33', 'class' => '', 'id' => ''),
        ),
        array(
            'key' => 'field_fss_table_col3_title',
            'label' => 'Titlul Antet 3 (Municipiul Chișinău)',
            'name' => 'fss_table_col3_title',
            'type' => 'text',
            'instructions' => 'Introduceți titlul pentru a treia coloană a tabelei.',
            'required' => 0,
            'default_value' => 'Municipiul Chișinău',
            'placeholder' => 'Municipiul Chișinău',
            'wrapper' => array('width' => '33', 'class' => '', 'id' => ''),
        ),
        array(
            'key' => 'field_fss_table_celula1_title',
            'label' => 'Titlul Celulă 1 (Întreprindere mică)',
            'name' => 'fss_table_celula1_title',
            'type' => 'text',
            'instructions' => 'Introduceți titlul pentru a treia Celulă a tabelei.',
            'required' => 0,
            'default_value' => 'Întreprindere mică',
            'placeholder' => 'Întreprindere mică',
            'wrapper' => array('width' => '33', 'class' => '', 'id' => ''),
            
        ),
        array(
            'key' => 'field_fss_table_celula2_title',
            'label' => 'Titlul Celulă 2 (Întreprindere mijlocie)',
            'name' => 'fss_table_celula2_title',
            'type' => 'text',
            'instructions' => 'Introduceți titlul pentru a treia Celulă a tabelei.',
            'required' => 0,
            'default_value' => 'Întreprindere mijlocie',
            'placeholder' => 'Întreprindere mijlocie',
            'wrapper' => array('width' => '33', 'class' => '', 'id' => ''),
        ),
        array(
            'key' => 'field_fss_table_celula3_title',
            'label' => 'Titlul Celulă 3 (Întreprindere mare)',
            'name' => 'fss_table_celula3_title',
            'type' => 'text',
            'instructions' => 'Introduceți titlul pentru a treia Celulă a tabelei.',
            'required' => 0,
            'default_value' => 'Întreprindere mare',
            'placeholder' => 'Întreprindere mare',
            'wrapper' => array('width' => '33', 'class' => '', 'id' => ''),
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
        array(
            'key' => 'field_fss_main_title',
            'label' => 'Titlul secțiunii',
            'name' => 'fss_main_title',
            'type' => 'text',
            'instructions' => 'Introduceți titlul pentru secțiune, de exemplu: "Cum este structurat sprijinul financiar?".',
            'required' => 0,
            'default_value' => 'Cum este structurat sprijinul financiar?',
            'placeholder' => 'Cum este structurat sprijinul financiar?',
        ),

        // --- CARD 1: Sprijin de stat (State Support) ---
        array(
            'key' => 'field_fss_card1_group_heading',
            'label' => 'Card 1: Bugetul programului', // Обновленный заголовок
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați prima carte: "Bugetul Programului".', // Обновленное сообщение
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_fss_card1_title',
            'label' => 'Card 1: Titlu',
            'name' => 'fss_card1_title',
            'type' => 'text',
            'default_value' => 'Bugetul programului', // Новый дефолтный заголовок
            'placeholder' => 'Bugetul programului',
            'required' => 0,
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_fss_card1_point1',
            'label' => 'Card 1: Punct listă 1',
            'name' => 'fss_card1_point1',
            'type' => 'text',
            'default_value' => 'Fonduri alocate pentru perioada 2024-2027', // Новый дефолтный пункт
            'placeholder' => 'Fonduri alocate pentru perioada 2024-2027',
            'required' => 0,
        ),
        array(
            'key' => 'field_fss_card1_point2',
            'label' => 'Card 1: Punct listă 2',
            'name' => 'fss_card1_point2',
            'type' => 'text',
            'default_value' => 'Disponibil pentru toate sectoarele eligibile', // Новый дефолтный пункт
            'placeholder' => 'Disponibil pentru toate sectoarele eligibile',
            'required' => 0,
        ),
        // Adding more points if needed:
        // array(
        //     'key' => 'field_fss_card1_point3',
        //     'label' => 'Card 1: Punct listă 3',
        //     'name' => 'fss_card1_point3',
        //     'type' => 'text',
        //     'required' => 0,
        // ),


        // --- CARD 2: Grant nerambursabil (Non-reimbursable Grant) ---
        array(
            'key' => 'field_fss_card2_group_heading',
            'label' => 'Card 2: Grant nerambursabil',
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați a doua carte: "Grant nerambursabil".',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_fss_card2_percentage',
            'label' => 'Card 2: Procent',
            'name' => 'fss_card2_percentage',
            'type' => 'text',
            'default_value' => '25%',
            'placeholder' => '25%',
            'instructions' => 'Introduceți procentul (de exemplu, "25%").',
            'required' => 0,
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_fss_card2_title',
            'label' => 'Card 2: Titlu',
            'name' => 'fss_card2_title',
            'type' => 'text',
            'default_value' => 'Grant nerambursabil',
            'placeholder' => 'Grant nerambursabil',
            'required' => 0,
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_fss_card2_point1',
            'label' => 'Card 2: Punct listă 1',
            'name' => 'fss_card2_point1',
            'type' => 'text',
            'default_value' => 'Acordat imediat după începerea implementării investiției eligibile',
            'placeholder' => 'Acordat imediat după începerea implementării investiției eligibile',
            'required' => 0,
        ),
        array(
            'key' => 'field_fss_card2_point2',
            'label' => 'Card 2: Punct listă 2',
            'name' => 'fss_card2_point2',
            'type' => 'text',
            'default_value' => 'Nu necesită rambursare',
            'placeholder' => 'Nu necesită rambursare',
            'required' => 0,
        ),
        array(
            'key' => 'field_fss_card2_point3',
            'label' => 'Card 2: Punct listă 3',
            'name' => 'fss_card2_point3',
            'type' => 'text',
            'default_value' => 'Sprijin direct pentru cash-flow',
            'placeholder' => 'Sprijin direct pentru cash-flow',
            'required' => 0,
        ),

        // --- CARD 3: Facilitate fiscală (Tax Facility) ---
        array(
            'key' => 'field_fss_card3_group_heading',
            'label' => 'Card 3: Facilitate fiscală',
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați a treia carte: "Facilitate fiscală".',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_fss_card3_percentage',
            'label' => 'Card 3: Procent',
            'name' => 'fss_card3_percentage',
            'type' => 'text',
            'default_value' => '75%',
            'placeholder' => '75%',
            'instructions' => 'Introduceți procentul (de exemplu, "75%").',
            'required' => 0,
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_fss_card3_title',
            'label' => 'Card 3: Titlu',
            'name' => 'fss_card3_title',
            'type' => 'text',
            'default_value' => 'Facilitate fiscală',
            'placeholder' => 'Facilitate fiscală',
            'required' => 0,
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_fss_card3_point1',
            'label' => 'Card 3: Punct listă 1',
            'name' => 'fss_card3_point1',
            'type' => 'text',
            'default_value' => 'Scutire parțială de la plata impozitului pe venit',
            'placeholder' => 'Scutire parțială de la plata impozitului pe venit',
            'required' => 0,
        ),
        array(
            'key' => 'field_fss_card3_point2',
            'label' => 'Card 3: Punct listă 2',
            'name' => 'fss_card3_point2',
            'type' => 'text',
            'default_value' => 'Echivalent cu o reducere de 50%',
            'placeholder' => 'Echivalent cu o reducere de 50%',
            'required' => 0,
        ),
        array(
            'key' => 'field_fss_card3_point3',
            'label' => 'Card 3: Punct listă 3',
            'name' => 'fss_card3_point3',
            'type' => 'text',
            'default_value' => 'Sustenabilitate bugetară pe termen lung',
            'placeholder' => 'Sustenabilitate bugetară pe termen lung',
            'required' => 0,
        ),

        // --- ADVANTAGES BLOCK ---
        array(
            'key' => 'field_fss_advantages_group_heading',
            'label' => 'Bloc: Avantajele mecanismului',
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați blocul "Avantajele mecanismului mixt".',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_fss_advantages_title',
            'label' => 'Avantaje: Titlu',
            'name' => 'fss_advantages_title',
            'type' => 'text',
            'default_value' => 'Avantajele mecanismului mixt',
            'placeholder' => 'Avantajele mecanismului mixt',
            'required' => 0,
        ),
        array(
            'key' => 'field_fss_advantages_text',
            'label' => 'Avantaje: Text',
            'name' => 'fss_advantages_text',
            'type' => 'textarea',
            'default_value' => 'Acest mecanism mixt (grant + facilitate fiscală) asigură atât **flexibilitate pentru companii**, cât și **sustenabilitate bugetară**, fiind aliniat cu bunele practici europene în domeniul ajutorului de stat.',
            'placeholder' => 'Acest mecanism mixt (grant + facilitate fiscală) asigură atât **flexibilitate pentru companii**, cât și **sustenabilitate bugetară**, fiind aliniat cu bunele practici europene în domeniul ajutorului de stat.',
            'instructions' => 'Introduceți textul. Utilizați **două asteriscuri** pentru text aldin.',
            'rows' => 4,
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
    'description' => 'Câmpuri pentru secțiunea "Cum este structurat stimulentul financiar?" pe pagină.',
));

endif;

add_action('acf/input/admin_head', function () {
    ?>
    <style>
        [data-key="field_fss_card1_group_heading"],
        [data-key="field_fss_card1_percentage"],
        [data-key="field_fss_card1_title"],
        [data-key="field_fss_card1_main_text"],
        [data-key="field_fss_card1_point1"],
        [data-key="field_fss_card1_point2"] {
            background-color: rgb(243, 232, 255);
        }
        </style>
    <?php
});
?>