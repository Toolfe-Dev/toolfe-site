/* ==================================================
    Contact Form Validations
================================================== */
$("#form").each(function () {
  var formInstance = $(this);
  formInstance.submit(function (e) {
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

    var action = $(this).attr("action");

    $("#alert-message").slideUp(750, function () {
      $("#alert-message").hide();

      $("#submit")
        .after('<img src="assets/imgs/ajax-loader.gif" class="loader" />')
        .attr("disabled", "disabled");

      $.post(
        action,
        {
          first_name: $("#first_name").val(),
          last_name: $("#last_name").val(),
          email: $("#email").val(),
          phone_number: $("#phone_number").val(),
          homeland: $("#homeland").val(),
          privacy_policy_accept: $("#privacy_policy_accept").is(":checked")
            ? "1"
            : "0",
          message: $("#message").val(),
        },
        function (data) {
          $("#alert-message").html(data); // Updated to set the inner HTML
          $("#alert-message").slideDown("slow");
          $(".contact-form img.loader").fadeOut("slow", function () {
            $(this).remove();
          });
          $("#submit").removeAttr("disabled");
        }
      );
    });
  });
});


    document.getElementById('careerForm').addEventListener('submit', function(event) {
        let isValid = true;

        // Full Name validation
        const fullName = document.querySelector('input[name="FullName"]');
        const nameError = document.getElementById('nameError');
        if (fullName.value.trim() === '') {
            nameError.textContent = 'Full Name is required';
            isValid = false;
        } else {
            nameError.textContent = '';
        }

        // Email validation
        const email = document.querySelector('input[name="Email"]');
        const emailError = document.getElementById('emailError');
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (email.value.trim() === '') {
            emailError.textContent = 'Email is required';
            isValid = false;
        } else if (!emailPattern.test(email.value.trim())) {
            emailError.textContent = 'Invalid email format';
            isValid = false;
        } else {
            emailError.textContent = '';
        }

        // Phone validation
        const phone = document.querySelector('input[name="Phone"]');
        const phoneError = document.getElementById('phoneError');
        const phonePattern = /^\+?\d{1,4}?[-.\s\(\)]?\(?\d{1,3}?\)?[-.\s\(\)]?\d{1,4}[-.\s\(\)]?\d{1,4}[-.\s\(\)]?\d{1,9}$/;
        if (phone.value.trim() === '') {
            phoneError.textContent = 'Phone is required';
            isValid = false;
        } else if (!phonePattern.test(phone.value.trim())) {
            phoneError.textContent = 'Invalid phone format';
            isValid = false;
        } else {
            phoneError.textContent = '';
        }

        // Resume validation
        const resume = document.querySelector('input[name="resume"]');
        const resumeError = document.getElementById('resumeError');
        if (resume.files.length === 0) {
            resumeError.textContent = 'Resume/CV is required';
            isValid = false;
        } else {
            resumeError.textContent = '';
        }

        // Agree To Terms validation
        const agreeToTerms = document.querySelector('input[name="Agree To Terms"]');
        const termsError = document.getElementById('termsError');
        if (!agreeToTerms.checked) {
            termsError.textContent = 'You must agree to the terms and conditions';
            isValid = false;
        } else {
            termsError.textContent = '';
        }

        // Prevent form submission if validation fails
        if (!isValid) {
            event.preventDefault();
        }
    });

