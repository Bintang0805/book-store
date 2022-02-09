function hiddenSidebar() {
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');


    if (sidebar.classList == "col-span-2 bg-main-500 h-screen relative z-50") {
        sidebar.classList.remove('relative');
        content.classList.remove('col-span-10');
        sidebar.classList.add('-translate-x-[100%]');
        sidebar.classList.add('absolute');
        content.classList.add('col-span-12');
    } else {
        sidebar.classList.add('relative');
        content.classList.add('col-span-10');
        sidebar.classList.remove('-translate-x-[100%]');
        sidebar.classList.remove('absolute');
        content.classList.remove('col-span-12');
    }

}
