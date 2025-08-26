acf.addAction('ready', function($el) {
        const acfGroup = document.getElementById('acf-group_68851c4381739');
        if (!acfGroup) return;

        // Создаем обертку для нашего кастомного блока
        const heroWrap = document.createElement('div');
        heroWrap.id = 'hero-wrap';
        heroWrap.style.marginBottom = '20px'; // Add some space below for the inputs
        
        
            function checkAndToggle() {
                if (!acfGroup || !heroWrap) return;

                if (acfGroup.classList.contains('closed')) {
                    heroWrap.style.display = 'none';
                } else {
                    heroWrap.style.display = 'grid';
                }
            }

            // Первичная проверка
            checkAndToggle();

            // MutationObserver для отслеживания изменений класса
            const observer = new MutationObserver(checkAndToggle);
            observer.observe(acfGroup, {
                attributes: true,
                attributeFilter: ['class']
            });

            // Отслеживание кликов на toggle
            acfGroup.querySelectorAll('.handlediv, .acf-postbox-title').forEach(trigger => {
                trigger.addEventListener('click', () => {
                    setTimeout(checkAndToggle, 50); // подождем, пока класс обновится
                });
            });


        // Добавляем HTML для превью
        heroWrap.innerHTML = `
            <section id="hero" class="relative bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20 rounded-lg mb-8 px-8">
    <div class="absolute inset-0 bg-black/20 rounded-lg"></div>
    <div class="relative max-w-7xl mx-auto">
        <div class="text-center relative z-10">
            <input type="text" id="custom-hero-title" class="text-5xl md:text-6xl font-bold mb-8 leading-tight preview-input w-full bg-transparent text-white placeholder-white/70 focus:outline-none text-center" placeholder="Hero Title">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 my-16">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-8">
                    <input type="number" id="custom-counter1-value" class="text-5xl font-bold mb-3 preview-input w-full bg-transparent text-white placeholder-white/70 focus:outline-none text-center" placeholder="Counter 1 Value">
                    <input type="text" id="custom-counter1-label" class="text-xl preview-input w-full bg-transparent text-white placeholder-white/70 focus:outline-none text-center" placeholder="Counter 1 Label">
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-8">
                    <input type="number" id="custom-counter2-value" class="text-5xl font-bold mb-3 preview-input w-full bg-transparent text-white placeholder-white/70 focus:outline-none text-center" placeholder="Counter 2 Value">
                    <input type="text" id="custom-counter2-label" class="text-xl preview-input w-full bg-transparent text-white placeholder-white/70 focus:outline-none text-center" placeholder="Counter 2 Label">
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-8">
                    <input type="number" id="custom-counter3-value" class="text-5xl font-bold mb-3 preview-input w-full bg-transparent text-white placeholder-white/70 focus:outline-none text-center" placeholder="Counter 3 Value">
                    <input type="text" id="custom-counter3-label" class="text-xl preview-input w-full bg-transparent text-white placeholder-white/70 focus:outline-none text-center" placeholder="Counter 3 Label">
                </div>
            </div>
            <input type="text" id="custom-hero-button-text" class="bg-white text-blue-700 px-10 py-5 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-colors preview-input" placeholder="Button Text" style="width: auto; display: inline-block;">
            <input type="text" id="custom-hero-button-target" class="preview-input mt-4 block mx-auto text-blue-100 placeholder-blue-100/70 focus:outline-none text-center" placeholder="Button Target ID (#about)" style="width: auto; display: inline-block; background: none; border: 1px solid rgba(255, 255, 255, 0.3); padding: 8px 15px; border-radius: 5px;">
        </div>
    </div>
</section>
        `;

        // Вставляем сразу после блока ACF
        acfGroup.after(heroWrap);

        // Получаем оригинальные скрытые input из ACF по name
        const acfInputHeroTitle = document.querySelector('input[name="acf[field_68851def57021]"]');
        const acfInputCounter1Value = document.querySelector('input[name="acf[field_68851e3657022]"]');
        const acfInputCounter1Label = document.querySelector('input[name="acf[field_68851e3d57023]"]');
        const acfInputCounter2Value = document.querySelector('input[name="acf[field_68851e6e57025]"]');
        const acfInputCounter2Label = document.querySelector('input[name="acf[field_68851e7957026]"]');
        const acfInputCounter3Value = document.querySelector('input[name="acf[field_68851e7c57027]"]');
        const acfInputCounter3Label = document.querySelector('input[name="acf[field_68851e8257028]"]');
        const acfInputHeroButtonText = document.querySelector('input[name="acf[field_68851e8857029]"]');
        const acfInputHeroButtonTarget = document.querySelector('input[name="acf[field_68851e8e5702a]"]');

        // Получаем наши новые, видимые и изменяемые input-ы внутри превью
        const customInputHeroTitle = document.getElementById('custom-hero-title');
        const customInputCounter1Value = document.getElementById('custom-counter1-value');
        const customInputCounter1Label = document.getElementById('custom-counter1-label');
        const customInputCounter2Value = document.getElementById('custom-counter2-value');
        const customInputCounter2Label = document.getElementById('custom-counter2-label');
        const customInputCounter3Value = document.getElementById('custom-counter3-value');
        const customInputCounter3Label = document.getElementById('custom-counter3-label');
        const customInputHeroButtonText = document.getElementById('custom-hero-button-text');
        const customInputHeroButtonTarget = document.getElementById('custom-hero-button-target');

        // Сопоставление кастомных инпутов с оригинальными ACF инпутами
        const inputMap = [
            { custom: customInputHeroTitle, acf: acfInputHeroTitle, type: 'text' },
            { custom: customInputCounter1Value, acf: acfInputCounter1Value, type: 'number' },
            { custom: customInputCounter1Label, acf: acfInputCounter1Label, type: 'text' },
            { custom: customInputCounter2Value, acf: acfInputCounter2Value, type: 'number' },
            { custom: customInputCounter2Label, acf: acfInputCounter2Label, type: 'text' },
            { custom: customInputCounter3Value, acf: acfInputCounter3Value, type: 'number' },
            { custom: customInputCounter3Label, acf: acfInputCounter3Label, type: 'text' },
            { custom: customInputHeroButtonText, acf: acfInputHeroButtonText, type: 'text' },
            { custom: customInputHeroButtonTarget, acf: acfInputHeroButtonTarget, type: 'text' }
        ];

        // Функция обновления скрытых ACF input-ов из видимых кастомных
        function updateAcfFields() {
            inputMap.forEach(item => {
                if (item.custom && item.acf) {
                    item.acf.value = item.custom.value;

                    // Важно: запускаем события 'input' и 'change' на скрытых полях ACF.
                    // Это имитирует взаимодействие пользователя и заставляет ACF сохранять изменения.
                    const inputEvent = new Event('input', { bubbles: true });
                    item.acf.dispatchEvent(inputEvent);
                    const changeEvent = new Event('change', { bubbles: true });
                    item.acf.dispatchEvent(changeEvent);
                }
            });

            // Обновляем поведение кнопки
            if (customInputHeroButtonTarget && document.getElementById('hero-button-preview')) {
                document.getElementById('hero-button-preview').onclick = () => {
                    const el = document.getElementById(customInputHeroButtonTarget.value.replace('#', ''));
                    if (el) el.scrollIntoView({ behavior: 'smooth' });
                };
            }
        }

        // Функция инициализации: загрузка значений из скрытых ACF input-ов в видимые кастомные инпуты
        function initializeCustomInputs() {
            inputMap.forEach(item => {
                if (item.custom && item.acf) {
                    item.custom.value = item.acf.value;
                }
            });
            // Изначально обновляем поля ACF, чтобы убедиться, что они синхронизированы
            // Это важно, если ACF поле было предзаполнено базовым значением
            updateAcfFields();
        }

        // Навешиваем слушатели на кастомные input, чтобы обновлять скрытые ACF инпуты
        inputMap.forEach(item => {
            if (item.custom) {
                item.custom.addEventListener('input', updateAcfFields);
                item.custom.addEventListener('change', updateAcfFields); // Добавляем change для большей надёжности
            }
        });

        // Запускаем инициализацию после загрузки DOM
        initializeCustomInputs();

        // Дополнительно: слушаем изменения в ACF (например, от визуальных редакторов, если они есть)
        // Если ACF изменяет свои поля по своей внутренней логике, мы должны обновить и наши кастомные инпуты.
        if (typeof acf !== 'undefined') {
            acf.add_action('change', function($el){
                const changedAcfField = $el[0]; // Элемент DOM, который изменился в ACF
                inputMap.forEach(item => {
                    // Если изменилось оригинальное ACF поле, обновляем соответствующий кастомный инпут
                    if (item.acf && item.custom && item.acf === changedAcfField) {
                        item.custom.value = item.acf.value;
                    }
                });
                updateAcfFields(); // После обновления кастомных инпутов, снова синхронизируем их с ACF
            });
        }
        window.addEventListener('error', function(event) {
    if (event.message && event.message.includes('Failed to update _acf_changed meta')) {
        event.preventDefault();
        // Можно добавить console.log('Игнорируем ACF ошибку');
        return false; // подавляем ошибку в консоли
    }
});
    });