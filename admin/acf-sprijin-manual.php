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
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'page', // Afișează pe toate paginile implicit. Ajustați după necesitate.
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