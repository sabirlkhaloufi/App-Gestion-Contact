// dashboard
let btn_nav = document.querySelectorAll(".btn-nav");
let ContactList = document.querySelector(".list-contacts");
let UsersList = document.querySelector(".list-users");
let Statistic = document.querySelector(".statistic");

btn_nav.forEach(value => {
    value.addEventListener("click",()=>{
        if(value.innerHTML === "Statistics"){
            ContactList.classList.add("d-none");
            UsersList.classList.add("d-none");
            Statistic.classList.remove("d-none");
        }
        else if(value.innerHTML === "Users"){
            ContactList.classList.add("d-none");
            UsersList.classList.remove("d-none");
            Statistic.classList.add("d-none");
        }
        else{
            ContactList.classList.remove("d-none");
            UsersList.classList.add("d-none");
            Statistic.classList.add("d-none");
        }
    })
});

