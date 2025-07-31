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
// ACF поля для Despre секции
$context['despre_description'] = get_field('despre_description') ?: 'none';
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

// Подготовим чистый массив с данными для JS
$context['success_stories_for_js'] = [];

foreach ($context['success_stories'] as $story) {
    $context['success_stories_for_js'][] = [
        'ID'          => $story->ID,
        'title'       => $story->title(),
        'content'     => $story->content(),
        'thumbnail'   => $story->thumbnail() ? $story->thumbnail()->src() : null,
        'fields'      => $story->meta(), // ACF поля
    ];
}

Timber::render('base.twig', $context);