<?php
/**
 * Înregistrarea Tipului de Postare Personalizat (Custom Post Type) pentru "Documente descărcabile".
 *
 * Acest CPT permite gestionarea fișierelor descărcabile (de exemplu, PDF, DOCX)
 * ca elemente separate în panoul de administrare WordPress.
 */

function register_downloadable_document_cpt() {
    $labels = array(
        'name'                  => _x( 'Documente descărcabile', 'Post Type General Name', 'your-text-domain' ),
        'singular_name'         => _x( 'Document descărcabil', 'Post Type Singular Name', 'your-text-domain' ),
        'menu_name'             => __( 'Documente', 'your-text-domain' ),
        'name_admin_bar'        => __( 'Document', 'your-text-domain' ),
        'archives'              => __( 'Arhivă documente', 'your-text-domain' ),
        'attributes'            => __( 'Atributele documentului', 'your-text-domain' ),
        'parent_item_colon'     => __( 'Document părinte:', 'your-text-domain' ),
        'all_items'             => __( 'Toate documentele', 'your-text-domain' ),
        'add_new_item'          => __( 'Adaugă un document nou', 'your-text-domain' ),
        'add_new'               => __( 'Adaugă unul nou', 'your-text-domain' ),
        'new_item'              => __( 'Document nou', 'your-text-domain' ),
        'edit_item'             => __( 'Editează documentul', 'your-text-domain' ),
        'update_item'           => __( 'Actualizează documentul', 'your-text-domain' ),
        'view_item'             => __( 'Vezi documentul', 'your-text-domain' ),
        'view_items'            => __( 'Vezi documentele', 'your-text-domain' ),
        'search_items'          => __( 'Căută documentul', 'your-text-domain' ),
        'not_found'             => __( 'Nu a fost găsit', 'your-text-domain' ),
        'not_found_in_trash'    => __( 'Nu a fost găsit în coșul de gunoi', 'your-text-domain' ),
        'featured_image'        => __( 'Imaginea documentului', 'your-text-domain' ),
        'set_featured_image'    => __( 'Setează imaginea documentului', 'your-text-domain' ),
        'remove_featured_image' => __( 'Elimină imaginea documentului', 'your-text-domain' ),
        'use_featured_image'    => __( 'Utilizează ca imagine a documentului', 'your-text-domain' ),
        'insert_into_item'      => __( 'Inserează în document', 'your-text-domain' ),
        'uploaded_to_this_item' => __( 'Încărcat la acest document', 'your-text-domain' ),
        'items_list'            => __( 'Lista documentelor', 'your-text-domain' ),
        'items_list_navigation' => __( 'Navigare în lista documentelor', 'your-text-domain' ),
        'filter_items_list'     => __( 'Filtrează lista documentelor', 'your-text-domain' ),
    );
    $args = array(
        'label'                 => __( 'Document descărcabil', 'your-text-domain' ),
        'description'           => __( 'Documente disponibile pentru descărcare pe site.', 'your-text-domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'custom-fields' ), // Suportă titlul și câmpurile personalizate
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 25, // Poziția în meniul de administrare (sub "Comentarii")
        'menu_icon'             => 'dashicons-download', // Iconiță în meniul de administrare
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false, // De obicei, nu este necesară o arhivă pentru documente
        'exclude_from_search'   => true, // Excludem din căutarea pe site
        'publicly_queryable'    => false, // Nu creăm URL-uri publice pentru fiecare fișier
        'rewrite'               => false, // Dezactivăm rescrierea URL-urilor
        'capability_type'       => 'post',
        'show_in_rest'          => true, // Activăm suportul REST API (pentru Gutenberg și altele)
    );
    register_post_type( 'download_document', $args ); // 'download_document' - este slug-ul CPT-ului dvs.
}
add_action( 'init', 'register_downloadable_document_cpt', 0 );

/**
 * Înregistrarea meta-câmpurilor ACF pentru CPT "Document descărcabil".
 *
 * Vom adăuga un câmp de tip 'file' pentru a încărca documentul propriu-zis.
 */
if( function_exists('acf_add_local_field_group') ):
add_action('acf/init', 'register_acf_fields_for_documents');

function register_acf_fields_for_documents() {
acf_add_local_field_group(array(
    'key' => 'group_download_document_fields', // Cheie unică pentru grupul de câmpuri CPT
    'title' => 'Setări Document descărcabil', // Numele grupului în panoul de administrare
    'fields' => array(
        array(
            'key' => 'field_download_document_file', // Cheie unică pentru câmpul fișier
            'label' => 'Fișier pentru descărcare', // Numele câmpului în panoul de administrare
            'name' => 'download_file', // Numele câmpului pe care îl vom folosi în get_field()
            'type' => 'file',
            'instructions' => 'Încărcați documentul (de exemplu, PDF, DOCX).',
            'required' => 1, // Face câmpul obligatoriu
            'return_format' => 'array', // Returnează un array cu URL, ID, dimensiune etc.
            'library' => 'all', // Permite selectarea din biblioteca media sau încărcarea
            'mime_types' => 'pdf, doc, docx, xls, xlsx, ppt, pptx', // Tipuri de fișiere permise
        ),
    ),
    'location' => array( // Unde să se afișeze acest grup de câmpuri
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'download_document', // Ataşăm la noul nostru CPT
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '', // Se pot ascunde câmpurile standard, dacă nu sunt necesare
    'active' => true,
    'description' => 'Câmpuri pentru gestionarea fișierelor descărcabile.',
));
}
endif;