const navSlide = () => {
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.navmenu');
  const navLinks = document.querySelectorAll('.navmenu li')


  burger.addEventListener('click', () => {
    //Toggle nav 
    nav.classList.toggle('navmenu-active');
  

    //Animer links
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = ''}
        else {
          link.style.animation = `navLinksFade 0.5s ease forwards`;
        }
    });
    // Burger animation
    burger.classList.toggle('toggle')
  });
}

navSlide();