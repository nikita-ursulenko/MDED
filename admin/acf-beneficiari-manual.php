<?php
/**
 * Регистрация ACF полей для секции "Cine poate beneficia?"
 * (Who can benefit?)
 * Для БЕСПЛАТНОЙ версии ACF.
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_beneficiaries_section',
    'title' => 'Beneficiari', // Title in WP Admin
    'fields' => array(
        // --- SECTION MAIN TITLE & DESCRIPTION ---
        array(
            'key' => 'field_beneficiaries_main_title_heading',
            'label' => 'Основной заголовок и описание секции',
            'name' => '', // Message field doesn't need a name
            'type' => 'message',
            'message' => 'Настройте главный заголовок и вступительный текст секции "Cine poate beneficia?".',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_beneficiaries_main_title',
            'label' => 'Основной заголовок',
            'name' => 'beneficiaries_main_title',
            'type' => 'text',
            'instructions' => 'Введите главный заголовок секции, например: "Cine poate beneficia?".',
            'required' => 0,
            'placeholder' => 'Cine poate beneficia?',
        ),
        array(
            'key' => 'field_beneficiaries_main_description',
            'label' => 'Основное описание',
            'name' => 'beneficiaries_main_description',
            'type' => 'textarea',
            'instructions' => 'Введите вступительный текст секции. Поддерживает переносы строк.',
            'required' => 0,
            'rows' => 4,
            'new_lines' => 'wpautop', // This will convert new lines to <p> tags
            'placeholder' => 'Programul „Ajutor de Stat pentru Industrie" se adresează unei game variate de investitori...',
        ),

        // --- CARD 1: Companii naționale (National Companies) ---
        array(
            'key' => 'field_beneficiaries_card1_group_heading',
            'label' => 'Карточка 1: Companii naționale',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте содержимое первой интерактивной карточки.',
            'new_lines' => 'wpautop',
        ),
        // Note: SVG icon is hardcoded as it's complex for ACF image field without Pro/custom rendering
        array(
            'key' => 'field_beneficiaries_card1_title',
            'label' => 'Карточка 1: Заголовок',
            'name' => 'beneficiaries_card1_title',
            'type' => 'text',
            'placeholder' => 'Companii naționale',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card1_short_desc',
            'label' => 'Карточка 1: Короткое описание',
            'name' => 'beneficiaries_card1_short_desc',
            'type' => 'textarea',
            'placeholder' => 'Companiile din Moldova care doresc să se extindă...',
            'instructions' => 'Короткий текст, видимый до клика.',
            'rows' => 3,
            'new_lines' => 'wpautop',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card1_extended_title',
            'label' => 'Карточка 1: Заголовок расширенного описания',
            'name' => 'beneficiaries_card1_extended_title',
            'type' => 'text',
            'placeholder' => 'Avantaje pentru companiile naționale:',
            'required' => 0,
        ),
        // For list items, we'll use individual text fields. You can add more if needed.
        array(
            'key' => 'field_beneficiaries_card1_point1',
            'label' => 'Карточка 1: Название пунктов 1',
            'name' => 'beneficiaries_card1_point1',
            'type' => 'text',
            'placeholder' => 'Cunoașterea pieței locale și a reglementărilor',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card1_point2',
            'label' => 'Карточка 1: Пункт списка 2',
            'name' => 'beneficiaries_card1_point2',
            'type' => 'text',
            'placeholder' => 'Rețele de distribuție și parteneri existenți',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card1_point3',
            'label' => 'Карточка 1: Пункт списка 3',
            'name' => 'beneficiaries_card1_point3',
            'type' => 'text',
            'placeholder' => 'Forță de muncă locală calificată',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card1_point4',
            'label' => 'Карточка 1: Пункт списка 4',
            'name' => 'beneficiaries_card1_point4',
            'type' => 'text',
            'placeholder' => 'Sprijin prioritar pentru dezvoltarea regională',
            'required' => 0,
        ),

        // --- CARD 2: Investitori internaționali (International Investors) ---
        array(
            'key' => 'field_beneficiaries_card2_group_heading',
            'label' => 'Карточка 2: Investitori internaționali',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте содержимое второй интерактивной карточки.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_beneficiaries_card2_title',
            'label' => 'Карточка 2: Заголовок',
            'name' => 'beneficiaries_card2_title',
            'type' => 'text',
            'placeholder' => 'Investitori internaționali',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card2_short_desc',
            'label' => 'Карточка 2: Короткое описание',
            'name' => 'beneficiaries_card2_short_desc',
            'type' => 'textarea',
            'placeholder' => 'Oferim un cadru stabil și predictibil pentru investitorii internaționali...',
            'instructions' => 'Короткий текст, видимый до клика.',
            'rows' => 3,
            'new_lines' => 'wpautop',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card2_extended_title',
            'label' => 'Карточка 2: Заголовок расширенного описания',
            'name' => 'beneficiaries_card2_extended_title',
            'type' => 'text',
            'placeholder' => 'De ce să investești în Moldova:',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card2_point1',
            'label' => 'Карточка 2: Название пунктов 2',
            'name' => 'beneficiaries_card2_point1',
            'type' => 'text',
            'placeholder' => 'Acces preferențial la piața UE și CSI',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card2_point2',
            'label' => 'Карточка 2: Пункт списка 2',
            'name' => 'beneficiaries_card2_point2',
            'type' => 'text',
            'placeholder' => 'Costuri competitive de producție',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card2_point3',
            'label' => 'Карточка 2: Пункт списка 3',
            'name' => 'beneficiaries_card2_point3',
            'type' => 'text',
            'placeholder' => 'Forță de muncă educată și multilingvă',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card2_point4',
            'label' => 'Карточка 2: Пункт списка 4',
            'name' => 'beneficiaries_card2_point4',
            'type' => 'text',
            'placeholder' => 'Cadru legal transparent și stabil',
            'required' => 0,
        ),

        // --- CARD 3: Diaspora ---
        array(
            'key' => 'field_beneficiaries_card3_group_heading',
            'label' => 'Карточка 3: Diaspora',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте содержимое третьей интерактивной карточки.',
            'new_lines' => 'wpautop',
        ),
        array(
            'key' => 'field_beneficiaries_card3_title',
            'label' => 'Карточка 3: Заголовок',
            'name' => 'beneficiaries_card3_title',
            'type' => 'text',
            'placeholder' => 'Diaspora',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card3_short_desc',
            'label' => 'Карточка 3: Короткое описание',
            'name' => 'beneficiaries_card3_short_desc',
            'type' => 'textarea',
            'placeholder' => 'Moldovenii din diaspora care doresc să revină acasă...',
            'instructions' => 'Короткий текст, видимый до клика.',
            'rows' => 3,
            'new_lines' => 'wpautop',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card3_extended_title',
            'label' => 'Карточка 3: Заголовок расширенного описания',
            'name' => 'beneficiaries_card3_extended_title',
            'type' => 'text',
            'placeholder' => 'Oportunități pentru diaspora:',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card3_point1',
            'label' => 'Карточка 3: Название пунктов 1',
            'name' => 'beneficiaries_card3_point1',
            'type' => 'text',
            'placeholder' => 'Transfer de know-how și tehnologii avansate',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card3_point2',
            'label' => 'Карточка 3: Пункт списка 2',
            'name' => 'beneficiaries_card3_point2',
            'type' => 'text',
            'placeholder' => 'Conexiuni internaționale pentru export',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card3_point3',
            'label' => 'Карточка 3: Пункт списка 3',
            'name' => 'beneficiaries_card3_point3',
            'type' => 'text',
            'placeholder' => 'Contribuție la dezvoltarea comunității natale',
            'required' => 0,
        ),
        array(
            'key' => 'field_beneficiaries_card3_point4',
            'label' => 'Карточка 3: Пункт списка 4',
            'name' => 'beneficiaries_card3_point4',
            'type' => 'text',
            'placeholder' => 'Sprijin special pentru investiții în raioane',
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
    'description' => 'Поля для секции "Кто может быть бенефициаром?" на странице.',
));

endif;
?>