<?php
/**
 * Регистрация ACF полей для секции "Criterii de eligibilitate"
 * (Eligibility Criteria)
 * Для БЕСПЛАТНОЙ версии ACF.
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_eligibility_criteria_section',
    'title' => 'Сriterii', // Title in WP Admin
    'fields' => array(
        // --- SECTION MAIN TITLE & DESCRIPTION ---
        array(
            'key' => 'field_ec_main_title_heading',
            'label' => 'Основной заголовок и описание секции',
            'name' => '', // Message field doesn't need a name
            'type' => 'message',
            'message' => 'Настройте главный заголовок и вступительный текст секции "Criterii de eligibilitate".',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_main_title',
            'label' => 'Основной заголовок',
            'name' => 'ec_main_title',
            'type' => 'text',
            'instructions' => 'Введите главный заголовок секции.',
            'required' => 0,
            'default_value' => 'Criterii de eligibilitate',
            'placeholder' => 'Criterii de eligibilitate',
        ),
        array(
            'key' => 'field_ec_main_description',
            'label' => 'Основное описание',
            'name' => 'ec_main_description',
            'type' => 'textarea',
            'instructions' => 'Введите вступительный текст секции.',
            'required' => 0,
            'rows' => 4,
            'new_lines' => 'wpautop',
            'default_value' => 'Pentru a beneficia de sprijin financiar în cadrul programului „Ajutor de Stat", proiectul trebuie să îndeplinească următoarele condiții de eligibilitate. Aceste criterii sunt esențiale pentru asigurarea impactului economic real și pentru direcționarea eficientă a fondurilor publice.',
            'placeholder' => 'Для получения финансовой поддержки по программе "Государственная помощь" проект должен соответствовать следующим критериям...',
        ),

        // --- ELIGIBILITY CRITERIA POINTS (Individual Fields) ---
        // Point 1
        array(
            'key' => 'field_ec_point1_heading',
            'label' => 'Критерий 1',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте первый критерий.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_point1_title',
            'label' => 'Критерий 1: Заголовок',
            'name' => 'ec_point1_title',
            'type' => 'text',
            'required' => 0,
            'default_value' => 'Investiția este nouă',
            'placeholder' => 'Инвестиция новая',
        ),
        array(
            'key' => 'field_ec_point1_description',
            'label' => 'Критерий 1: Описание',
            'name' => 'ec_point1_description',
            'type' => 'textarea',
            'rows' => 2,
            'new_lines' => 'wpautop',
            'required' => 0,
            'default_value' => 'Fie greenfield, fie extindere majoră a unei capacități existente',
            'placeholder' => 'Будь то гринфилд или крупное расширение существующей мощности',
        ),

        // Point 2
        array(
            'key' => 'field_ec_point2_heading',
            'label' => 'Критерий 2',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте второй критерий.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_point2_title',
            'label' => 'Критерий 2: Заголовок',
            'name' => 'ec_point2_title',
            'type' => 'text',
            'required' => 0,
            'default_value' => 'Valoarea totală a investiției',
            'placeholder' => 'Общая стоимость инвестиций',
        ),
        array(
            'key' => 'field_ec_point2_description',
            'label' => 'Критерий 2: Описание',
            'name' => 'ec_point2_description',
            'type' => 'textarea',
            'rows' => 2,
            'new_lines' => 'wpautop',
            'required' => 0,
            'default_value' => 'Minimum 10 milioane MDL',
            'placeholder' => 'Минимум 10 миллионов MDL',
        ),

        // Point 3
        array(
            'key' => 'field_ec_point3_heading',
            'label' => 'Критерий 3',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте третий критерий.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_point3_title',
            'label' => 'Критерий 3: Заголовок',
            'name' => 'ec_point3_title',
            'type' => 'text',
            'required' => 0,
            'default_value' => 'Înregistrare legală',
            'placeholder' => 'Юридическая регистрация',
        ),
        array(
            'key' => 'field_ec_point3_description',
            'label' => 'Критерий 3: Описание',
            'name' => 'ec_point3_description',
            'type' => 'textarea',
            'rows' => 2,
            'new_lines' => 'wpautop',
            'required' => 0,
            'default_value' => 'Compania este înregistrată legal în Republica Moldova sau deține o sucursală activă înregistrată aici',
            'placeholder' => 'Компания легально зарегистрирована в Республике Молдова или имеет здесь активный зарегистрированный филиал',
        ),

        // Point 4
        array(
            'key' => 'field_ec_point4_heading',
            'label' => 'Критерий 4',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте четвертый критерий.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_point4_title',
            'label' => 'Критерий 4: Заголовок',
            'name' => 'ec_point4_title',
            'type' => 'text',
            'required' => 0,
            'default_value' => 'Sector industrial eligibil',
            'placeholder' => 'Приемлемый промышленный сектор',
        ),
        array(
            'key' => 'field_ec_point4_description',
            'label' => 'Критерий 4: Описание',
            'name' => 'ec_point4_description',
            'type' => 'textarea',
            'rows' => 2,
            'new_lines' => 'wpautop',
            'required' => 0,
            'default_value' => 'Proiectul vizează un sector industrial eligibil (menționat la „Despre program")',
            'placeholder' => 'Проект ориентирован на приемлемый промышленный сектор (упомянутый в разделе "О программе")',
        ),

        // Point 5
        array(
            'key' => 'field_ec_point5_heading',
            'label' => 'Критерий 5',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте пятый критерий.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_point5_title',
            'label' => 'Критерий 5: Заголовок',
            'name' => 'ec_point5_title',
            'type' => 'text',
            'required' => 0,
            'default_value' => 'Crearea locurilor de muncă',
            'placeholder' => 'Создание рабочих мест',
        ),
        array(
            'key' => 'field_ec_point5_description',
            'label' => 'Критерий 5: Описание',
            'name' => 'ec_point5_description',
            'type' => 'textarea',
            'rows' => 2,
            'new_lines' => 'wpautop',
            'required' => 0,
            'default_value' => 'Se prevede crearea de locuri de muncă noi și/sau modernizarea tehnologică',
            'placeholder' => 'Предусматривается создание новых рабочих мест и/или технологическая модернизация',
        ),

        // Point 6
        array(
            'key' => 'field_ec_point6_heading',
            'label' => 'Критерий 6',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте шестой критерий.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_point6_title',
            'label' => 'Критерий 6: Заголовок',
            'name' => 'ec_point6_title',
            'type' => 'text',
            'required' => 0,
            'default_value' => 'Fără datorii fiscale',
            'placeholder' => 'Без налоговых задолженностей',
        ),
        array(
            'key' => 'field_ec_point6_description',
            'label' => 'Критерий 6: Описание',
            'name' => 'ec_point6_description',
            'type' => 'textarea',
            'rows' => 2,
            'new_lines' => 'wpautop',
            'required' => 0,
            'default_value' => 'Compania nu are datorii fiscale restante la momentul aplicării',
            'placeholder' => 'У компании нет просроченных налоговых задолженностей на момент подачи заявки',
        ),

        // Point 7
        array(
            'key' => 'field_ec_point7_heading',
            'label' => 'Критерий 7',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте седьмой критерий.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_point7_title',
            'label' => 'Критерий 7: Заголовок',
            'name' => 'ec_point7_title',
            'type' => 'text',
            'required' => 0,
            'default_value' => 'Situație juridică stabilă',
            'placeholder' => 'Стабильное юридическое положение',
        ),
        array(
            'key' => 'field_ec_point7_description',
            'label' => 'Критерий 7: Описание',
            'name' => 'ec_point7_description',
            'type' => 'textarea',
            'rows' => 2,
            'new_lines' => 'wpautop',
            'required' => 0,
            'default_value' => 'Compania nu se află în insolvență, lichidare sau reorganizare judiciară',
            'placeholder' => 'Компания не находится в состоянии неплатежеспособности, ликвидации или судебной реорганизации',
        ),

        // Point 8
        array(
            'key' => 'field_ec_point8_heading',
            'label' => 'Критерий 8',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте восьмой критерий.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_point8_title',
            'label' => 'Критерий 8: Заголовок',
            'name' => 'ec_point8_title',
            'type' => 'text',
            'required' => 0,
            'default_value' => 'Fără ajutoare incompatibile',
            'placeholder' => 'Без несовместимых видов помощи',
        ),
        array(
            'key' => 'field_ec_point8_description',
            'label' => 'Критерий 8: Описание',
            'name' => 'ec_point8_description',
            'type' => 'textarea',
            'rows' => 2,
            'new_lines' => 'wpautop',
            'required' => 0,
            'default_value' => 'Nu a beneficiat anterior de ajutoare de stat incompatibile',
            'placeholder' => 'Ранее не получала несовместимую государственную помощь',
        ),

        // --- IMPORTANT NOTE BLOCK ---
        array(
            'key' => 'field_ec_important_note_heading',
            'label' => 'Блок: Важное Примечание',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте блок "Important de știut:".',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_ec_important_note_text',
            'label' => 'Важное Примечание: Текст',
            'name' => 'ec_important_note_text',
            'type' => 'textarea',
            'instructions' => 'Введите текст для блока примечания. Используйте тег <strong> для жирного текста.',
            'required' => 0,
            'rows' => 3,
            'new_lines' => 'wpautop', // This converts new lines to <p> tags, which is good for the paragraph structure.
            'default_value' => '<strong>Important de știut:</strong> Sprijinul se oferă doar pentru investiții care nu au fost începute înainte de aprobarea cererii de finanțare.',
            'placeholder' => 'Важно знать: Поддержка предоставляется только для инвестиций, которые не были начаты до утверждения заявки на финансирование.',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'page', // Show on all pages by default. Adjust as needed.
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
    'description' => 'Поля для секции "Критерии Приемлемости" на странице.',
));

endif;
?>