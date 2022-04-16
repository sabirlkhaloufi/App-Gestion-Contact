// form validation sign up

let formLogin = document.getElementById("login");
let error = document.querySelectorAll(".valid");
let valid;

function validName(Name){
    let userNameReg = /^([A-Za-z]{3,8})$/;
    if(userNameReg.test(Name)){
        valid = true;
        error[0].innerHTML = "";
        document.getElementById("username").classList.remove("border-danger");
    }
    else{
        error[0].innerHTML = "username not valid";
        document.getElementById("username").classList.add("border-danger");
        valid = false;
    }
}

function validPass(Pass){
    let passReg = /^([A-Za-z0-9]{6,16})$/;
    if(passReg.test(Pass)){
        valid = true;
        error[1].innerHTML = "";
        document.getElementById("pass").classList.remove("border-danger");
    }
    else{     
        error[1].innerHTML = "password not valid";
        document.getElementById("pass").classList.add("border-danger");
        valid = false;
    }
}

formLogin.addEventListener("input",function(){
    let userName = formLogin.username.value;
    let pass = formLogin.pass.value;
    validName(userName);
    validPass(pass);
});

formLogin.addEventListener("submit",(e)=>{
    let userName = formLogin.username.value;
    let pass = formLogin.pass.value;
    if(userName == "" || pass == ""){
        e.preventDefault();
        document.querySelector(".vide-msg").innerHTML="Please Enter Your Information";
    }
    if(valid == false){
        e.preventDefault();
        document.querySelector(".vide-msg").innerHTML="";
    }
})