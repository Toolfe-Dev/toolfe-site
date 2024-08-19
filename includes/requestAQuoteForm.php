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

    // If form is valid, submit the form
    if (valid) {
        console.log('Form is valid. Submitting...');
        // Remove preventDefault and let the form submit naturally
        e.target.submit();
    }
});
</script>
