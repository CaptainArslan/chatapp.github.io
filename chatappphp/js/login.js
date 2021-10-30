const login_form = document.querySelector(".login form"),
continue_btn = login_form.querySelector(".button input"),
errorText = login_form.querySelector(".error-txt");

login_form.onsubmit = (e) =>{
    e.preventDefault();
}

continue_btn.onclick =()=> {

    // console.log("Hello World");
    let xhr = new  XMLHttpRequest();
    xhr.open("POST", "php/loginform.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
                if(data == "success"){
                    login_form.reset();
                    location.href = "users.php";

                }else{
                   errorText.textContent = data;
                   errorText.style.display = "block";
                }
            }
        }
    }


    let formdata = new FormData(login_form);
    xhr.send(formdata);
}