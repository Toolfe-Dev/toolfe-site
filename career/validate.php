<script>
  function validateForm() {
      // Get form elements
      var fullName = document.getElementById('fullName').value;
      var email = document.getElementById('email').value;
      var phone = document.getElementById('phone').value;
      var resume = document.getElementById('resume').value;
      var agree = document.getElementById('agree').checked;
  
      // Error elements
      var nameError = document.getElementById('nameError');
      var emailError = document.getElementById('emailError');
      var phoneError = document.getElementById('phoneError');
      var resumeError = document.getElementById('resumeError');
      var termsError = document.getElementById('termsError');
  
      // Clear previous errors
      nameError.textContent = '';
      emailError.textContent = '';
      phoneError.textContent = '';
      resumeError.textContent = '';
      termsError.textContent = '';
  
      var isValid = true;
  
      // Validate full name
      if (fullName.trim() === '') {
          nameError.textContent = 'Full Name is required.';
          isValid = false;
      }
  
      // Validate email
      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (email.trim() === '') {
          emailError.textContent = 'Email is required.';
          isValid = false;
      } else if (!emailPattern.test(email)) {
          emailError.textContent = 'Invalid email format.';
          isValid = false;
      }
  
      // Validate phone
      var phonePattern = /^\+?\d+$/;
      if (phone.trim() === '') {
          phoneError.textContent = 'Phone number is required.';
          isValid = false;
      } else if (!phonePattern.test(phone)) {
          phoneError.textContent = 'Invalid phone number format.';
          isValid = false;
      }
  
      // Validate resume
      if (resume.trim() === '') {
          resumeError.textContent = 'Resume/CV is required.';
          isValid = false;
      }
  
      // Validate terms agreement
      if (!agree) {
          termsError.textContent = 'You must agree to the terms and conditions.';
          isValid = false;
      }
  
      return isValid;
  }
  </script>
  