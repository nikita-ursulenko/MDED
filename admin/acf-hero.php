<?php
// Adăugăm stiluri și script pentru interfața personalizată a blocului Hero din panoul de administrare ACF
function page_of_edit_hero() {
    // Stiluri pentru a ascunde blocul ACF original și grila de bază
    $css_styles = '
        #acf-group_68851c4381739 .inside {
            visibility: hidden;
            height: 0;
            overflow: hidden;
            position: relative;
            z-index: -1;
            opacity: 0;
            pointer-events: none;
        }
        /* Aici se pot adăuga stiluri suplimentare pentru panoul de administrare */
        .acf-field[data-name="hero_title"] { grid-column: 1 / 4; }
        .acf-field[data-name="counter_1_value"] { grid-column: 1 / 2; }
        .acf-field[data-name="counter_1_label"] { grid-column: 1 / 2; border: none; }
        .acf-field[data-name="counter_2_value"] { grid-column: 2 / 2; grid-row: 2 / 3; }
        .acf-field[data-name="counter_2_label"] { border: none; }
        .acf-field[data-name="counter_3_value"] { grid-column: 3 / 4; grid-row: 2 / 3; }
        .acf-field[data-name="counter_3_label"] { border: none; }
        .acf-field[data-name="hero_button_text"] { grid-column: 2 / 4; grid-row: 4 / 5; }

        /* Stiluri pentru câmpurile de intrare din previzualizare */
        .preview-input {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 4px;
            padding: 5px 10px;
            color: white;
            width: calc(100% - 20px); /* Adjust width considering padding */
            margin-top: 5px;
            box-sizing: border-box;
            font-size: inherit; /* Inherit font size from parent div */
            text-align: inherit; /* Inherit text alignment */
        }
        .preview-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
    ';
    echo '<style type="text/css">' . $css_styles . '</style>';

    // Script pentru a crea dinamic un bloc Hero personalizat în panoul de administrare
    ?>
    <?php
}
add_action('admin_head', 'page_of_edit_hero');
/**
 * Acest fișier conține codul pentru înregistrarea tipului de postări personalizate și a câmpurilor ACF
 * pentru secțiunea hero.
 */

// Înregistrarea tipului de postare personalizată "Slide-uri"
function register_slides_post_type() {
    $labels = array(
        'name'               => 'Slide-uri',
        'singular_name'      => 'Slide',
        'menu_name'          => 'Slide-uri',
        'name_admin_bar'     => 'Slide',
        'add_new'            => 'Adaugă nou',
        'add_new_item'       => 'Adaugă un slide nou',
        'new_item'           => 'Slide nou',
        'edit_item'          => 'Editează slide-ul',
        'view_item'          => 'Vezi slide-ul',
        'all_items'          => 'Toate slide-urile',
        'search_items'       => 'Caută slide-uri',
        'parent_item_colon'  => 'Slide părinte:',
        'not_found'          => 'Nu au fost găsite slide-uri.',
        'not_found_in_trash' => 'Nu au fost găsite slide-uri în coșul de gunoi.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'slides'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 25,
        'supports'           => array('title'),
    );

    register_post_type('slides', $args);
}
add_action('init', 'register_slides_post_type');

// Înregistrarea grupului de câmpuri ACF pentru slide-uri
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_64c0e66d93616', // Înlocuiește cu cheia ta unică
    'title' => 'Setări slide',
    'fields' => array(
        array(
            'key' => 'field_64c0e66d9b4b9', // Înlocuiește cu cheia ta unică
            'label' => 'Fotografie slide',
            'name' => 'slide_image',
            'type' => 'image',
            'instructions' => 'Încarcă o imagine pentru slide.',
            'required' => 1,
            'return_format' => 'array',
            'preview_size' => 'medium',
            'library' => 'all',
            'mime_types' => 'jpeg,jpg,png',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'slides',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array(
        0 => 'permalink', 1 => 'the_content', 2 => 'excerpt',
        3 => 'discussion', 4 => 'comments', 5 => 'revisions',
        6 => 'slug', 7 => 'author', 8 => 'format',
        9 => 'page_attributes', 10 => 'featured_image',
        11 => 'categories', 12 => 'tags', 13 => 'send-trackbacks',
    ),
));

endif;
?>