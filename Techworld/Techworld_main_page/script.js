const menubtn =document.getElementById("menubtn");
const menuclosebtn =document.getElementById("menuclosebtn");
const navlist =document.getElementById("navlist");
const openmenu =document.getElementById("openmenu");
const closemenu =document.getElementById("closemenu");


openmenu.addEventListener("click",function(){

    navlist.style.display = "flex";
    menubtn.style.display = "none";
    menuclosebtn.style.display = "flex";
})


closemenu.addEventListener("click",function(){

   menuclosebtn.style.display = "none";
   menubtn.style.display = "flex";
   navlist.style.display = "none";
   navlist.setAttribute("style","");
})
