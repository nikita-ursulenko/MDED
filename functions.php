<?php

use Timber\Timber; // Используем класс Timber для работы с ним в файле.

// Composer autoload
// Автозагружаем все зависимости, установленные через Composer. Это основа нашего проекта.
require_once __DIR__ . '/vendor/autoload.php';

// Initialize Timber
// Инициализируем Timber. Без этого он не будет работать, это наш главный помощник в шаблонизации.
Timber::init();

// Register Main Navigation Menu
// Регистрируем основное навигационное меню. Это позволяет управлять меню через админку WordPress.
add_action('after_setup_theme', function() {
    register_nav_menu('main_menu', __('Main Menu'));
});

// Enqueue Styles for Front-end
// Подключаем наш основной файл стилей (TailwindCSS). null в версии указывает, что версия не будет добавлена к файлу.
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'tailwind',
        get_template_directory_uri() . '/assets/css/style.css',
        [],
        filemtime(get_template_directory() . '/assets/css/style.css') // ИЗМЕНЕНО
    );
});

// Enqueue Header Menu JavaScript
// Эта функция подключает JavaScript для работы меню в хедере.
function theme_enqueue_header_menu_script() {
    wp_enqueue_script(
        'header-menu-script', // Уникальный идентификатор скрипта.
        get_stylesheet_directory_uri() . '/assets/js/header-menu.js', // Путь к файлу скрипта.
        [],       // Зависимости скрипта (тут их нет).
        null,     // Версия скрипта (null означает, что версия не будет добавлена).
        true      // Загрузка скрипта в футере страницы (перед закрывающим тегом </body>) для лучшей производительности.
    );
}

function enqueue_hero_admin_script($hook) {
    // Проверим, что это экран редактирования записи
    if ($hook !== 'post.php' && $hook !== 'post-new.php') {
        return;
    }

    // Проверим, что это нужный тип записи, если нужно (например, "page")
    $screen = get_current_screen();
    if ($screen && $screen->post_type !== 'page') {
        return;
    }

    // Подключим наш JS
    wp_enqueue_script(
        'hero-admin-js',
        get_template_directory_uri() . '/admin/acf-hero.js',
        ['acf-input'], // Зависимость от ACF (если нужно)
        null,
        true
    );
}
add_action('admin_enqueue_scripts', 'enqueue_hero_admin_script');

function echo_image_url_by_title( $image_title ) {
    $args = array(
        'post_type'      => 'attachment',
        'post_status'    => 'inherit',
        'post_mime_type' => 'image',
        'title'          => $image_title,
        'posts_per_page' => 1,
        'fields'         => 'ids',
        'no_found_rows'  => true,
    );

    $images = get_posts( $args );

    if ( ! empty( $images ) ) {
        $image_id = $images[0];
        $image_url = wp_get_attachment_url( $image_id );

        if ( $image_url ) {
            echo esc_url( $image_url ); // Выводим URL
        }
    }
}
add_filter( 'timber/context', 'add_logo_url_to_timber_context' );

function add_logo_url_to_timber_context( $context ) {
    // Мы используем output buffering, чтобы "поймать" вывод функции echo_image_url_by_title()
    ob_start();
    echo_image_url_by_title('logo'); // Вызываем нашу функцию
    $logo_url = ob_get_clean(); // Получаем то, что функция вывела

    $context['logo_url'] = $logo_url; // Добавляем URL в контекст Twig

    return $context;
}


// Hook Header Menu JavaScript into WordPress
// Привязываем функцию подключения скрипта к хуку 'wp_enqueue_scripts', чтобы он загружался на фронтенде.
add_action('wp_enqueue_scripts', 'theme_enqueue_header_menu_script');


// Include ACF Admin Styles (Separate File)
// Подключаем стили для админки ACF, также связанные с секцией "Герой". Тоже в отдельном файле.
require_once __DIR__ . '/admin/acf-hero.php';

// Include Custom Post Type: Success Story
// Подключаем определение кастомного типа записи "История успеха". Это очень удобно для структурированного контента.
require_once get_template_directory() . '/admin/inc/post-types/success-story.php';

// Include ACF Styles for Success Story
// Подключаем стили ACF, которые относятся к "Историям успеха".
require_once get_template_directory() . '/admin/acf-succes.php';
/**
 * Обрабатывает шорткоды, извлекает URL первого изображения и удаляет суффикс размера.
 *
 * @param string $html_content HTML-содержимое с шорткодами.
 * @return string|false URL изображения в полном размере или false.
 */
function get_first_image_from_rendered_content($html_content) {
    if (empty($html_content)) {
        return false;
    }

    // Обрабатываем шорткоды в содержимом
    $rendered_content = do_shortcode($html_content);

    // Используем DOMDocument для надежного поиска первого тега <img>
    $dom = new DOMDocument();
    @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $rendered_content);
    $images = $dom->getElementsByTagName('img');

    if ($images->length > 0) {
        $first_image = $images->item(0);
        $src = $first_image->getAttribute('src');

        // --- Вот здесь мы удаляем суффикс размера ---
        $src_full = preg_replace('/-\d+x\d+\./', '.', $src);

        return $src_full;
    }

    return false;
}
/**
 * Выводит данные в консоль браузера.
 *
 * @param mixed $data Данные для вывода.
 * @param string $label Метка для идентификации вывода.
 */
function log_to_console($data, $label = 'PHP Debug') {
    echo '<script>';
    echo 'console.log("' . $label . ':", ' . json_encode($data) . ');';
    echo '</script>';
}


require_once get_template_directory() . '/admin/inc/post-types/downloadable-document.php';

require_once get_template_directory() . '/admin/inc/post-types/faq-item.php';

require_once get_template_directory() . '/admin/acf-table-manual.php';

require_once get_template_directory() . '/admin/acf-sprijin-manual.php';

require_once get_template_directory() . '/admin/acf-beneficiari-manual.php';

require_once get_template_directory() . '/admin/acf-criterii-manual.php';

require_once get_template_directory() . '/admin/acf-procedura-manual.php';

require_once get_template_directory() . '/admin/acf-instrumente-manual.php';

require_once get_template_directory() . '/admin/acf-footer-manual.php';