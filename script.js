

//mobile nav open/close
let SHmenu = document.querySelector(".right");
let navHam = document.querySelector(".nav-ham");
function settingToggle(){
  SHmenu.classList.toggle("ul-menu-open");
  if(navHam.classList.contains("uil-bars")){
    navHam.classList.remove("uil-bars");
    navHam.classList.add("uil-multiply");
  }
  else{
    navHam.classList.remove("uil-multiply");
    navHam.classList.add("uil-bars");
  }

}

//scroll windows

window.addEventListener('scroll', () => {
    document.querySelector('nav').classList.toggle('window-scroll',window.scrollY > 0)
})


//swiperjs

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

//toggle nav menu

let parent =  document.querySelectorAll(".active");

 const removeClass = ()=>{
   parent.forEach(i=>{
     const l = i.querySelector(".sub-menu");
     const k = i.querySelector(".icn");
     l.classList.remove("sub-menu1");
     k.classList.remove("icn-rotate");

  })
 }

parent.forEach(function(i){
  i.addEventListener("click",function(){
      const l = i.querySelector(".sub-menu");
      const k = i.querySelector(".icn");
      removeClass();
      l.classList.add("sub-menu1");
      k.classList.add("icn-rotate");
    })
  })


    //profile-toggle

let par = document.querySelector(".profile-contain");

function togfun(){
  par.classList.toggle("pshow");
}


//animation

let animl = document.querySelectorAll('.animl');
let animr = document.querySelectorAll('.animr');

window.addEventListener('scroll',checkset);
checkset();

function checkset(){

  const trigger = window.innerHeight / 5 * 4;

   animl.forEach((ele)=>{
    const eletop = ele.getBoundingClientRect().top;
    if(eletop < trigger){
      ele.classList.add("anim-show");
    }
    else{
      ele.classList.remove("anim-show");
    }
  }) 
  animr.forEach((ele)=>{
    const eletop = ele.getBoundingClientRect().top;
    if(eletop < trigger){
      ele.classList.add("anim-show1");
    }
    else{
      ele.classList.remove("anim-show1");
    }
  }) 

}

//note close open

let add = document.querySelector(".addnote");
let addopen = document.querySelector(".form-con");

add.addEventListener("click",()=>{
  addopen.classList.toggle("form-con-show");
})

let closeAdd = document.querySelector(".cross");

closeAdd.addEventListener("click",()=>{
  addopen.classList.remove("form-con-show");
})
  


let delet = document.querySelector(".deletenote");
let deletopen = document.querySelector(".form-con1");

delet.addEventListener("click",()=>{
  deletopen.classList.toggle("form-con1-show");
})

let closedel = document.querySelector(".cross1");

closedel.addEventListener("click",()=>{
  deletopen.classList.remove("form-con1-show");
})