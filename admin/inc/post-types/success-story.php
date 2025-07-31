<?php
function register_success_story_cpt() {
  register_post_type('success_story', [
    'labels' => [
      'name' => 'Истории успеха',
      'singular_name' => 'История успеха',
      'add_new' => 'Добавить новую',
      'add_new_item' => 'Добавить новую историю',
      'edit_item' => 'Редактировать историю',
      'new_item' => 'Новая история',
      'view_item' => 'Посмотреть историю',
      'search_items' => 'Поиск истории',
      'not_found' => 'Не найдено',
      'menu_name' => 'Истории успеха'
    ],
    'public' => true,
    'menu_icon' => 'dashicons-star-filled',
    'supports' => ['title', 'editor', 'thumbnail'],
    'has_archive' => true,
    'show_in_rest' => true, // для редактора блоков
    'rewrite' => ['slug' => 'succes']
  ]);
}
add_action('init', 'register_success_story_cpt');