const patterns = {
    age:/^\d{1,3}$/,
    username:/^[a-z\d]{4,20}$/i
}
const nom = document.getElementById("user");
const nomdgroup = document.getElementById("ndgrp");
const classn = document.getElementById("class");
const  age = document.getElementById("age");

nom.addEventListener("input",e=>{
   if(patterns.username.test(e.target.value)){
    document.getElementById("puser").style.display="none";
   }else{
    document.getElementById("puser").style.display="block";
   }
})
nomdgroup.addEventListener("input",e=>{
    if(patterns.username.test(e.target.value)){
     document.getElementById("pndgrp").style.display="none";
    }else{
     document.getElementById("pndgrp").style.display="block";
    }
 })
classn.addEventListener("input",e=>{
    if(patterns.username.test(e.target.value)){
     document.getElementById("pclass").style.display="none";
    }else{
     document.getElementById("pclass").style.display="block";
    }
 })
age.addEventListener("input",e=>{
    if(patterns.age.test(e.target.value)){
     document.getElementById("page").style.display="none";
    }else{
     document.getElementById("page").style.display="block";
    }
 })


 