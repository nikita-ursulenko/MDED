
<?php
/**
 * Înregistrarea Tipului de Postare Personalizat (Custom Post Type) pentru "FAQ Item".
 *
 * Acest CPT permite gestionarea întrebărilor și răspunsurilor FAQ
 * ca elemente separate în panoul de administrare WordPress.
 */

function register_faq_item_cpt() {
    $labels = array(
        'name'                  => _x( 'Întrebări frecvente (FAQ)', 'Post Type General Name', 'your-text-domain' ),
        'singular_name'         => _x( 'Întrebare FAQ', 'Post Type Singular Name', 'your-text-domain' ),
        'menu_name'             => __( 'FAQ', 'your-text-domain' ),
        'name_admin_bar'        => __( 'Întrebare FAQ', 'your-text-domain' ),
        'archives'              => __( 'Arhiva întrebărilor FAQ', 'your-text-domain' ),
        'attributes'            => __( 'Atributele întrebării FAQ', 'your-text-domain' ),
        'parent_item_colon'     => __( 'Întrebare părinte:', 'your-text-domain' ),
        'all_items'             => __( 'Toate întrebările FAQ', 'your-text-domain' ),
        'add_new_item'          => __( 'Adaugă o întrebare FAQ nouă', 'your-text-domain' ),
        'add_new'               => __( 'Adaugă una nouă', 'your-text-domain' ),
        'new_item'              => __( 'Întrebare FAQ nouă', 'your-text-domain' ),
        'edit_item'             => __( 'Editează întrebarea FAQ', 'your-text-domain' ),
        'update_item'           => __( 'Actualizează întrebarea FAQ', 'your-text-domain' ),
        'view_item'             => __( 'Vezi întrebarea FAQ', 'your-text-domain' ),
        'view_items'            => __( 'Vezi întrebările FAQ', 'your-text-domain' ),
        'search_items'          => __( 'Caută întrebarea FAQ', 'your-text-domain' ),
        'not_found'             => __( 'Nu a fost găsită', 'your-text-domain' ),
        'not_found_in_trash'    => __( 'Nu a fost găsită în coșul de gunoi', 'your-text-domain' ),
        'featured_image'        => __( 'Imaginea întrebării FAQ', 'your-text-domain' ),
        'set_featured_image'    => __( 'Setează imaginea întrebării FAQ', 'your-text-domain' ),
        'remove_featured_image' => __( 'Elimină imaginea întrebării FAQ', 'your-text-domain' ),
        'use_featured_image'    => __( 'Utilizează ca imagine a întrebării FAQ', 'your-text-domain' ),
        'insert_into_item'      => __( 'Inserează în întrebarea FAQ', 'your-text-domain' ),
        'uploaded_to_this_item' => __( 'Încărcat la această întrebare FAQ', 'your-text-domain' ),
        'items_list'            => __( 'Lista întrebărilor FAQ', 'your-text-domain' ),
        'items_list_navigation' => __( 'Navigare în lista întrebărilor FAQ', 'your-text-domain' ),
        'filter_items_list'     => __( 'Filtrează lista întrebărilor FAQ', 'your-text-domain' ),
    );
    $args = array(
        'label'                 => __( 'Întrebare FAQ', 'your-text-domain' ),
        'description'           => __( 'Întrebări și răspunsuri frecvente.', 'your-text-domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'page-attributes' ), // 'title' pentru întrebare, 'editor' pentru răspuns, 'page-attributes' pentru ordine
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_icon'             => 'dashicons-format-chat', // Iconiță în meniul de administrare
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false, // De obicei, nu este necesară o arhivă pentru FAQ
        'exclude_from_search'   => true, // Excludem din căutarea pe site
        'publicly_queryable'    => false, // Nu creăm URL-uri publice pentru fiecare FAQ
        'rewrite'               => false, // Dezactivăm rescrierea URL-urilor
        'capability_type'       => 'post',
        'show_in_rest'          => true, // Activăm suportul REST API (pentru Gutenberg)
    );
    register_post_type( 'faq_item', $args ); // 'faq_item' - este slug-ul CPT-ului dvs.
}
add_action( 'init', 'register_faq_item_cpt', 0 );

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_faq_item_fields',
        'title' => 'FAQ: Întrebare și răspuns',
        'fields' => array(
            array(
                'key' => 'field_faq_question_text',
                'label' => 'Întrebare',
                'name' => 'question_text',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
            ),
            array(
                'key' => 'field_faq_answer_text',
                'label' => 'Răspuns',
                'name' => 'answer_text',
                'type' => 'textarea',
                'tabs' => 'visual',
                'media_upload' => 0,
                'required' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'faq_item',
                ),
            ),
        ),
    ));
}
