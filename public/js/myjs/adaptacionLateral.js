const sidebar = document.getElementById('sidebar');
const mainContent = document.getElementById('mainContent');

sidebar.addEventListener('mouseenter', () => {
    sidebar.classList.add('expanded');
    mainContent.classList.add('shifted');
});

sidebar.addEventListener('mouseleave', () => {
    sidebar.classList.remove('expanded');
    mainContent.classList.remove('shifted');
});