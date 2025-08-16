document.querySelectorAll('[data-coreui-theme-value]').forEach(btn => {
    btn.addEventListener('click', () => {
        const theme = btn.getAttribute('data-coreui-theme-value');
        document.documentElement.setAttribute('data-coreui-theme', theme);
        document.querySelectorAll('[data-coreui-theme-value]').forEach(el => el.classList.remove('active'));
        btn.classList.add('active');
    });
});