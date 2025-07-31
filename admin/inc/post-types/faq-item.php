<?php
/**
 * Регистрация Пользовательского Типа Записи (Custom Post Type) для "FAQ Item".
 *
 * Этот CPT позволяет управлять вопросами и ответами FAQ
 * как отдельными элементами в админке WordPress.
 */

function register_faq_item_cpt() {
    $labels = array(
        'name'                  => _x( 'Вопросы и ответы (FAQ)', 'Post Type General Name', 'your-text-domain' ),
        'singular_name'         => _x( 'Вопрос FAQ', 'Post Type Singular Name', 'your-text-domain' ),
        'menu_name'             => __( 'FAQ', 'your-text-domain' ),
        'name_admin_bar'        => __( 'Вопрос FAQ', 'your-text-domain' ),
        'archives'              => __( 'Архив вопросов FAQ', 'your-text-domain' ),
        'attributes'            => __( 'Атрибуты вопроса FAQ', 'your-text-domain' ),
        'parent_item_colon'     => __( 'Родительский вопрос:', 'your-text-domain' ),
        'all_items'             => __( 'Все вопросы FAQ', 'your-text-domain' ),
        'add_new_item'          => __( 'Добавить новый вопрос FAQ', 'your-text-domain' ),
        'add_new'               => __( 'Добавить новый', 'your-text-domain' ),
        'new_item'              => __( 'Новый вопрос FAQ', 'your-text-domain' ),
        'edit_item'             => __( 'Редактировать вопрос FAQ', 'your-text-domain' ),
        'update_item'           => __( 'Обновить вопрос FAQ', 'your-text-domain' ),
        'view_item'             => __( 'Просмотреть вопрос FAQ', 'your-text-domain' ),
        'view_items'            => __( 'Просмотреть вопросы FAQ', 'your-text-domain' ),
        'search_items'          => __( 'Искать вопрос FAQ', 'your-text-domain' ),
        'not_found'             => __( 'Не найдено', 'your-text-domain' ),
        'not_found_in_trash'    => __( 'Не найдено в корзине', 'your-text-domain' ),
        'featured_image'        => __( 'Изображение вопроса FAQ', 'your-text-domain' ),
        'set_featured_image'    => __( 'Установить изображение вопроса FAQ', 'your-text-domain' ),
        'remove_featured_image' => __( 'Удалить изображение вопроса FAQ', 'your-text-domain' ),
        'use_featured_image'    => __( 'Использовать как изображение вопроса FAQ', 'your-text-domain' ),
        'insert_into_item'      => __( 'Вставить в вопрос FAQ', 'your-text-domain' ),
        'uploaded_to_this_item' => __( 'Загружено к этому вопросу FAQ', 'your-text-domain' ),
        'items_list'            => __( 'Список вопросов FAQ', 'your-text-domain' ),
        'items_list_navigation' => __( 'Навигация по списку вопросов FAQ', 'your-text-domain' ),
        'filter_items_list'     => __( 'Фильтровать список вопросов FAQ', 'your-text-domain' ),
    );
    $args = array(
        'label'                 => __( 'Вопрос FAQ', 'your-text-domain' ),
        'description'           => __( 'Часто задаваемые вопросы и ответы.', 'your-text-domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'page-attributes' ), // 'title' для вопроса, 'editor' для ответа, 'page-attributes' для порядка
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_icon'             => 'dashicons-format-chat', // Иконка в меню админки
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false, // Обычно для FAQ архив не нужен
        'exclude_from_search'   => true, // Исключаем из поиска по сайту
        'publicly_queryable'    => false, // Не создаем публичные URL для каждого FAQ
        'rewrite'               => false, // Отключаем перезапись URL
        'capability_type'       => 'post',
        'show_in_rest'          => true, // Включаем поддержку REST API (для Gutenberg)
    );
    register_post_type( 'faq_item', $args ); // 'faq_item' - это slug вашего CPT
}
add_action( 'init', 'register_faq_item_cpt', 0 );

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_faq_item_fields',
        'title' => 'FAQ: Вопрос и ответ',
        'fields' => array(
            array(
                'key' => 'field_faq_question_text',
                'label' => 'Вопрос',
                'name' => 'question_text',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
            ),
            array(
                'key' => 'field_faq_answer_text',
                'label' => 'Ответ',
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