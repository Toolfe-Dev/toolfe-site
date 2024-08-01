<script>
document.getElementById('careerForm').addEventListener('submit', function(event) {
    event.preventDefault();
    let isValid = true;

    // Clear previous error messages
    document.querySelectorAll('.error').forEach(function(el) {
        el.textContent = '';
    });

    // Full Name validation
    let fullName = document.getElementsByName('FullName')[0];
    if (fullName.value.trim() === '') {
        isValid = false;
        document.getElementById('nameError').textContent = 'Full Name is required';
    }

    // Email validation
    let email = document.getElementsByName('Email')[0];
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email.value.trim() === '') {
        isValid = false;
        document.getElementById('emailError').textContent = 'Email is required';
    } else if (!emailPattern.test(email.value.trim())) {
        isValid = false;
        document.getElementById('emailError').textContent = 'Enter a valid email';
    }

    // Phone validation
    let phone = document.getElementsByName('Phone')[0];
    if (phone.value.trim() === '') {
        isValid = false;
        document.getElementById('phoneError').textContent = 'Phone number is required';
    }

    // Resume validation
    let resume = document.getElementsByName('resume')[0];
    if (resume.files.length === 0) {
        isValid = false;
        document.getElementById('resumeError').textContent = 'Please upload your resume';
    } else {
        let allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        if (!allowedTypes.includes(resume.files[0].type)) {
            isValid = false;
            document.getElementById('resumeError').textContent = 'Only PDF or Word files are allowed';
        }
    }

    // Agree to terms validation
    let agreeToTerms = document.getElementsByName('AgreeToTerms')[0];
    if (!agreeToTerms.checked) {
        isValid = false;
        document.getElementById('termsError').textContent = 'You must agree to the terms and conditions';
    }

    if (isValid) {
        this.submit();
    } 
});
</script>
  