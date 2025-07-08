import './bootstrap/bootstrap.bundle.js';

let Main = {
  init: async function () {
    let nav = document.querySelector(".navbar");
    window.addEventListener("scroll", () => {
      if (window.scrollY > 900) {
        nav.classList.add("navbar-dark");
      } else {
        nav.classList.remove("navbar-dark");
      }
    });

    const menuMappings = [
      { menu: '#menu-solutions-main-menu' },
      { menu: '#menu-industries' },
      { menu: '#menu-discover' }
    ];
    

    menuMappings.forEach(({ menu }) => {
      const wrapper = document.querySelector(menu);
      const submenu = wrapper.querySelector('.dropdown-menu.depth_0');
      const toggle = wrapper.querySelector('.dropdown-toggle');

      let hideTimeout;
    
      // Show submenu on mouseenter
      wrapper.addEventListener('mouseenter', () => {
        console.log("mouseenter");

        clearTimeout(hideTimeout);
        submenu.classList.add('show');
        toggle.classList.add('show');
      });
    
      // Hide submenu on mouseleave (with delay)
      wrapper.addEventListener('mouseleave', () => {
        console.log("mouseleave");
        hideTimeout = setTimeout(() => {
          submenu.classList.remove('show');


          toggle.classList.remove('show');
        }, 50); // 200ms delay to avoid flicker
      });
    });
    const blurElement = document.querySelector('.opacity-ele');

    

  }
};


Main.init();
