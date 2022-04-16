// form validation sign up

let formAdd = document.getElementById("formAdd");
let error = document.querySelectorAll(".valid");
let valid;
console.log(formAdd);
function validName(Name){
    let userNameReg = /^([A-Za-z]{2,8})$/;
    if(userNameReg.test(Name)){
        valid = true;
        error[0].innerHTML = "";
        document.getElementById("name").classList.remove("border-danger");
    }
    else{
        valid = false;
        error[0].innerHTML = "Name not valid";
        document.getElementById("name").classList.add("border-danger");
       
    }
}

function validPhone(Phone){
    let phoneReg = /(\+212|0)([ \-_/]*)(\d[ \-_/]*){9}/;
    if(phoneReg.test(Phone)){
        valid = true;
        error[1].innerHTML = "";
        document.getElementById("phone").classList.remove("border-danger");
    }
    else{     
        error[1].innerHTML = "Phone not valid";
        document.getElementById("phone").classList.add("border-danger");
        valid = false;
    }
}

function validEmail(Email){
    let emailReg = /^(^[a-z][a-zA-Z0-9-_.]+@(gmail|outlook).(com|fr))$/;
    if(emailReg.test(Email)){
        error[2].innerHTML = "";
        valid = true;
        document.getElementById("email").classList.remove("border-danger");
    }
    else{
        error[2].innerHTML = "Email not valid";
        document.getElementById("email").classList.add("border-danger");
        valid = false;
    }
}

function validAdresse(Adresse){
    if(!(pass == conPass)){
        valid = false;
        error[3].innerHTML = "confirm password not valid";
        document.getElementById("adresse").classList.add("border-danger");
    }
    else{
        error[3].innerHTML = "";
        valid = true;
        document.getElementById("adresse").classList.remove("border-danger");
    }
}

formAdd.addEventListener("input",function(){
    let Name = formAdd.Name.value;
    let Phone = formAdd.Phone.value;
    let Email = formAdd.Email.value;
    let Adresse = document.getElementById("");
    
    validName(Name);
    validPhone(Phone);
    validEmail(Email);
    validAdresse(Adresse);
});


formAdd.addEventListener("submit",(e)=>{
    let Name = formAdd.Name.value;
    let Phone = formAdd.Phone.value;
    let Email = formAdd.Email.value;
    // let Adresse = formAdd.Adresse.value;
    if(Name == "" || Phone == "" || Email == "" || Adresse == "" || valid == false){
        // document.querySelector(".vide-msg").innerHTML = "Please Enter Informations";
        e.preventDefault();
    }
    
})