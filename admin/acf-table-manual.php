<?php
/**
 * Регистрация всех ACF полей для таблицы грантов вручную (для БЕСПЛАТНОЙ версии ACF).
 * Использует отдельные поля для каждой строки, так как Repeater Field требует ACF PRO.
 *
 * Убедитесь, что плагин Advanced Custom Fields активен.
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_company_grants_table_free', // Новый уникальный ключ для группы полей
    'title' => 'Настройки таблицы грантов', // Название группы полей в админке WP
    'fields' => array(
        // --- 1. Поле: Заголовок таблицы ---
        array(
            'key' => 'field_table_main_title_free', // Уникальный ключ
            'label' => 'Заголовок таблицы',
            'name' => 'table_main_title',
            'type' => 'text',
            'instructions' => 'Введите заголовок, который будет отображаться над таблицей.',
            'required' => 0,
            'wrapper' => array('width' => '', 'class' => '', 'id' => ''),
            'placeholder' => 'Например: Условия финансирования по типам предприятий',
        ),

        // --- Разделитель для удобства в админке ---
        array(
            'key' => 'field_heading_small_enterprise',
            'label' => 'Данные для "Întreprindere mică"',
            'name' => '', // Имя не требуется для поля типа "Message"
            'type' => 'message',
            'message' => 'Внесите данные для строки "Întreprindere mică".',
            'new_lines' => 'wpautop',
            'esc_html' => 0,
            'wrapper' => array('width' => '', 'class' => '', 'id' => ''),
        ),
        // --- 3. Поля для строки "Întreprindere mică" ---
        array(
            'key' => 'field_small_enterprise_most_districts', // Уникальный ключ
            'label' => 'Întreprindere mică: Majoritatea raioanelor (%)',
            'name' => 'small_enterprise_most_districts',
            'type' => 'text',
            'instructions' => 'Процент для малых предприятий в большинстве районов.',
            'required' => 1,
            'wrapper' => array('width' => '50', 'class' => '', 'id' => ''), // 50% ширина
            'placeholder' => 'Например: 75%',
        ),
        array(
            'key' => 'field_small_enterprise_chisinau', // Уникальный ключ
            'label' => 'Întreprindere mică: Municipiul Chișinău (%)',
            'name' => 'small_enterprise_chisinau',
            'type' => 'text',
            'instructions' => 'Процент для малых предприятий в Кишинёве.',
            'required' => 1,
            'wrapper' => array('width' => '50', 'class' => '', 'id' => ''), // 50% ширина
            'placeholder' => 'Например: 60%',
        ),

        // --- Разделитель для удобства в админке ---
        array(
            'key' => 'field_heading_medium_enterprise',
            'label' => 'Данные для "Întreprindere mijlocie"',
            'name' => '',
            'type' => 'message',
            'message' => 'Внесите данные для строки "Întreprindere mijlocie".',
            'new_lines' => 'wpautop',
            'esc_html' => 0,
            'wrapper' => array('width' => '', 'class' => '', 'id' => ''),
        ),
        // --- 4. Поля для строки "Întreprindere mijlocie" ---
        array(
            'key' => 'field_medium_enterprise_most_districts', // Уникальный ключ
            'label' => 'Întreprindere mijlocie: Majoritatea raioanelor (%)',
            'name' => 'medium_enterprise_most_districts',
            'type' => 'text',
            'instructions' => 'Процент для средних предприятий в большинстве районов.',
            'required' => 1,
            'wrapper' => array('width' => '50', 'class' => '', 'id' => ''),
            'placeholder' => 'Например: 60%',
        ),
        array(
            'key' => 'field_medium_enterprise_chisinau', // Уникальный ключ
            'label' => 'Întreprindere mijlocie: Municipiul Chișinău (%)',
            'name' => 'medium_enterprise_chisinau',
            'type' => 'text',
            'instructions' => 'Процент для средних предприятий в Кишинёве.',
            'required' => 1,
            'wrapper' => array('width' => '50', 'class' => '', 'id' => ''),
            'placeholder' => 'Например: 50%',
        ),

        // --- Разделитель для удобства в админке ---
        array(
            'key' => 'field_heading_large_enterprise',
            'label' => 'Данные для "Întreprindere mare"',
            'name' => '',
            'type' => 'message',
            'message' => 'Внесите данные для строки "Întreprindere mare".',
            'new_lines' => 'wpautop',
            'esc_html' => 0,
            'wrapper' => array('width' => '', 'class' => '', 'id' => ''),
        ),
        // --- 5. Поля для строки "Întreprindere mare" ---
        array(
            'key' => 'field_large_enterprise_most_districts', // Уникальный ключ
            'label' => 'Întreprindere mare: Majoritatea raioanelor (%)',
            'name' => 'large_enterprise_most_districts',
            'type' => 'text',
            'instructions' => 'Процент для крупных предприятий в большинстве районов.',
            'required' => 1,
            'wrapper' => array('width' => '50', 'class' => '', 'id' => ''),
            'placeholder' => 'Например: 60%',
        ),
        array(
            'key' => 'field_large_enterprise_chisinau', // Уникальный ключ
            'label' => 'Întreprindere mare: Municipiul Chișinău (%)',
            'name' => 'large_enterprise_chisinau',
            'type' => 'text',
            'instructions' => 'Процент для крупных предприятий в Кишинёве.',
            'required' => 1,
            'wrapper' => array('width' => '50', 'class' => '', 'id' => ''),
            'placeholder' => 'Например: 50%',
        ),
    ),
    'location' => array( // Правила размещения: где будет отображаться эта группа полей
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'page', // Показать на всех страницах. Настройте это!
            ),
        ),
        // === ВАЖНО ===
        // Убедитесь, что здесь установлены нужные вам правила!
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => 'Эта группа полей содержит данные для динамической таблицы грантов.',
));

endif;
?>