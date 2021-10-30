//SEARCH BUTTON JAVASCRIPT
var searchbar = document.querySelector(".users .search input");
search_btn = document.querySelector(".users .search button");

search_btn.onclick = () => {
    searchbar.classList.toggle("active_search");
    searchbar.focus();
    search_btn.classList.toggle("active_search_btn");
}

setInterval(() => {

    // console.log("Hello World");
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/allusers.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
                if (data == "success") {
                    login_form.reset();
                    location.href = "users.php";

                } else {
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }


    let formdata = new FormData(login_form);
    xhr.send(formdata);
}, 500);