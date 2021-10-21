const icon = document.querySelector('.search-icon');
const clicked = document.querySelector('.clicked');
const searchForm = document.querySelector('#searchform');


    icon.addEventListener("click", () => { 
       searchForm.classList.toggle("clicked");   
    
    }, false);




   