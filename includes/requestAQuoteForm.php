<script>
      document.getElementById('service-form').addEventListener('submit', function (e) {
    e.preventDefault();
    let valid = true;

    // Reset previous error messages
    document.querySelectorAll('.error').forEach(el => el.textContent = '');

    // Validate name
    if (!document.getElementById('first_name').value.trim()) {
        valid = false;
        document.getElementById('error-name').textContent = 'Name is required.';
    }

    // Validate email
    if (!document.getElementById('email').value.trim()) {
        valid = false;
        document.getElementById('error-email').textContent = 'Email is required.';
    }

    // Validate phone
    if (!document.querySelector('input[name="phone"]').value.trim()) {
        valid = false;
        document.getElementById('error-phone').textContent = 'Phone is required.';
    }

    // Validate company
    if (!document.getElementById('company_name').value.trim()) {
        valid = false;
        document.getElementById('error-company').textContent = 'Company Name is required.';
    }

    // Validate industry
    if (!document.querySelector('input[name="industry"]:checked')) {
        valid = false;
        document.getElementById('error-industry').textContent = 'Industry selection is required.';
    }

    // Validate services
    if (!document.querySelector('input[name="services[]"]:checked')) {
        valid = false;
        document.getElementById('error-services').textContent = 'At least one service must be selected.';
    }

    // Validate message
    if (!document.querySelector('textarea[name="message"]').value.trim()) {
        valid = false;
        document.getElementById('error-message').textContent = 'Message is required.';
    }

    // Validate privacy policy
    if (!document.getElementById('privacy_policy_accept').checked) {
        valid = false;
        document.getElementById('error-privacy').textContent = 'You must agree to the terms and conditions.';
    }

    if (valid) {
        console.log('submitted');
        e.preventDefault(); // Prevent the default form submission
    document.getElementById("alert-message").textContent = "Submitting..";
    document.getElementById("alert-message").style.display = "block";
    document.getElementById("submit-button").disabled = true;

    // Collect the form data
    var formData = new FormData(this);
    var keyValuePairs = [];
    for (var pair of formData.entries()) {
      keyValuePairs.push(pair[0] + "=" + pair[1]);
    }

    var formDataString = keyValuePairs.join("&");

    // Send a POST request to your Google Apps Script
    fetch(
        "https://script.google.com/macros/s/AKfycbxjmvfHZ8oKpRMLYxPkW49bvCLB7XHR1e_NW3I4SV0F-67nBIpge6Rsebg44T7EuAvyrg/exec", {
          redirect: "follow",
          method: "POST",
          body: formDataString,
          headers: {
            "Content-Type": "text/plain;charset=utf-8",
          },
        }
      )
      .then(function (response) {
        // Check if the request was successful
        if (response) {
          return response; // Assuming your script returns JSON response
        } else {
          throw new Error("Failed to submit the form.");
        }
      })
      .then(function (data) {
        // Display a success message
        document.getElementById("alert-message").textContent =
          "Your request has been submitted successfully!";
        document.getElementById("alert-message").style.display = "block";
        document.getElementById("alert-message").style.background = "white";
        document.getElementById("alert-message").style.color = "#198754";
        document.getElementById("submit-button").disabled = false;
        document.getElementById("form").reset();

        setTimeout(function () {
          document.getElementById("alert-message").textContent = "";
          // document.getElementById("alert-message").style.display = "none";
        }, 2600);
      })
      .catch(function (error) {
        // Handle errors, you can display an error message here
        console.error(error);
        document.getElementById("alert-message").textContent =
          "An error occurred while submitting the form.";
        document.getElementById("alert-message").style.display = "block";
      });
    }
});

</script>