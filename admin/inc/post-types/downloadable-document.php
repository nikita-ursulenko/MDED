<?php
/**
 * Регистрация Пользовательского Типа Записи (Custom Post Type) для "Загружаемых Документов".
 *
 * Этот CPT позволяет управлять файлами для скачивания (например, PDF, DOCX)
 * как отдельными элементами в админке WordPress.
 */

function register_downloadable_document_cpt() {
    $labels = array(
        'name'                  => _x( 'Документы для скачивания', 'Post Type General Name', 'your-text-domain' ),
        'singular_name'         => _x( 'Документ для скачивания', 'Post Type Singular Name', 'your-text-domain' ),
        'menu_name'             => __( 'Документы', 'your-text-domain' ),
        'name_admin_bar'        => __( 'Документ', 'your-text-domain' ),
        'archives'              => __( 'Архив документов', 'your-text-domain' ),
        'attributes'            => __( 'Атрибуты документа', 'your-text-domain' ),
        'parent_item_colon'     => __( 'Родительский документ:', 'your-text-domain' ),
        'all_items'             => __( 'Все документы', 'your-text-domain' ),
        'add_new_item'          => __( 'Добавить новый документ', 'your-text-domain' ),
        'add_new'               => __( 'Добавить новый', 'your-text-domain' ),
        'new_item'              => __( 'Новый документ', 'your-text-domain' ),
        'edit_item'             => __( 'Редактировать документ', 'your-text-domain' ),
        'update_item'           => __( 'Обновить документ', 'your-text-domain' ),
        'view_item'             => __( 'Просмотреть документ', 'your-text-domain' ),
        'view_items'            => __( 'Просмотреть документы', 'your-text-domain' ),
        'search_items'          => __( 'Искать документ', 'your-text-domain' ),
        'not_found'             => __( 'Не найдено', 'your-text-domain' ),
        'not_found_in_trash'    => __( 'Не найдено в корзине', 'your-text-domain' ),
        'featured_image'        => __( 'Изображение документа', 'your-text-domain' ),
        'set_featured_image'    => __( 'Установить изображение документа', 'your-text-domain' ),
        'remove_featured_image' => __( 'Удалить изображение документа', 'your-text-domain' ),
        'use_featured_image'    => __( 'Использовать как изображение документа', 'your-text-domain' ),
        'insert_into_item'      => __( 'Вставить в документ', 'your-text-domain' ),
        'uploaded_to_this_item' => __( 'Загружено к этому документу', 'your-text-domain' ),
        'items_list'            => __( 'Список документов', 'your-text-domain' ),
        'items_list_navigation' => __( 'Навигация по списку документов', 'your-text-domain' ),
        'filter_items_list'     => __( 'Фильтровать список документов', 'your-text-domain' ),
    );
    $args = array(
        'label'                 => __( 'Документ для скачивания', 'your-text-domain' ),
        'description'           => __( 'Документы, доступные для скачивания на сайте.', 'your-text-domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'custom-fields' ), // Поддерживаем заголовок и произвольные поля
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 25, // Позиция в меню админки (ниже "Комментариев")
        'menu_icon'             => 'dashicons-download', // Иконка в меню админки
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false, // Обычно для документов архив не нужен
        'exclude_from_search'   => true, // Исключаем из поиска по сайту
        'publicly_queryable'    => false, // Не создаем публичные URL для каждого файла
        'rewrite'               => false, // Отключаем перезапись URL
        'capability_type'       => 'post',
        'show_in_rest'          => true, // Включаем поддержку REST API (для Gutenberg и других)
    );
    register_post_type( 'download_document', $args ); // 'download_document' - это slug вашего CPT
}
add_action( 'init', 'register_downloadable_document_cpt', 0 );

/**
 * Регистрация мета-полей ACF для CPT "Документ для скачивания".
 *
 * Мы добавим поле типа 'file' для загрузки самого документа.
 */
if( function_exists('acf_add_local_field_group') ):
add_action('acf/init', 'register_acf_fields_for_documents');

function register_acf_fields_for_documents() {
acf_add_local_field_group(array(
    'key' => 'group_download_document_fields', // Уникальный ключ для группы полей CPT
    'title' => 'Настройки Документа для скачивания', // Название группы в админке
    'fields' => array(
        array(
            'key' => 'field_download_document_file', // Уникальный ключ для поля файла
            'label' => 'Файл для скачивания', // Название поля в админке
            'name' => 'download_file', // Имя поля, которое будем использовать в get_field()
            'type' => 'file',
            'instructions' => 'Загрузите документ (например, PDF, DOCX).',
            'required' => 1, // Сделать поле обязательным
            'return_format' => 'array', // Возвращает массив с URL, ID, размером и т.д.
            'library' => 'all', // Разрешить выбор из медиатеки или загрузку
            'mime_types' => 'pdf, doc, docx, xls, xlsx, ppt, pptx', // Разрешенные типы файлов
        ),
    ),
    'location' => array( // Где отображать эту группу полей
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'download_document', // Привязываем к нашему новому CPT
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '', // Можно скрыть стандартные поля, если не нужны
    'active' => true,
    'description' => 'Поля для управления файлами для скачивания.',
));
}
endif;
