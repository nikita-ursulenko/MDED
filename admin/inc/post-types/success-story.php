<?php
function register_success_story_cpt() {
  register_post_type('success_story', [
    'labels' => [
      'name' => 'Povești de succes',
      'singular_name' => 'Poveste de succes',
      'add_new' => 'Adaugă una nouă',
      'add_new_item' => 'Adaugă o poveste nouă',
      'edit_item' => 'Editează povestea',
      'new_item' => 'Poveste nouă',
      'view_item' => 'Vezi povestea',
      'search_items' => 'Căută povestea',
      'not_found' => 'Nu a fost găsită',
      'menu_name' => 'Povești de succes'
    ],
    'public' => true,
    'menu_icon' => 'dashicons-star-filled',
    'supports' => ['title', 'editor', 'thumbnail'],
    'has_archive' => true,
    'show_in_rest' => true, // pentru editorul de blocuri
    'rewrite' => ['slug' => 'succes']
  ]);
}
add_action('init', 'register_success_story_cpt');