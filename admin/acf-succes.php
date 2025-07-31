<?php
/**
 * Custom styles and scripts for ACF field group "Istorie de succes" (ID: group_68871d1d6100e).
 */

function post_of_edit_succes() {
    // ВАЖНО: Убедитесь, что ID группы полей совпадает: acf-group_68871d1d6100e
    // Если вам нужны специфические стили для контейнера этой группы, добавьте их здесь
    // Например, если вы хотите изменить фон всего блока:
    // #acf-group_68871d1d6100e .inside {
    //     background-color: #f0f8ff; /* Пример: легкий голубой фон */
    //     padding: 20px;
    // }

    // Ниже примеры стилей для отдельных полей, адаптированные под ваши поля "Istorie de succes"
    // Эти стили можно настроить по вашему усмотрению, чтобы улучшить визуальное представление в админке.
    $css_styles = '
    #acf-group_68871d1d6100e.postbox {
    display:flex;
    flex-direction: column;
    align-items: center;
}


/* Скрыть все лейблы в нужной группе */
#acf-group_68871d1d6100e .acf-label {
  display: none !important;
}

#acf-group_68871d1d6100e .inside {
     background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    font-family: Arial, sans-serif;
    color: #333;
    
}

#acf-group_68871d1d6100e .acf-field[data-name="support_percenеnt"] {
    background-color: #007bff;
    color: #fff;
    padding: 20px;
    position: relative;
    padding-top: 60px;
    padding-bottom: 50px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}

#acf-group_68871d1d6100e .acf-field[data-name="support_percenеnt"] .acf-input {
    text-align: center;
    font-size: 1.2em;
    font-weight: bold;
    position: absolute;
    top: 20px;
    right: 20px;
    background-color: rgba(255, 255, 255, 0.2);
    padding: 8px 15px;
    
    border-radius: 20px;
}

#acf-group_68871d1d6100e .acf-field[data-name="tittle_company"] {
    font-size: 2.2em;
    font-weight: bold;
    color: #fff;
    padding: 0 20px;
    position: relative;
    z-index: 1;
    border: none;
    background-color: #007bff;
}

#acf-group_68871d1d6100e .acf-field[data-name="sector"] {
    font-size: 1.2em;
    color: rgba(255, 255, 255, 0.8);
    padding: 0 20px 20px;
    margin-top: -5px;
    background-color: #007bff;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

#acf-group_68871d1d6100e .acf-field[data-name="description"] {
    padding: 20px;
    line-height: 1.6;
    color: #555;
    background-color: #fff;
}
#acf-group_68871d1d6100e .acf-field[data-name="description"] .acf-input input[type="text"]{
    width: 100%;
}

#acf-group_68871d1d6100e .acf-field[data-name="investment"],
#acf-group_68871d1d6100e .acf-field[data-name="jobs"] {
    display: inline-block;
    width: calc(50% - 25px);
    padding: 15px 10px;
    margin: 10px;
    border-radius: 10px;
    text-align: center;
    box-sizing: border-box;
}
#acf-group_68871d1d6100e .acf-field[data-name="investment"] input[type="number"],
#acf-group_68871d1d6100e .acf-field[data-name="jobs"] input[type="number"]  {
    width: 100%;
    
}

#acf-group_68871d1d6100e .acf-field[data-name="investment"] {
    background-color: #e0f2f7;
    color: #007bff;
    font-weight: bold;
    font-size: 1.4em;
}

#acf-group_68871d1d6100e .acf-field[data-name="investment"] .acf-input-wrap::after {
    content: " MDL investiție";
    display: block;
    font-size: 0.7em;
    font-weight: normal;
    color: #666;
}

#acf-group_68871d1d6100e .acf-field[data-name="jobs"] {
    background-color: #e6ffe6;
    color: #28a745;
    font-weight: bold;
    font-size: 1.4em;
}

#acf-group_68871d1d6100e .acf-field[data-name="jobs"] .acf-input-wrap::after {
    content: " locuri muncă";
    display: block;
    font-size: 0.7em;
    font-weight: normal;
    color: #666;
}

#acf-group_68871d1d6100e .acf-field[data-name="aid_granted"] {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    border-top: 1px solid #eee;
    margin-top: 10px;
}

#acf-group_68871d1d6100e .acf-field[data-name="aid_granted"] .acf-label label {
    display: block;
    font-weight: normal;
    color: #555;
    font-size: 1em;
}

#acf-group_68871d1d6100e .acf-field[data-name="aid_granted"] .acf-input {
    font-weight: bold;
    color: #333;
    font-size: 1.2em;
    text-align: right;
    color: #28a745;
}

#acf-group_68871d1d6100e .acf-field[data-name="aid_granted"] .acf-input-wrap::after {
    content: " M MDL";
}
#acf-group_68871d1d6100e .acf-field[data-name="aid_granted"] .acf-input-wrap::before {
    content: "Ajutor acordat: ";
    font-weight: normal;
    color: #555;
    font-size: 0.9em;
}

#acf-group_68871d1d6100e .acf-field[data-name="color"] {
    display: block;
}

#acf-group_68871d1d6100e .acf-input input[type="number"],
#acf-group_68871d1d6100e .acf-input input[type="text"] {

    background: none;
    font-size: inherit;
    font-weight: inherit;
    color: inherit;
    width: auto;
    padding: 0;
    margin: 0;
    box-shadow: none;
    text-align: inherit;
    -moz-appearance: textfield;
}


#acf-group_68871d1d6100e .acf-input input[type="number"]::-webkit-outer-spin-button,
#acf-group_68871d1d6100e .acf-input input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

#acf-group_68871d1d6100e .acf-field[data-name="support_percenеnt"] .acf-input-wrap:after {
    content: attr(data-value) "% sprijin";
}
    ';

    echo '<style type="text/css">' . $css_styles . '</style>';
}

// Добавляем JavaScript для управления отображением группы полей в админке ACF
add_action('admin_head', 'post_of_edit_succes');
