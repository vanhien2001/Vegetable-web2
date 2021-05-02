var login = document.querySelector('#login');
if(login){
    login.onclick=() => {
        console.log(login);
        document.querySelector(".login").style.display='flex';
    };
}

var signup = document.querySelector('#signup');
if(signup){
    signup.onclick=() => {
        console.log(login);
        document.querySelector(".signup").style.display='flex';
    };
}

document.querySelectorAll(".icon_exit").forEach((icon) => {
    icon.onclick = () => {
            icon.parentElement.parentElement.style.display="none";
        }
    }
);

// var account = document.querySelector(".account");
// document.querySelector(".username").onclick = ()=>{
//     if(account.style.display=="block"){
//         account.style.display="none";
//     }else{
//         account.style.display="block";
//     }
// }

// var validateinput = document.querySelectorAll(".form-control").every((input)=>{
//     return input.value?true:false;
// })

// document.querySelectorAll(".form-control").forEach((input) => {
//     input.oninput = () => {
//         console.log(document.querySelectorAll(".form-control"));
//         if(validateinput){
//             document.querySelectorAll(".form-submit").forEach((btn) => {
//                 btn.classList.remove("no_active");
//             }
//         )}else{
//             btn.classList.add("no_active");
//         }
//         }
//     }
// );