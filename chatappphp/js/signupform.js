const signup_form = document.querySelector(".signup form"),
continue_btn = signup_form.querySelector(".button input"),
errorText = signup_form.querySelector(".error-txt");

signup_form.onsubmit = (e) =>{
    e.preventDefault();
}

continue_btn.onclick =()=> {

    // console.log("Hello World");
    let xhr = new  XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
                if(data == "success"){
                    signup_form.reset();
                    location.href = "users.php";
                }else{
                   errorText.textContent = data;
                   errorText.style.display = "block";
                }
            }
        }
    }


    let formdata = new FormData(signup_form);
    xhr.send(formdata);
}