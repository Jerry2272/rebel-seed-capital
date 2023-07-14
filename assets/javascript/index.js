
changeIcon = (icons) => icons.classList.toggle('fa-times');


let jerry =document.getElementById("toggle");
function borderChange(){
    jerry.classList.toggle("nav-border");
}





const header=document.querySelector(".navbar");
let lastScroll=window.scrollY;

window.addEventListener("scroll", () =>{
    if(lastScroll < window.scrollY){
        header.classList.add("navbar-hide");
    }else{
        header.classList.remove("navbar-hide");
    }
    lastScroll=scrollY
});



// const navbar=document.getElementsByClassName("navbar-toggler");
// let Zastscroll=window.scrollY;

// window.addEventListener("scroll", () =>{
//     if(Zastscrollscroll < window.scrollY){
//         navbar.classList.add("icon_bars");
//     }else{
//         navbar.classList.remove("icon_bars");
//     }
//     Zastscroll=scrollY
// });


$('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
  });
