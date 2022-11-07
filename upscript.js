let add = document.querySelector(".uptit_btn");
let addopen = document.querySelector(".form-up");

add.addEventListener("click",()=>{
  addopen.classList.add("form-up");
})

let closeAdd = document.querySelector(".form-cross");

closeAdd.addEventListener("click",()=>{
  addopen.classList.remove("form-up");
})
  