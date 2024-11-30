//SEARCH BUTTON JAVASCRIPT
var searchbar = document.querySelector(".users .search input"),
search_btn = document.querySelector(".users .search button"),
userList = document.querySelector(".users .users-list");


search_btn.onclick = () => {
    searchbar.classList.toggle("active_search");
    searchbar.focus();
    search_btn.classList.toggle("active_search_btn");
    searchbar.value = "";
}


searchbar.onkeyup = () => {
    let searchTerm = searchbar.value;

    if(searchTerm != ""){
        searchbar.classList.add("active");
    }else{
        searchbar.classList.remove("active");
    }
    
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/search.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                //console.log(data);
                userList.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}

setInterval(() => {
    // console.log("Hello World");
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/allusers.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                // console.log(data);
                if(!searchbar.classList.contains("active")){
                    userList.innerHTML = data;
                }
            }
        }
    }
    xhr.send();
}, 5000);