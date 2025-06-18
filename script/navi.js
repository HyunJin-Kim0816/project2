m_toggle_box = document.querySelector('.toggle_box');
close_box = document.querySelector('.fa-xmark');
m_navi = document.querySelector('.m_gnb');

m_toggle_box.addEventListener('click', function () {
    m_navi.style.left = '0px';
});

close_box.addEventListener('click', function () {
    m_navi.style.left = '-100%';
})

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.gnb_m_menu > a').forEach(menu => {
        menu.addEventListener('click', function (e) {
            e.preventDefault();

            let target = e.target;

            if (target.classList.contains('fa-angle-down')) {
                target = target.closest('a');
            }

            let parentLi = target.closest('.gnb_m_menu');
            let subMenu = parentLi.querySelector('.m_sub_mnu');
            let icon = parentLi.querySelector('.fa-angle-down');

            if (subMenu) {
                let isOpen = subMenu.classList.contains('act');

                document.querySelectorAll('.m_sub_mnu').forEach(sub => {
                    sub.classList.remove('act');
                    sub.style.maxHeight = null;
                });

                document.querySelectorAll('.fa-angle-down').forEach(i => {
                    i.classList.remove('rotate');
                });

                if (!isOpen) {
                    subMenu.classList.add('act');
                    subMenu.style.maxHeight = subMenu.scrollHeight + "px";
                    if (icon) icon.classList.add('rotate');
                }
            }
        });
    });
});
