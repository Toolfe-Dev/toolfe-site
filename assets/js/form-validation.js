document.getElementById('form').addEventListener('submit', function(event) {
  event.preventDefault();
  
  let isValid = true;
  const errors = {
    nameError: '',
    phoneError: '',
    emailError: '',
    companyError: '',
    messageError: '',
    termsError: ''
  };
  
  const name = document.getElementById('name').value.trim();
  const phone = document.getElementById('Phone').value.trim();
  const email = document.getElementById('email').value.trim();
  const company = document.getElementById('organization').value.trim();
  const message = document.getElementById('message').value.trim();
  const terms = document.getElementById('privacy_policy_accept').checked;
  
  if (name === '') {
    errors.nameError = 'Full Name is required';
    isValid = false;
  }
  
  if (phone === '') {
    errors.phoneError = 'Phone is required';
    isValid = false;
  } else if (!/^\+?[\d\s\-\(\)]{10,20}$/.test(phone)) {
    errors.phoneError = 'Phone number is invalid';
    isValid = false;
  }
  
  if (email === '') {
    errors.emailError = 'Email is required';
    isValid = false;
  } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    errors.emailError = 'Email is invalid';
    isValid = false;
  }
  
  if (company === '') {
    errors.companyError = 'Company Name is required';
    isValid = false;
  }
  
  if (message === '') {
    errors.messageError = 'Message is required';
    isValid = false;
  }
  
  if (!terms) {
    errors.termsError = 'You must agree to the terms and conditions';
    isValid = false;
  }
  
  for (const error in errors) {
    const errorElement = document.getElementById(error);
    if (errors[error]) {
      errorElement.textContent = errors[error];
      errorElement.style.color = 'red';
    } else {
      errorElement.textContent = '';
    }
  }
  
  if (isValid) {
    // If form is valid, submit the form
    document.getElementById('form').submit();
  }
});
