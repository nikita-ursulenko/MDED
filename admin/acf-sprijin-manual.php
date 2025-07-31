<?php
/**
 * Регистрация ACF полей для секции "Как структурирован финансовый стимул?"
 * (How financial support is structured?)
 * Для БЕСПЛАТНОЙ версии ACF.
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_financial_support_structure',
    'title' => 'Structura Suportului Financiar', // Title in WP Admin
    'fields' => array(
        // --- SECTION MAIN TITLE ---
        array(
            'key' => 'field_fss_main_title',
            'label' => 'Заголовок секции',
            'name' => 'fss_main_title',
            'type' => 'text',
            'instructions' => 'Введите заголовок для секции, например: "Cum este structurat sprijinul financiar?".',
            'required' => 0,
            'placeholder' => 'Cum este structurat sprijinul financiar?',
        ),

        // --- BUDGET BLOCK ---
        array(
            'key' => 'field_fss_budget_group_heading',
            'label' => 'Блок: Общий бюджет программы',
            'name' => '', // Message field doesn't need a name
            'type' => 'message',
            'message' => 'Настройте блок с информацией об общем бюджете программы.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_fss_budget_title',
            'label' => 'Бюджет: Заголовок',
            'name' => 'fss_budget_title',
            'type' => 'text',
            'placeholder' => 'Buget total al programului',
            'required' => 0,
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_fss_budget_mdl',
            'label' => 'Бюджет: Сумма в MDL',
            'name' => 'fss_budget_mdl',
            'type' => 'text',
            'placeholder' => '2 miliarde MDL',
            'instructions' => 'Например: "2 miliarde MDL".',
            'required' => 0,
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_fss_budget_euro',
            'label' => 'Бюджет: Сумма в EUR',
            'name' => 'fss_budget_euro',
            'type' => 'text',
            'placeholder' => '(aproximativ 100 milioane euro)',
            'instructions' => 'Например: "(aproximativ 100 milioane euro)".',
            'required' => 0,
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_fss_budget_note',
            'label' => 'Бюджет: Примечание',
            'name' => 'fss_budget_note',
            'type' => 'textarea',
            'placeholder' => 'cu posibilitatea de extindere în funcție de cererea înregistrată',
            'rows' => 2,
            'new_lines' => 'wpautop',
            'required' => 0,
            'wrapper' => array('width' => '50'),
        ),

        // --- CARD 1: Sprijin de stat (State Support) ---
        array(
            'key' => 'field_fss_card1_group_heading',
            'label' => 'Карточка 1: Sprijin de stat',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте первую карточку: "Sprijin de stat".',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_fss_card1_percentage',
            'label' => 'Карточка 1: Процент (для круга)',
            'name' => 'fss_card1_percentage',
            'type' => 'text',
            'placeholder' => '60%',
            'instructions' => 'Введите процент (например, "60%").',
            'required' => 0,
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_fss_card1_title',
            'label' => 'Карточка 1: Заголовок',
            'name' => 'fss_card1_title',
            'type' => 'text',
            'placeholder' => 'Sprijin de stat',
            'required' => 0,
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_fss_card1_main_text',
            'label' => 'Карточка 1: Основной текст',
            'name' => 'fss_card1_main_text',
            'type' => 'textarea', // Changed to textarea based on your preference
            'placeholder' => 'Statul va restitui până la **60%** din suma investiției realizate',
            'instructions' => 'Введите основной текст. Используйте **две звездочки** для жирного текста.',
            'rows' => 3,
            'new_lines' => 'wpautop', // Convert new lines to HTML paragraphs/breaks
            'required' => 0,
        ),
        array(
            'key' => 'field_fss_card1_point1',
            'label' => 'Карточка 1: Пункт списка 1',
            'name' => 'fss_card1_point1',
            'type' => 'text',
            'placeholder' => 'Sprijin maxim pentru dezvoltarea industrială',
            'required' => 0,
        ),
        array(
            'key' => 'field_fss_card1_point2',
            'label' => 'Карточка 1: Пункт списка 2',
            'name' => 'fss_card1_point2',
            'type' => 'text',
            'placeholder' => 'Variază în funcție de regiune și dimensiunea companiei',
            'required' => 0,
        ),
        // Adding more points if needed:
        // array(
        //     'key' => 'field_fss_card1_point3',
        //     'label' => 'Карточка 1: Пункт списка 3',
        //     'name' => 'fss_card1_point3',
        //     'type' => 'text',
        //     'required' => 0,
        // ),


        // --- CARD 2: Grant nerambursabil (Non-reimbursable Grant) ---
        array(
            'key' => 'field_fss_card2_group_heading',
            'label' => 'Карточка 2: Grant nerambursabil',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте вторую карточку: "Grant nerambursabil".',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_fss_card2_percentage',
            'label' => 'Карточка 2: Процент',
            'name' => 'fss_card2_percentage',
            'type' => 'text',
            'placeholder' => '25%',
            'instructions' => 'Введите процент (например, "25%").',
            'required' => 0,
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_fss_card2_title',
            'label' => 'Карточка 2: Заголовок',
            'name' => 'fss_card2_title',
            'type' => 'text',
            'placeholder' => 'Grant nerambursabil',
            'required' => 0,
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_fss_card2_point1',
            'label' => 'Карточка 2: Пункт списка 1',
            'name' => 'fss_card2_point1',
            'type' => 'text',
            'placeholder' => 'Acordat imediat după începerea implementării investiției eligibile',
            'required' => 0,
        ),
        array(
            'key' => 'field_fss_card2_point2',
            'label' => 'Карточка 2: Пункт списка 2',
            'name' => 'fss_card2_point2',
            'type' => 'text',
            'placeholder' => 'Nu necesită rambursare',
            'required' => 0,
        ),
        array(
            'key' => 'field_fss_card2_point3',
            'label' => 'Карточка 2: Пункт списка 3',
            'name' => 'fss_card2_point3',
            'type' => 'text',
            'placeholder' => 'Sprijin direct pentru cash-flow',
            'required' => 0,
        ),

        // --- CARD 3: Facilitate fiscală (Tax Facility) ---
        array(
            'key' => 'field_fss_card3_group_heading',
            'label' => 'Карточка 3: Facilitate fiscală',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте третью карточку: "Facilitate fiscală".',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_fss_card3_percentage',
            'label' => 'Карточка 3: Процент',
            'name' => 'fss_card3_percentage',
            'type' => 'text',
            'placeholder' => '75%',
            'instructions' => 'Введите процент (например, "75%").',
            'required' => 0,
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_fss_card3_title',
            'label' => 'Карточка 3: Заголовок',
            'name' => 'fss_card3_title',
            'type' => 'text',
            'placeholder' => 'Facilitate fiscală',
            'required' => 0,
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_fss_card3_point1',
            'label' => 'Карточка 3: Пункт списка 1',
            'name' => 'fss_card3_point1',
            'type' => 'text',
            'placeholder' => 'Scutire parțială de la plata impozitului pe venit',
            'required' => 0,
        ),
        array(
            'key' => 'field_fss_card3_point2',
            'label' => 'Карточка 3: Пункт списка 2',
            'name' => 'fss_card3_point2',
            'type' => 'text',
            'placeholder' => 'Echivalent cu o reducere de 50%',
            'required' => 0,
        ),
        array(
            'key' => 'field_fss_card3_point3',
            'label' => 'Карточка 3: Пункт списка 3',
            'name' => 'fss_card3_point3',
            'type' => 'text',
            'placeholder' => 'Sustenabilitate bugetară pe termen lung',
            'required' => 0,
        ),

        // --- ADVANTAGES BLOCK ---
        array(
            'key' => 'field_fss_advantages_group_heading',
            'label' => 'Блок: Преимущества механизма',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте блок "Avantajele mecanismului mixt".',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_fss_advantages_title',
            'label' => 'Примечания: Заголовок',
            'name' => 'fss_advantages_title',
            'type' => 'text',
            'placeholder' => 'Avantajele mecanismului mixt',
            'required' => 0,
        ),
        array(
            'key' => 'field_fss_advantages_text',
            'label' => 'Примечания: Текст',
            'name' => 'fss_advantages_text',
            'type' => 'textarea',
            'placeholder' => 'Acest mecanism mixt (grant + facilitate fiscală) asigură atât **flexibilitate pentru companii**, cât și **sustenabilitate bugetară**, fiind aliniat cu bunele practici europene în domeniul ajutorului de stat.',
            'instructions' => 'Введите текст. Используйте **две звездочки** для жирного текста.',
            'rows' => 4,
            'new_lines' => 'wpautop',
            'required' => 0,
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
    'description' => 'Поля для секции "Как структурирован финансовый стимул?" на странице.',
));

endif;

add_action('acf/input/admin_head', function () {
    ?>
    <style>
        /* Применяем стиль по data-key */
        [data-key="field_fss_budget_group_heading"],
        [data-key="field_fss_budget_title"],
        [data-key="field_fss_budget_mdl"],
        [data-key="field_fss_budget_euro"],
        [data-key="field_fss_budget_note"] {
            color: white;
            background-color: rgb(30, 64, 175);
        }

        [data-key="field_fss_card1_group_heading"],
        [data-key="field_fss_card1_percentage"],
        [data-key="field_fss_card1_title"],
        [data-key="field_fss_card1_main_text"],
        [data-key="field_fss_card1_point1"],
        [data-key="field_fss_card1_point2"] {
            background-color: rgb(243, 232, 255);
        }
        </style>
    <?php
});
?>