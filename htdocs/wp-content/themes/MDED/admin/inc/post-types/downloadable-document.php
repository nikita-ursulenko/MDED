<?php
/**
 * ВАЖНО: Этот код содержит изменения для добавления английских полей.
 * Замените им текущее содержимое вашего файла 'downloadable-document.php'.
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
        'supports'              => array( 'title', 'custom-fields' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 25,
        'menu_icon'             => 'dashicons-download',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'rewrite'               => false,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'download_document', $args );
}
add_action( 'init', 'register_downloadable_document_cpt', 0 );

if( function_exists('acf_add_local_field_group') ):
add_action('acf/init', 'register_acf_fields_for_documents');

function register_acf_fields_for_documents() {
acf_add_local_field_group(array(
    'key' => 'group_download_document_fields',
    'title' => 'Setări Document descărcabil',
    'fields' => array(
        array(
            'key' => 'field_download_document_file',
            'label' => 'Fișier pentru descărcare',
            'name' => 'download_file',
            'type' => 'file',
            'instructions' => 'Încărcați documentul (de exemplu, PDF, DOCX).',
            'required' => 1,
            'return_format' => 'array',
            'library' => 'all',
            'mime_types' => 'pdf, doc, docx, xls, xlsx, ppt, pptx',
        ),
        // --- Добавлены поля для английского языка ---
        array(
            'key' => 'field_download_document_title_en', // Уникальный ключ для поля
            'label' => 'Название файла (EN)', // Название поля в админ-панели
            'name' => 'download_title_en', // Системное имя для использования в коде
            'type' => 'text',
            'placeholder' => '01 text',
            'instructions' => 'Introduceți numele fișierului care va fi afișat pentru limba engleză.',
            'required' => 0,
        ),
        array(
            'key' => 'field_download_document_file_en', // Уникальный ключ для поля
            'label' => 'Descărcați fișierul (EN)', // Название поля в админ-панели
            'name' => 'download_file_en', // Системное имя для использования в коде
            'type' => 'file',
            'instructions' => 'Descărcați documentul pentru versiunea în limba engleză.',
            'required' => 0,
            'return_format' => 'array',
            'library' => 'all',
            'mime_types' => 'pdf, doc, docx, xls, xlsx, ppt, pptx',
        ),
        // --- Конец добавленных полей ---
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'download_document',
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
    'description' => 'Câmpuri pentru gestionarea fișierelor descărcabile.',
));
}
endif;
?>