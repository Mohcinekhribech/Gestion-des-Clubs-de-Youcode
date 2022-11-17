var username = document.getElementById("username");
var usernameErrPara = document.getElementById("username-err");
username.addEventListener('input', e=>{
     var pattern = /^[\w]{4,20}$/;
     var currentValue = e.target.value;
     var valid = pattern.test(currentValue);
     console.log(valid)
    if(valid) {
        usernameErrPara.style.display = 'none'
    }else{
        usernameErrPara.style.display = 'block'
    } 
})
     
