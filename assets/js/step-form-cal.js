document.addEventListener('DOMContentLoaded', () => {
    // Select the form steps for left and right columns (first two steps)
    const stepsLeft = [
        document.querySelector('.input-main-row:nth-child(1) .first'),
        document.querySelector('.input-main-row:nth-child(1) .second')
    ];

    const stepsRight = [
        document.querySelector('.input-main-row:nth-child(2) .first'),
        document.querySelector('.input-main-row:nth-child(2) .second')
    ];

    // Select step indicators (only the first two)
    const stepIndicators = document.querySelectorAll('.form-indecator');
    
    // Select navigation buttons
    const prevButton = document.querySelector('.input-group .theme-btn[type="button"]:first-child');
    const prevBtnDiv = document.querySelector('.prev-btn');
    const nextButton = document.querySelector('.input-group.phone-number .theme-btn[type="button"]');

    // Initialize the current step
    let currentStep = 0;

    // Function to validate inputs in the first step
    function validateFirstStep() {
        const processName = document.getElementById('prcss_name').value.trim();
        const timePerUnit = document.getElementById('time_per_unit').value.trim();
        const annualVolume = document.getElementById('annual_volume').value.trim();
        const fteSalary = document.getElementById('fte_salary').value.trim();
        const addCost = document.getElementById('add_cost').value.trim();
        
        // Reset error messages
        let isValid = true;
        document.querySelectorAll('.error-message').forEach(el => el.remove());

        // Validate each field
        if (processName === "") {
            showError('prcss_name', 'Process Name is required');
            isValid = false;
        }
        if (timePerUnit === "" || isNaN(timePerUnit) || timePerUnit <= 0 || timePerUnit > 10000000) {
            showError('time_per_unit', 'Please enter a valid time per unit ');
            isValid = false;
        }
        if (annualVolume === "" || isNaN(annualVolume) || annualVolume <= 0 || annualVolume > 9999999) {
            showError('annual_volume', 'Please enter a valid annual volume ');
            isValid = false;
        }
        if (fteSalary === "" || isNaN(fteSalary) || fteSalary <= 0 || fteSalary > 99999999999) {
            showError('fte_salary', 'Please enter a valid FTE salary ');
            isValid = false;
        }
        if (addCost === "" || isNaN(addCost) || addCost < 0 || addCost >= 101) {
            showError('add_cost', 'Please enter a valid additional cost percentage ');
            isValid = false;
        }
        
        return isValid;
    }

    // Function to validate inputs in the second step
    function validateSecondStep() {
        const perProAuto = document.getElementById('per_pro_auto').value.trim();
        const companyName = document.getElementById('company_name').value.trim();
        const industry = document.getElementById('Industry').value.trim();
        const employeeCount = document.querySelector('input[name="employe_count"]:checked');
        
        // Reset error messages
        let isValid = true;
        document.querySelectorAll('.error-message').forEach(el => el.remove());
    
        // Validate each field
        if (perProAuto === "" || isNaN(perProAuto) || perProAuto < 0 || perProAuto >= 101) {
            showError('per_pro_auto', 'Please enter a valid percentage of process automation ');
            isValid = false;
        }
        if (companyName === "") {
            showError('company_name', 'Company Name is required');
            isValid = false;
        }
        if (industry === "") {
            showError('Industry', 'Industry is required');
            isValid = false;
        }
        if (!employeeCount) {
            showError('employe_count', 'Please select the number of employees doing the process');
            isValid = false;
        }
        
        return isValid;
    }
    
    // Function to display error message
    function showError(inputId, message) {
        const inputElement = document.getElementById(inputId);
        const errorElement = document.createElement('div');
        errorElement.className = 'error-message';
        errorElement.style.color = 'red';
        errorElement.textContent = message;
        inputElement.parentNode.appendChild(errorElement);
    }

    // Function to update form display based on current step
    function updateFormDisplay() {
        // Hide all steps
        stepsLeft.forEach(step => step.classList.add('d-none'));
        stepsRight.forEach(step => step.classList.add('d-none'));
        
        // Show current step if within bounds
        if (currentStep < stepsLeft.length) {
            stepsLeft[currentStep].classList.remove('d-none');
            stepsRight[currentStep].classList.remove('d-none');
            stepIndicators[currentStep].classList.add('active');
        } else {
            // Automatically submit the form on the last step
            const form = document.querySelector('form');
            form.submit();
        }

        if (currentStep === 0) {
            prevButton.classList.add('d-none');
            prevBtnDiv.classList.add('d-none');
        } else {
            prevButton.classList.remove('d-none');
            prevBtnDiv.classList.remove('d-none');
        }
    }

    // Event listener for Next button
    nextButton.addEventListener('click', (event) => {
        if (currentStep === 0) {
            // Validate first step inputs before proceeding
            if (validateFirstStep()) {
                currentStep++;
                updateFormDisplay();
            }
        } else if (currentStep === 1) {
            // Validate second step inputs before submitting the form
            if (validateSecondStep()) {
                currentStep++;
                updateFormDisplay();
            }
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

// Function to update all currency symbols in the span tags
function updateCurrencySymbols() {
    // Get the selected currency value from the select element
    var selectedCurrency = document.getElementById('Currency').value;

    // Get all span elements with the currency class
    var currencySpans = document.querySelectorAll('.currency');

    // Define a dictionary for currency symbols
    var currencySymbols = {
        'USD': '$',
        'INR': '₹',
        'EUR': '€'
    };

    // Update all spans with the corresponding symbol
    currencySpans.forEach(function(span) {
        span.textContent = currencySymbols[selectedCurrency];
    });
}

// Set the default currency symbol when the page loads
document.addEventListener('DOMContentLoaded', function() {
    updateCurrencySymbols(); // Set default to USD
});

// Attach the change event listener to the select element
document.getElementById('Currency').addEventListener('change', updateCurrencySymbols);
