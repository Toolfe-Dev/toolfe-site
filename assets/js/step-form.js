// Wait for the DOM to fully load
document.addEventListener('DOMContentLoaded', () => {
    // Select all form steps for left and right columns
    const stepsLeft = [
        document.querySelector('.input-main-row:nth-child(1) .first'),
        document.querySelector('.input-main-row:nth-child(1) .second'),
        document.querySelector('.input-main-row:nth-child(1) .third'),
        document.querySelector('.input-main-row:nth-child(1) .fourth'),
        document.querySelector('.input-main-row:nth-child(1) .fifth')
    ];

    const stepsRight = [
        document.querySelector('.input-main-row:nth-child(2) .first'),
        document.querySelector('.input-main-row:nth-child(2) .second'),
        document.querySelector('.input-main-row:nth-child(2) .third'),
        document.querySelector('.input-main-row:nth-child(2) .fourth'),
        document.querySelector('.input-main-row:nth-child(2) .fifth')
    ];

    // Select step indicators
    const stepIndicators = document.querySelectorAll('.form-indecator');

    // Select navigation buttons
    const prevButton = document.querySelector('.input-group .theme-btn[type="button"]:first-child');
    const nextButton = document.querySelector('.input-group.phone-number .theme-btn[type="button"]');

    // Select the form wrappers
    const formInnerWrap = document.querySelector('.hero-contact-form-inner-wrap:nth-child(1)');
    const submissionWrapper = document.querySelector('.hero-contact-form-inner-wrap:nth-child(2)');

    // Initialize current step
    let currentStep = 0;

    // Function to update form display based on current step
    function updateFormDisplay() {
        // Hide all steps
        stepsLeft.forEach(step => step.classList.add('d-none'));
        stepsRight.forEach(step => step.classList.add('d-none'));
        stepIndicators.forEach(indicator => indicator.classList.remove('active'));

        // Show current step if within bounds, otherwise hide initial form and show submission section
        if (currentStep < stepsLeft.length) {
            stepsLeft[currentStep].classList.remove('d-none');
            stepsRight[currentStep].classList.remove('d-none');
            stepIndicators[currentStep].classList.add('active');
        } else {
            formInnerWrap.classList.add('d-none'); // Hide the initial form section using Bootstrap's d-none
            submissionWrapper.classList.remove('d-none'); // Show the submission section using Bootstrap's d-block (or d-flex if needed)
        }

        // Disable Prev button on the first step
        if (currentStep === 0) {
            prevButton.disabled = true;
        } else {
            prevButton.disabled = false;
        }

        // Change Next button to Submit on the last step
        if (currentStep === stepsLeft.length - 1) {
            nextButton.textContent = 'Submit';
        } else {
            nextButton.textContent = 'Next';
        }
    }

    // Event listener for Next button
    nextButton.addEventListener('click', () => {
        // Validation can be added here before proceeding to the next step

        if (currentStep < stepsLeft.length) {
            currentStep++;
            updateFormDisplay();
        } else {
            // Prevent form submission from this button click
            event.preventDefault();
        }
    });

    // Event listener for Prev button
    prevButton.addEventListener('click', () => {
        if (currentStep > 0) {
            currentStep--;
            updateFormDisplay();
        }
    });

    // Initialize the form display
    updateFormDisplay();
});


