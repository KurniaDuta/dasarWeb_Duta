$(document).ready(function () {
    $("#contact-form").submit(function(e) {
        e.preventDefault();

        var formData = $("#contact-form").serialize();

        $.ajax({
            url: "php/contact.php",
            type: "POST",
            data: formData,
            success: function (response) {
                $("#hasil").html(response);
            },
            error: function() {
                $("#hasil").html("There was an error submitting the form.");
            }
        })
    })
    
    const navbar = document.querySelector('.navbar-container');
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
