// pASSWORD tOOGLE FUNCTION 
const password = document.querySelector(".form input[type='password']"),
togglebtn = document.querySelector(".form .field i");

togglebtn.onclick = () =>{
    // alert('You Click on eye');
    if(password.type == "password")
    {
        password.type = "text";
        togglebtn.classList.add("active_eye");
    }
    else
    {
        password.type = "password";
        togglebtn.classList.remove("active_eye");
    }
}
