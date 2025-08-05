
<?php
/**
 * Înregistrarea câmpurilor ACF pentru secțiunea "Criterii de eligibilitate"
 * (Criterii de eligibilitate)
 * Pentru versiunea GRATUITĂ a ACF.
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_eligibility_criteria_section',
    'title' => 'Criterii', // Title in WP Admin
    'fields' => array(
        // --- SECTION MAIN TITLE & DESCRIPTION ---
        array(
            'key' => 'field_ec_main_title_heading',
            'label' => 'Titlul principal și descrierea secțiunii',
            'name' => '', // Message field doesn't need a name
            'type' => 'message',
            'message' => 'Configurați titlul principal și textul introductiv al secțiunii "Criterii de eligibilitate".',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_main_title',
            'label' => 'Titlul principal',
            'name' => 'ec_main_title',
            'type' => 'text',
            'instructions' => 'Introduceți titlul principal al secțiunii.',
            'required' => 0,
            'default_value' => 'Criterii de eligibilitate',
            'placeholder' => 'Criterii de eligibilitate',
        ),
        array(
            'key' => 'field_ec_main_description',
            'label' => 'Descrierea principală',
            'name' => 'ec_main_description',
            'type' => 'textarea',
            'instructions' => 'Introduceți textul introductiv al secțiunii.',
            'required' => 0,
            'rows' => 4,
            'new_lines' => 'wpautop',
            'default_value' => 'Pentru a beneficia de sprijin financiar în cadrul programului „Ajutor de Stat", proiectul trebuie să îndeplinească următoarele condiții de eligibilitate. Aceste criterii sunt esențiale pentru asigurarea impactului economic real și pentru direcționarea eficientă a fondurilor publice.',
            'placeholder' => 'Pentru a beneficia de sprijin financiar în cadrul programului "Ajutor de Stat", proiectul trebuie să îndeplinească următoarele criterii...',
        ),

        // --- ELIGIBILITY CRITERIA POINTS (Individual Fields) ---
        // Point 1
        array(
            'key' => 'field_ec_point1_heading',
            'label' => 'Criteriul 1',
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați primul criteriu.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_point1_title',
            'label' => 'Criteriul 1: Titlu',
            'name' => 'ec_point1_title',
            'type' => 'text',
            'required' => 0,
            'default_value' => 'Investiția este nouă',
            'placeholder' => 'Investiția este nouă',
        ),
        array(
            'key' => 'field_ec_point1_description',
            'label' => 'Criteriul 1: Descriere',
            'name' => 'ec_point1_description',
            'type' => 'textarea',
            'rows' => 2,
            'new_lines' => 'wpautop',
            'required' => 0,
            'default_value' => 'Fie greenfield, fie extindere majoră a unei capacități existente',
            'placeholder' => 'Fie greenfield, fie extindere majoră a unei capacități existente',
        ),

        // Point 2
        array(
            'key' => 'field_ec_point2_heading',
            'label' => 'Criteriul 2',
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați al doilea criteriu.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_point2_title',
            'label' => 'Criteriul 2: Titlu',
            'name' => 'ec_point2_title',
            'type' => 'text',
            'required' => 0,
            'default_value' => 'Valoarea totală a investiției',
            'placeholder' => 'Valoarea totală a investiției',
        ),
        array(
            'key' => 'field_ec_point2_description',
            'label' => 'Criteriul 2: Descriere',
            'name' => 'ec_point2_description',
            'type' => 'textarea',
            'rows' => 2,
            'new_lines' => 'wpautop',
            'required' => 0,
            'default_value' => 'Minimum 10 milioane MDL',
            'placeholder' => 'Minimum 10 milioane MDL',
        ),

        // Point 3
        array(
            'key' => 'field_ec_point3_heading',
            'label' => 'Criteriul 3',
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați al treilea criteriu.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_point3_title',
            'label' => 'Criteriul 3: Titlu',
            'name' => 'ec_point3_title',
            'type' => 'text',
            'required' => 0,
            'default_value' => 'Înregistrare legală',
            'placeholder' => 'Înregistrare legală',
        ),
        array(
            'key' => 'field_ec_point3_description',
            'label' => 'Criteriul 3: Descriere',
            'name' => 'ec_point3_description',
            'type' => 'textarea',
            'rows' => 2,
            'new_lines' => 'wpautop',
            'required' => 0,
            'default_value' => 'Compania este înregistrată legal în Republica Moldova sau deține o sucursală activă înregistrată aici',
            'placeholder' => 'Compania este înregistrată legal în Republica Moldova sau deține o sucursală activă înregistrată aici',
        ),

        // Point 4
        array(
            'key' => 'field_ec_point4_heading',
            'label' => 'Criteriul 4',
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați al patrulea criteriu.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_point4_title',
            'label' => 'Criteriul 4: Titlu',
            'name' => 'ec_point4_title',
            'type' => 'text',
            'required' => 0,
            'default_value' => 'Sector industrial eligibil',
            'placeholder' => 'Sector industrial eligibil',
        ),
        array(
            'key' => 'field_ec_point4_description',
            'label' => 'Criteriul 4: Descriere',
            'name' => 'ec_point4_description',
            'type' => 'textarea',
            'rows' => 2,
            'new_lines' => 'wpautop',
            'required' => 0,
            'default_value' => 'Proiectul vizează un sector industrial eligibil (menționat la „Despre program")',
            'placeholder' => 'Proiectul vizează un sector industrial eligibil (menționat la „Despre program")',
        ),

        // Point 5
        array(
            'key' => 'field_ec_point5_heading',
            'label' => 'Criteriul 5',
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați al cincilea criteriu.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_point5_title',
            'label' => 'Criteriul 5: Titlu',
            'name' => 'ec_point5_title',
            'type' => 'text',
            'required' => 0,
            'default_value' => 'Crearea locurilor de muncă',
            'placeholder' => 'Crearea locurilor de muncă',
        ),
        array(
            'key' => 'field_ec_point5_description',
            'label' => 'Criteriul 5: Descriere',
            'name' => 'ec_point5_description',
            'type' => 'textarea',
            'rows' => 2,
            'new_lines' => 'wpautop',
            'required' => 0,
            'default_value' => 'Se prevede crearea de locuri de muncă noi și/sau modernizarea tehnologică',
            'placeholder' => 'Se prevede crearea de locuri de muncă noi și/sau modernizarea tehnologică',
        ),

        // Point 6
        array(
            'key' => 'field_ec_point6_heading',
            'label' => 'Criteriul 6',
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați al șaselea criteriu.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_point6_title',
            'label' => 'Criteriul 6: Titlu',
            'name' => 'ec_point6_title',
            'type' => 'text',
            'required' => 0,
            'default_value' => 'Fără datorii fiscale',
            'placeholder' => 'Fără datorii fiscale',
        ),
        array(
            'key' => 'field_ec_point6_description',
            'label' => 'Criteriul 6: Descriere',
            'name' => 'ec_point6_description',
            'type' => 'textarea',
            'rows' => 2,
            'new_lines' => 'wpautop',
            'required' => 0,
            'default_value' => 'Compania nu are datorii fiscale restante la momentul aplicării',
            'placeholder' => 'Compania nu are datorii fiscale restante la momentul aplicării',
        ),

        // Point 7
        array(
            'key' => 'field_ec_point7_heading',
            'label' => 'Criteriul 7',
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați al șaptelea criteriu.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_point7_title',
            'label' => 'Criteriul 7: Titlu',
            'name' => 'ec_point7_title',
            'type' => 'text',
            'required' => 0,
            'default_value' => 'Situație juridică stabilă',
            'placeholder' => 'Situație juridică stabilă',
        ),
        array(
            'key' => 'field_ec_point7_description',
            'label' => 'Criteriul 7: Descriere',
            'name' => 'ec_point7_description',
            'type' => 'textarea',
            'rows' => 2,
            'new_lines' => 'wpautop',
            'required' => 0,
            'default_value' => 'Compania nu se află în insolvență, lichidare sau reorganizare judiciară',
            'placeholder' => 'Compania nu se află în insolvență, lichidare sau reorganizare judiciară',
        ),

        // Point 8
        array(
            'key' => 'field_ec_point8_heading',
            'label' => 'Criteriul 8',
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați al optulea criteriu.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_point8_title',
            'label' => 'Criteriul 8: Titlu',
            'name' => 'ec_point8_title',
            'type' => 'text',
            'required' => 0,
            'default_value' => 'Fără ajutoare incompatibile',
            'placeholder' => 'Fără ajutoare incompatibile',
        ),
        array(
            'key' => 'field_ec_point8_description',
            'label' => 'Criteriul 8: Descriere',
            'name' => 'ec_point8_description',
            'type' => 'textarea',
            'rows' => 2,
            'new_lines' => 'wpautop',
            'required' => 0,
            'default_value' => 'Nu a beneficiat anterior de ajutoare de stat incompatibile',
            'placeholder' => 'Nu a beneficiat anterior de ajutoare de stat incompatibile',
        ),

        // --- IMPORTANT NOTE BLOCK ---
        array(
            'key' => 'field_ec_important_note_heading',
            'label' => 'Bloc: Notă importantă',
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați blocul "Important de știut:".',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_important_note_text',
            'label' => 'Notă importantă: Text',
            'name' => 'ec_important_note_text',
            'type' => 'textarea',
            'instructions' => 'Introduceți textul pentru blocul de notă. Utilizați eticheta <strong> pentru text aldin.',
            'required' => 0,
            'rows' => 3,
            'new_lines' => 'wpautop', // This converts new lines to <p> tags, which is good for the paragraph structure.
            'default_value' => '<strong>Important de știut:</strong> Sprijinul se oferă doar pentru investiții care nu au fost începute înainte de aprobarea cererii de finanțare.',
            'placeholder' => 'Important de știut: Sprijinul se oferă doar pentru investiții care nu au fost începute înainte de aprobarea cererii de finanțare.',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'page', // Show on all pages by default. Adjust as needed.
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
    'description' => 'Câmpuri pentru secțiunea "Criterii de Eligibilitate" pe pagină.',
));

endif;
?>
