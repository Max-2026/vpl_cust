

var dynamicOptionsContainer = document.getElementById('dynamicOptionsContainer');

// Set the initial display property to none
dynamicOptionsContainer.style.display = 'none';

// Get the dynamicOptionsInput
var dynamicOptionsInput = document.getElementById('dynamicOptionsInput');

// Iterate over the array and append each option to the container div
dynamicOptions.forEach(function (option) {
    var optionElement = document.createElement('div');
    optionElement.textContent = option;

    // Add a click event listener to handle option selection
    optionElement.addEventListener('click', function () {
        // Update the input value with the selected option (only the part before the hyphen)
        dynamicOptionsInput.value = option.split(' - ')[0];

        // Hide the dynamic options container
        dynamicOptionsContainer.style.display = 'none';
    });

    dynamicOptionsContainer.appendChild(optionElement);
});

// Function to update dynamic options based on user input
dynamicOptionsInput.addEventListener('input', function () {
    var userInput = this.value.toLowerCase();

    // Show or hide the dynamic options container based on the input value
    dynamicOptionsContainer.style.display = userInput.trim() !== '' ? 'block' : 'none';

    // Clear the dynamic options container
    dynamicOptionsContainer.innerHTML = '';

    // Filter dynamic options based on user input
    var filteredOptions = dynamicOptions.filter(function (option) {
        return option.toLowerCase().includes(userInput);
    });

    // Append filtered options to the container
    filteredOptions.forEach(function (option) {
        var optionElement = document.createElement('div');
        optionElement.textContent = option;

        // Add a click event listener to handle option selection
        optionElement.addEventListener('click', function () {
            // Update the input value with the selected option (only the part before the hyphen)
            dynamicOptionsInput.value = option.split(' - ')[0];

            // Hide the dynamic options container
            dynamicOptionsContainer.style.display = 'none';
        });

        dynamicOptionsContainer.appendChild(optionElement);
    });
});

// Function to handle user input changes
document.getElementById('userInput').addEventListener('input', function () {
    // Handle user input changes as needed
    console.log("User Input:", this.value);
});
