const form = document.querySelector(".typing-area"),
message = document.querySelector(".input-field"),
sendBtn = document.querySelector("button"),
chatbox = document.querySelector(".chat-box");

form.onsubmit = (e) =>{
    e.preventDefault();
}

chatbox.onmouseenter=() =>{
    chatbox.classList.add("toptobottom");
}
chatbox.onmouseleave = () =>{
    chatbox.classList.remove("toptobottom");
}

sendBtn.onclick = () =>{
    // console.log("Hello World");
    let xhr = new  XMLHttpRequest();
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                message.value = ""; //balnk input  once values is inserted
            }
        }
    }
    let formdata = new FormData(form);
    xhr.send(formdata);
}


setInterval(() => {
    // console.log("Hello World");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                // console.log(data);
                chatbox.innerHTML = data;
                if(!chatbox.classList.contains("toptobottom")){
                    scrollToBottom ();
                }
            }
        }
    }    
    let formdata = new FormData(form);
    xhr.send(formdata);
}, 2000);

function scrollToBottom (){
    chatbox.scrollTop = chatbox.scrollHeight;
}
