//OPEN MOBILE MENU
const menuOpen = () => {
  const btn = document.querySelector('.menu-toggler');
  const nav = document.querySelector('.main-navigation'); 

  btn.addEventListener('click', () => {
    if(nav.style.transform == "scaleY(0)") {
      nav.style.transform = "scaleY(1)";
    }
    else {
      nav.style.transform = "scaleY(0)";
    }
      
    });
}
menuOpen();

//SEARCH FORM ON CLICK
const searchForm = () => {
  const icon = document.querySelector('.search-icon');
  const searchForm = document.querySelector('#searchform');
  const closeSearchShow = document.querySelector('.close-search');
  const searchIcon = document.querySelector('.icon');


  icon.addEventListener("click", () => { 
      searchIcon.classList.add('icon-closed');
      searchForm.classList.add('clicked');
      closeSearchShow.classList.add('search-closed');
      //console.log('heloo'); 
  
  }, false);

  closeSearchShow.addEventListener('click', ()=>{
    if( closeSearchShow.classList.contains('search-closed') && searchForm.classList.contains('clicked') && searchIcon.classList.contains('icon-closed')){
      closeSearchShow.classList.remove('search-closed');
      searchForm.classList.remove('clicked');
      searchIcon.classList.remove('icon-closed');
    }
  });
}
searchForm();



//SWIPER SLIDER
document.addEventListener( 'DOMContentLoaded', function() {

   new Swiper('.swiper', {

      // Optional parameters
      loop: true,
      slidesPerView: 4,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      //Breakpoints
      breakpoints: {
        375: {
          slidesPerView: 1,
          //spaceBetween: 20,
        },
         500: {
            slidesPerView: 1,
            //spaceBetween: 20,
          },

         640: {
           slidesPerView: 3,
           spaceBetween: 20,
         },
         768: {
           slidesPerView: 3,
           spaceBetween: 40,
         },
         1024: {
           slidesPerView: 4,
           spaceBetween: 50,
         },
       },
    });
   });


//Sticky navigation on scroll
let below = false; 
function func() {

  const Ypos = window.pageYOffset;
  if (Ypos > 100 && !below) {

    below = true;
    document.getElementById("masthead").classList.add('sticky');

  } else if (Ypos < 100 && below) {
    event.preventDefault();
    below = false;
    document.getElementById("masthead").classList.remove('sticky');

  }
}

window.addEventListener('scroll', func);

   