window.addEventListener('scroll',function(){
    let header=document.querySelector("header");
    header.classList.toggle("sticky",window.scrollY > 20);
});


const clickmanu=document.querySelector('clickThggle');
clickmanu=addEventListener('click', function(){
    const manuWrapper=document.querySelector('.main-manu');
    manuWrapper.classList.toggle('show');
});


// form validation 


