<?php

use Timber\Timber;
use Timber\Post;


$context = Timber::context();

$context['main_menu'] = Timber::get_menu('main_menu');
// ACF поля для Hero секции
$context['hero_title'] = get_field('hero_title') ?: 'Titlu implicit';
$context['counter_1_value'] = get_field('counter_1_value') ?: 0;
$context['counter_1_label'] = get_field('counter_1_label') ?: '';
$context['counter_2_value'] = get_field('counter_2_value') ?: 0;
$context['counter_2_label'] = get_field('counter_2_label') ?: '';
$context['counter_3_value'] = get_field('counter_3_value') ?: 0;
$context['counter_3_label'] = get_field('counter_3_label') ?: '';
$context['hero_button_text'] = get_field('hero_button_text') ?: 'Apasă aici';
$context['hero_button_target'] = get_field('hero_button_target') ?: 'procedura';


// Определяем параметры для запроса WP_Query
$args = [
    'post_type'      => 'slides', // Тип записи, который мы создали
    'posts_per_page' => -1,        // Вывести все посты этого типа
    'order'          => 'ASC',     // Сортировка по порядку
];

// Получаем посты с помощью Timber::get_posts() и сохраняем их
$context['slides'] = Timber::get_posts($args);

// ACF поля для Despre секции
$context['tittle_scopul_programului'] = get_field('tittle_scopul_programului') ?: 'none';
$context['scopul_programului'] = get_field('scopul_programului') ?: 'none';

// Создаем пустой массив для целей программы
$scopul_list = [];

foreach (range(1, 8) as $i) {
    $field_value = get_field("contribuind{$i}");
    // Если поле не пустое, добавляем его значение в массив
    if (!empty($field_value)) {
        $scopul_list[] = $field_value;
    }
}

// Передаем в Twig единый массив
$context['scopul_list'] = $scopul_list;
$context['post'] = $post;
$context['fields'] = get_fields($post->ID);

// Получаем все истории успеха
$context['success_stories'] = Timber::get_posts([
    'post_type' => 'success_story',
    'posts_per_page' => -1,
]);
$context['faq_items'] = Timber::get_posts([
    'post_type' => 'faq_item',
    'orderby'   => 'menu_order',
    'order'     => 'ASC',
    'numberposts' => -1,
]);

// Подготовим чистый массив с данными для JS, включая все поля
$context['success_stories_for_js'] = [];

foreach ($context['success_stories'] as $story) {
    $context['success_stories_for_js'][] = [
        'ID'                => $story->ID,
        'tittle_company'    => $story->get_field('tittle_company'),
        'sector'            => $story->get_field('sector'),
        'description'       => $story->get_field('description'),
        'investment'        => $story->get_field('investment'),
        'jobs'              => $story->get_field('jobs'),
        'aid_granted'       => $story->get_field('aid_granted'),
        'support_percenеnt' => $story->get_field('support_percenеnt'),
        'quote'             => $story->get_field('quote'),
        'full_story'        => $story->get_field('full_story'),
        'gallery'           => $story->get_field('gallery'),
    ];
}


Timber::render('base.twig', $context);