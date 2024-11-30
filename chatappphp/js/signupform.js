// Select DOM elements
const signup_form = $(".signup form");
const continue_btn = signup_form.find(".button input");
const errorText = signup_form.find(".error-txt");

// Prevent default form submission
signup_form.on("submit", (e) => {
    e.preventDefault();
});

// Handle button click
continue_btn.on("click", () => {
    // Collect form data
    const formData = new FormData(signup_form[0]);

    // Make AJAX request
    $.ajax({
        url: "php/signup.php", // Target PHP file
        type: "POST",
        data: formData,
        processData: false, // Prevent jQuery from converting data to a query string
        contentType: false, // Prevent jQuery from setting the default content type
        success: function (response) {
            console.log(response); // Log the server response

            if (response === "success") {
                signup_form[0].reset(); // Reset the form fields
                window.location.href = "users.php"; // Redirect on success
            } else {
                errorText.text(response).css("display", "block"); // Show error message
            }
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", status, error); // Log error details
            errorText.text("An error occurred. Please try again.").css("display", "block");
        },
    });
});
