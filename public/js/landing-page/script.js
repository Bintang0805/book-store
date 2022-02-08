function openSidebar() {
    const sidebar = document.getElementById('sidebar');
    const sidebarBackground = document.getElementById('sidebar-background');
    const smNav = document.getElementById('navbar-sm');
    const main = document.getElementById('main');
    const body = document.getElementById('body');

    sidebar.classList.remove('translate-x-[100%]');
    sidebar.style.transitionDuration = "400ms";
    sidebarBackground.classList.remove('hidden');
    main.classList.add('overflow-hidden');
    body.classList.add('overflow-hidden');
    smNav.classList.add('hidden');
}

function closeSidebar() {
    const sidebar = document.getElementById('sidebar');
    const sidebarBackground = document.getElementById('sidebar-background');
    const smNav = document.getElementById('navbar-sm');
    const main = document.getElementById('main');
    const body = document.getElementById('body');

    sidebar.classList.add('translate-x-[100%]');
    sidebar.style.transitionDuration = "400ms";
    sidebarBackground.classList.add('hidden');
    main.classList.remove('overflow-hidden');
    body.classList.remove('overflow-hidden');
    smNav.classList.remove('hidden');
}
