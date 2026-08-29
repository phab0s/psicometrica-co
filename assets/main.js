// Menú móvil compartido: abre/cierra la navegación y actualiza accesibilidad
const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
const navMenu = document.querySelector('.nav-menu');

if (mobileMenuBtn && navMenu) {
    mobileMenuBtn.addEventListener('click', () => {
        const abierto = navMenu.classList.toggle('active');
        mobileMenuBtn.setAttribute('aria-expanded', abierto ? 'true' : 'false');
        mobileMenuBtn.innerHTML = abierto ? '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
    });
}
