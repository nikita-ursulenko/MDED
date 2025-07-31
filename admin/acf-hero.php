<?php
// Добавим стили и скрипт для кастомного админского интерфейса Hero блока ACF
function page_of_edit_hero() {
    // Стили для скрытия оригинального блока ACF и базовая сетка
    $css_styles = '
        #acf-group_68851c4381739 .inside {
            visibility: hidden;
            height: 0;
            overflow: hidden;
            position: relative;
            z-index: -1;
            opacity: 0;
            pointer-events: none;
        }
        /* Здесь можно добавить дополнительные стили для админки */
        .acf-field[data-name="hero_title"] { grid-column: 1 / 4; }
        .acf-field[data-name="counter_1_value"] { grid-column: 1 / 2; }
        .acf-field[data-name="counter_1_label"] { grid-column: 1 / 2; border: none; }
        .acf-field[data-name="counter_2_value"] { grid-column: 2 / 2; grid-row: 2 / 3; }
        .acf-field[data-name="counter_2_label"] { border: none; }
        .acf-field[data-name="counter_3_value"] { grid-column: 3 / 4; grid-row: 2 / 3; }
        .acf-field[data-name="counter_3_label"] { border: none; }
        .acf-field[data-name="hero_button_text"] { grid-column: 2 / 4; grid-row: 4 / 5; }

        /* Styles for the inputs inside the preview */
        .preview-input {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 4px;
            padding: 5px 10px;
            color: white;
            width: calc(100% - 20px); /* Adjust width considering padding */
            margin-top: 5px;
            box-sizing: border-box;
            font-size: inherit; /* Inherit font size from parent div */
            text-align: inherit; /* Inherit text alignment */
        }
        .preview-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
    ';
    echo '<style type="text/css">' . $css_styles . '</style>';

    // Скрипт для динамического создания кастомного блока Hero в админке
    ?>
    <?php
}
add_action('admin_head', 'page_of_edit_hero');
?>