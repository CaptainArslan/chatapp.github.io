// Select DOM elements
const login_form = $(".login form");
const continue_btn = login_form.find(".button input");
const errorText = login_form.find(".error-txt");

// Prevent default form submission
login_form.on("submit", (e) => {
    e.preventDefault();
});

// Handle button click
continue_btn.on("click", () => {
    // Collect form data
    const formData = new FormData(login_form[0]);

    // Send AJAX request
    $.ajax({
        url: "php/loginform.php",
        type: "POST",
        data: formData,
        processData: false, // Necessary for sending FormData
        contentType: false, // Necessary for sending FormData
        success: function (response) {
            console.log(response); // Log the server response

            if (response === "success") {
                login_form[0].reset(); // Reset the form
                window.location.href = "users.php"; // Redirect on success
            } else {
                errorText.text(response).css("display", "block"); // Show error message
            }
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error: ", status, error); // Log error details
            errorText.text("An error occurred. Please try again.").css("display", "block");
        },
    });
});
