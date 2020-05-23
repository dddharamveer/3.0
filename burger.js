
const navslide=()=>{
  const burger =  document.querySelector('.burger');
  const nav = document.querySelector('.navlinks');
  const navlinks= document.querySelector('.navlinks li');
burger.addEventListener('click',()=>{
  nav.classList.toggle('nav-active');
  navlinks.forEach((link,index) => {
    link.style.animation='navlinkfade 0.5s ease forwards ${index/7 +0.8}s';
  });
});


}
navslide();
