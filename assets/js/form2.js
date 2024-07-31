$(document).ready(function () {
  $(".contact-form").submit(function (e) {
    e.preventDefault(); // Prevent the default form submission

    // Clear previous error messages
    $(".error").remove();

    // Flag to track if the form is valid
    var isValid = true;

    // Validate Full Name
    var fullName = $("#name").val().trim();
    if (fullName === "") {
      $("#name").after('<div class="error" style="color: red;">Full Name is required.</div>');
      isValid = false;
    }

    // Validate Email
    var email = $("#email").val().trim();
    if (email === "") {
      $("#email").after('<div class="error" style="color: red;">Email is required.</div>');
      isValid = false;
    }

    // Validate Phone
    var phone = $("#Phone").val().trim();
    if (phone === "") {
      $("#Phone").after('<div class="error" style="color: red;">Phone number is required.</div>');
      isValid = false;
    }

    // Validate Company Name
    var company = $("#organization").val().trim();
    if (company === "") {
      $("#organization").after('<div class="error" style="color: red;">Company Name is required.</div>');
      isValid = false;
    }

    // Validate Message
    var message = $("#message").val().trim();
    if (message === "") {
      $("#message").after('<div class="error" style="color: red;">Message is required.</div>');
      isValid = false;
    }

    // Validate Terms and Conditions
    var terms = $("#privacy_policy_accept").is(":checked");
    if (!terms) {
      $("#privacy_policy_accept").after('<div class="error" style="color: red;">You must agree to the terms and conditions.</div>');
      isValid = false;
    }

    // If the form is not valid, do not proceed with the AJAX submission
    if (!isValid) return;

    var formData = $(this).serialize();

    $("#alert-message").slideUp(750, function () {
      $("#alert-message").hide();
      $("#submit")
        .after('<img src="assets/imgs/ajax-loader.gif" class="loader" />')
        .attr("disabled", "disabled");

      $.post("assets/mail/contact2.php", formData, function (data) {
        $("#alert-message").html(data); // Set the response message
        $("#alert-message").slideDown("slow");
        $(".contact-form img.loader").fadeOut("slow", function () {
          $(this).remove();
        });
        $("#submit").removeAttr("disabled");
      });
    });
  });
});
