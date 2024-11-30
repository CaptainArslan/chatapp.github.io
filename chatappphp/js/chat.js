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

sendBtn.onclick = () => {
    // Collect form data
    const formData = new FormData(form);

    // Make AJAX request
    $.ajax({
        url: "php/insert-chat.php", // Target PHP file
        type: "POST",
        data: formData,
        processData: false, // Prevent jQuery from processing the data
        contentType: false, // Prevent jQuery from setting content type
        success: function (response) {
            // Clear the input field once the value is inserted
            message.value = "";
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", status, error); // Log any errors
        },
    });
};



setInterval(() => {
    // Send AJAX request every 1 second
    $.ajax({
        url: "php/get-chat.php", // Target PHP file
        type: "POST",
        data: new FormData(form),
        processData: false, // Prevent jQuery from processing the data
        contentType: false, // Prevent jQuery from setting content type
        success: function (data) {
            // Update the chatbox with the response
            chatbox.innerHTML = data;

            // Scroll to the bottom if not in "toptobottom" mode
            if (!chatbox.classList.contains("toptobottom")) {
                scrollToBottom();
            }
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", status, error); // Log any errors
        },
    });
}, 1000);


function scrollToBottom (){
    chatbox.scrollTop = chatbox.scrollHeight;
}
