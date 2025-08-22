// header-menu.js
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu functionality
    const burgerButton = document.getElementById('burger-button');
    const closeMenuButton = document.getElementById('close-menu');
    const mobileMenu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('overlay');
    const navLinks = mobileMenu.querySelectorAll('a[href^="#"]'); // Выбираем все якорные ссылки внутри мобильного меню

    // --- Анимация бургера и открытие/закрытие меню ---

    // Function to open the mobile menu
    burgerButton.addEventListener('click', () => {
        mobileMenu.classList.add('open');
        overlay.classList.add('show'); // Use 'show' to display the overlay
        overlay.classList.remove('hidden'); // Ensure 'hidden' is removed if it was there
        burgerButton.classList.add('active'); // Activate burger animation
        // Add class for open animation, if needed via CSS
        mobileMenu.classList.add('animate-in');
        mobileMenu.classList.remove('animate-out'); // Ensure 'animate-out' is removed
    });

    // Function to close the mobile menu
    function closeMenu() {
        // Remove class for open animation, if needed via CSS
        mobileMenu.classList.remove('animate-in');
        // Add class for close animation
        mobileMenu.classList.add('animate-out');

        // Wait for the close animation to finish, then remove classes
        // This duration (300ms) should match your CSS transition-duration for closing.
        // It returns a Promise that resolves after the animation duration.
        return new Promise(resolve => {
            setTimeout(() => {
                mobileMenu.classList.remove('open', 'animate-out');
                overlay.classList.remove('show'); // Hide the overlay
                overlay.classList.add('hidden'); // Add 'hidden' back if you prefer this approach
                burgerButton.classList.remove('active');
                resolve(); // Resolve the promise once menu is fully closed
            }, 300); // Must match the CSS duration for the closing animation
        });
    }

    closeMenuButton.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);
    // закрываем меню при нажатии на nav ссылки
    // Добавляем обработчик событий для каждой ссылки в мобильном меню

    // Close menu if window is resized to a larger screen
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) { // lg breakpoint Tailwind CSS
            closeMenu();
        }
    });

    // Smooth scrolling and closing menu on link click
    // Добавляем обработчик событий для каждой ссылки в мобильном меню
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
 // Отменяем стандартное поведение ссылки (резкий переход)
            const targetId = this.getAttribute('href'); // Получаем ID целевого элемента (например, "#about-us")
            const targetElement = document.querySelector(targetId); // Находим сам элемент на странице

            if (targetElement) {
                // Сначала закрываем меню, затем прокручиваем
                closeMenu().then(() => { // closeMenu теперь возвращает Promise
                    // Выполняем плавную прокрутку к целевому элементу после закрытия меню
                    targetElement.scrollIntoView({
                        behavior: 'smooth', // Самое главное - это делает прокрутку плавной
                        block: 'start'      // Прокручивает до начала элемента
                    });
                });
            }
        });
    });


    const header = document.getElementById('header');
    const breakpoint = 1024; // Порог для мобильных устройств

    function handleScroll() {
      if (window.innerWidth <= breakpoint) {
        
        if (window.scrollY > 0) {
          header.classList.add('fixed');
        } else {
          header.classList.remove('fixed');
        }
      } else {
        header.classList.remove('fixed');
      }
    }

    window.addEventListener('scroll', handleScroll);
    window.addEventListener('resize', handleScroll);
    handleScroll(); // Инициализация при загрузке страницы
});