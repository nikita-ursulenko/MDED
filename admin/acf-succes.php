<?php
/**
 * Înregistrează câmpurile ACF pentru secțiunea "Istorii de succes"
 * (Success Stories)
 *
 * Creat pentru versiunea GRATUITĂ a ACF.
 * Toate câmpurile au default_value, unde este cazul.
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_success_story_fields',
    'title' => 'Istorie de succes',
    'fields' => array(
        // --- Informații de bază pentru card (tile) ---
        array(
            'key' => 'field_ss_info_heading',
            'label' => 'Informații de bază (pentru cardul principal)',
            'name' => '',
            'type' => 'message',
            'message' => 'Configurați informațiile care vor apărea pe cardul principal al istoriei de succes.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ss_tittle_company',
            'label' => 'Numele companiei',
            'name' => 'tittle_company',
            'type' => 'text',
            'instructions' => 'Introduceți numele complet al companiei.',
            'required' => 1,
            'placeholder' => 'Numele Companiei SRL',
        ),
        array(
            'key' => 'field_ss_sector',
            'label' => 'Domeniul de activitate',
            'name' => 'sector',
            'type' => 'text',
            'instructions' => 'Introduceți sectorul în care activează compania.',
            'required' => 0,
            'placeholder' => 'Industria prelucrătoare, IT, etc.',
        ),
        array(
            'key' => 'field_ss_description',
            'label' => 'Descriere scurtă',
            'name' => 'description',
            'type' => 'textarea',
            'instructions' => 'Introduceți o descriere scurtă, vizibilă pe cardul principal.',
            'required' => 0,
            'rows' => 3,
            'new_lines' => 'wpautop',
            'placeholder' => 'Compania a beneficiat de ajutorul de stat pentru a-și extinde capacitatea de producție...',
        ),
        array(
            'key' => 'field_ss_support_percent',
            'label' => 'Procent sprijin',
            'name' => 'support_percenеnt',
            'type' => 'number',
            'instructions' => 'Introduceți procentul de sprijin acordat (ex: 25).',
            'required' => 0,
            'min' => 0,
            'max' => 100,
            'placeholder' => '25',
        ),

        // --- Informații pentru pop-up ---
        array(
            'key' => 'field_ss_popup_heading',
            'label' => 'Informații detaliate (pentru pop-up)',
            'name' => '',
            'type' => 'message',
            'message' => 'Aceste câmpuri vor fi afișate într-o fereastră pop-up atunci când se face click pe card.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ss_quote',
            'label' => 'Citat de la companie',
            'name' => 'quote',
            'type' => 'textarea',
            'instructions' => 'Introduceți o scurtă citat de la reprezentantul companiei.',
            'required' => 0,
            'rows' => 3,
            'new_lines' => 'wpautop',
            'placeholder' => '"Fără sprijinul de stat, nu am fi putut realiza această investiție în ritmul dorit."',
        ),
        array(
            'key' => 'field_ss_full_story',
            'label' => 'Istoria completă',
            'name' => 'full_story',
            'type' => 'wysiwyg',
            'instructions' => 'Introduceți textul complet al istoriei de succes. Poate conține formatare (liste, bold, etc.).',
            'required' => 0,
            'media_buttons' => 1,
        ),
        array(
            'key' => 'field_ss_investment',
            'label' => 'Investiție totală (M MDL)',
            'name' => 'investment',
            'type' => 'number',
            'instructions' => 'Introduceți valoarea totală a investiției (în milioane MDL).',
            'required' => 0,
            'placeholder' => '1.5',
        ),
        array(
            'key' => 'field_ss_jobs',
            'label' => 'Număr de locuri de muncă',
            'name' => 'jobs',
            'type' => 'number',
            'instructions' => 'Introduceți numărul de locuri de muncă nou create.',
            'required' => 0,
            'placeholder' => '25',
        ),
        array(
            'key' => 'field_ss_aid_granted',
            'label' => 'Ajutor de stat acordat (M MDL)',
            'name' => 'aid_granted',
            'type' => 'number',
            'instructions' => 'Introduceți valoarea ajutorului de stat acordat (în milioane MDL).',
            'required' => 0,
            'placeholder' => '0.5',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'success_story',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array(
        0 => 'permalink',
        1 => 'the_content',
        2 => 'excerpt',
        3 => 'discussion',
        4 => 'comments',
        5 => 'revisions',
        6 => 'slug',
        7 => 'author',
        8 => 'format',
        9 => 'page_attributes',
        10 => 'featured_image',
        11 => 'categories',
        12 => 'tags',
        13 => 'send-trackbacks',
    ),
    'active' => true,
    'description' => 'Câmpuri personalizate pentru tipul de post "Istorie de succes".',
));

endif;


?>