<?php
/**
 * Registers ACF fields for the footer.
 * Fields are attached to the 'page' post type.
 * This version is compatible with the free version of ACF,
 * using individual fields instead of repeaters.
 */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_footer_fields',
    'title' => 'Footer Settings',
    'fields' => array(
        // Column 1: Logo and Contact
        array(
            'key' => 'field_footer_column1_heading',
            'label' => 'Column 1 Settings',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте заголовок и контактную информацию для первой колонки.',
        ),
        array(
            'key' => 'field_footer_column_1_main_title',
            'label' => 'Main Footer Title',
            'name' => 'column_1_main_title',
            'type' => 'text',
            'instructions' => 'Основной заголовок в футере. Например: Guvernul Republicii Moldova',
            'default_value' => 'Guvernul Republicii Moldova',
        ),
        array(
            'key' => 'field_footer_column_1_title',
            'label' => 'Column 1 Title',
            'name' => 'column_1_title',
            'type' => 'text',
            'instructions' => 'Заголовок первой колонки. Например: Ministerul Dezvoltării Economice și Digitalizării',
            'default_value' => 'Ministerul Dezvoltării Economice și Digitalizării',
        ),
        array(
            'key' => 'field_footer_address_text',
            'label' => 'Address Text',
            'name' => 'footer_address_text',
            'type' => 'text',
            'instructions' => 'Текст для адреса. Например: Piața Marii Adunări Naționale 1, Chișinău',
            'default_value' => 'Piața Marii Adunări Naționale 1, Chișinău',
            'prepend' => '📍',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_footer_address_url',
            'label' => 'Address URL',
            'name' => 'footer_address_url',
            'type' => 'text',
            'instructions' => 'URL для ссылки на карту.',
            'default_value' => 'https://maps.app.goo.gl/7TyXM8mixuPyUkJe6',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_footer_phone_text',
            'label' => 'Phone Number Text',
            'name' => 'footer_phone_text',
            'type' => 'text',
            'instructions' => 'Текст для номера телефона. Например: +373 22 250 360',
            'default_value' => '+373 22 250 360',
            'prepend' => '📞',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_footer_phone_url',
            'label' => 'Phone Number URL',
            'name' => 'footer_phone_url',
            'type' => 'text',
            'instructions' => 'URL для ссылки на телефон.',
            'default_value' => 'tel:+37322250360',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_footer_email_text',
            'label' => 'Email Address Text',
            'name' => 'footer_email_text',
            'type' => 'text',
            'instructions' => 'Текст для адреса электронной почты. Например: office@mded.gov.md',
            'default_value' => 'office@mded.gov.md',
            'prepend' => '✉️',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_footer_email_url',
            'label' => 'Email Address URL',
            'name' => 'footer_email_url',
            'type' => 'text',
            'instructions' => 'URL для ссылки на электронную почту.',
            'default_value' => 'mailto:office@mded.gov.md',
            'wrapper' => array('width' => '50'),
        ),

        // Column 2: Partners (fixed number of fields)
        array(
            'key' => 'field_footer_column2_heading',
            'label' => 'Column 2 Settings',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте заголовок и список партнеров для второй колонки.',
        ),
        array(
            'key' => 'field_footer_column_2_title',
            'label' => 'Column 2 Title',
            'name' => 'column_2_title',
            'type' => 'text',
            'instructions' => 'Заголовок второй колонки. Например: Parteneri',
            'default_value' => 'Parteneri',
        ),
        array('key' => 'field_footer_partner_1', 'label' => 'Partner 1', 'name' => 'footer_partner_1', 'type' => 'text', 'default_value' => 'Agenția de Investiții'),
        array('key' => 'field_footer_partner_2', 'label' => 'Partner 2', 'name' => 'footer_partner_2', 'type' => 'text', 'default_value' => 'Camera de Comerț'),
        array('key' => 'field_footer_partner_3', 'label' => 'Partner 3', 'name' => 'footer_partner_3', 'type' => 'text', 'default_value' => 'ODIMM'),
        array('key' => 'field_footer_partner_4', 'label' => 'Partner 4', 'name' => 'footer_partner_4', 'type' => 'text', 'default_value' => 'FIA'),
        array('key' => 'field_footer_partner_5', 'label' => 'Partner 5', 'name' => 'footer_partner_5', 'type' => 'text', 'default_value' => 'USAID'),
        array('key' => 'field_footer_partner_6', 'label' => 'Partner 6', 'name' => 'footer_partner_6', 'type' => 'text', 'default_value' => 'Banca Mondială'),

        // Column 3: E-Government Sites (fixed number of fields)
        array(
            'key' => 'field_footer_column3_heading',
            'label' => 'Column 3 Settings',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте заголовок и список сайтов для третьей колонки.',
        ),
        array(
            'key' => 'field_footer_column_3_title',
            'label' => 'Column 3 Title',
            'name' => 'column_3_title',
            'type' => 'text',
            'instructions' => 'Заголовок третьей колонки. Например: Site-uri E-Government',
            'default_value' => 'Site-uri E-Government',
        ),
        array('key' => 'field_egov_site_1_name', 'label' => 'Site 1 Name', 'name' => 'egov_site_1_name', 'type' => 'text', 'default_value' => 'gov.md', 'wrapper' => array('width' => '50')),
        array('key' => 'field_egov_site_1_url', 'label' => 'Site 1 URL', 'name' => 'egov_site_1_url', 'type' => 'text', 'default_value' => 'https://gov.md', 'wrapper' => array('width' => '50')),
        array('key' => 'field_egov_site_2_name', 'label' => 'Site 2 Name', 'name' => 'egov_site_2_name', 'type' => 'text', 'default_value' => 'servicii.gov.md', 'wrapper' => array('width' => '50')),
        array('key' => 'field_egov_site_2_url', 'label' => 'Site 2 URL', 'name' => 'egov_site_2_url', 'type' => 'text', 'default_value' => 'https://servicii.gov.md', 'wrapper' => array('width' => '50')),
        array('key' => 'field_egov_site_3_name', 'label' => 'Site 3 Name', 'name' => 'egov_site_3_name', 'type' => 'text', 'default_value' => 'date.gov.md', 'wrapper' => array('width' => '50')),
        array('key' => 'field_egov_site_3_url', 'label' => 'Site 3 URL', 'name' => 'egov_site_3_url', 'type' => 'text', 'default_value' => 'https://date.gov.md', 'wrapper' => array('width' => '50')),
        array('key' => 'field_egov_site_4_name', 'label' => 'Site 4 Name', 'name' => 'egov_site_4_name', 'type' => 'text', 'default_value' => 'particip.gov.md', 'wrapper' => array('width' => '50')),
        array('key' => 'field_egov_site_4_url', 'label' => 'Site 4 URL', 'name' => 'egov_site_4_url', 'type' => 'text', 'default_value' => 'https://particip.gov.md', 'wrapper' => array('width' => '50')),
        array('key' => 'field_egov_site_5_name', 'label' => 'Site 5 Name', 'name' => 'egov_site_5_name', 'type' => 'text', 'default_value' => 'cancelaria.gov.md', 'wrapper' => array('width' => '50')),
        array('key' => 'field_egov_site_5_url', 'label' => 'Site 5 URL', 'name' => 'egov_site_5_url', 'type' => 'text', 'default_value' => 'https://cancelaria.gov.md', 'wrapper' => array('width' => '50')),

        // Column 4: Legal Info
        array(
            'key' => 'field_footer_column4_heading',
            'label' => 'Column 4 Settings',
            'name' => '',
            'type' => 'message',
            'message' => 'Настройте заголовок и юридическую информацию для четвертой колонки.',
        ),
        array(
            'key' => 'field_footer_column_4_title',
            'label' => 'Column 4 Title',
            'name' => 'column_4_title',
            'type' => 'text',
            'instructions' => 'Заголовок четвертой колонки. Например: Informații legale',
            'default_value' => 'Informații legale',
        ),
        array(
            'key' => 'field_footer_copyright_text',
            'label' => 'Copyright Text',
            'name' => 'footer_copyright_text',
            'type' => 'text',
            'instructions' => 'Текст авторского права. Например: Toate drepturile rezervate',
            'default_value' => 'Toate drepturile rezervate',
        ),
        array(
            'key' => 'field_footer_privacy_text',
            'label' => 'Privacy Policy Text',
            'name' => 'footer_privacy_text',
            'type' => 'text',
            'instructions' => 'Текст для ссылки на политику конфиденциальности.',
            'default_value' => 'Politica de confidențialitate',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_footer_privacy_url',
            'label' => 'Privacy Policy URL',
            'name' => 'footer_privacy_url',
            'type' => 'text',
            'instructions' => 'URL для ссылки на политику конфиденциальности.',
            'default_value' => '#',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_footer_terms_text',
            'label' => 'Terms and Conditions Text',
            'name' => 'footer_terms_text',
            'type' => 'text',
            'instructions' => 'Текст для ссылки на условия и положения.',
            'default_value' => 'Termeni și condiții',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_footer_terms_url',
            'label' => 'Terms and Conditions URL',
            'name' => 'footer_terms_url',
            'type' => 'text',
            'instructions' => 'URL для ссылки на условия и положения.',
            'default_value' => '#',
            'wrapper' => array('width' => '50'),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'page',
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
    'description' => 'Fields for the footer content, compatible with the free version of ACF.',
));

endif;
?>
