function openGuideSidebar(content) {
    document.getElementById('guide-body').innerHTML = content;

    const sidebar = document.querySelector('.guide-sidebar');
    sidebar.classList.add('open');
}

function closeGuideSidebar() {
    const sidebar = document.querySelector('.guide-sidebar');
    sidebar.classList.remove('open');
}
