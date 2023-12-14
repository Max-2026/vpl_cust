function searchClicked() {
    var selectedCountry = document.getElementById('countrySelect');
    var selectedCountryCode = selectedCountry.value;
    var selectedCountryName = selectedCountry.options[selectedCountry.selectedIndex].text;

    // Get the value from the input field
    var phoneNumberInput = document.getElementById('dynamicOptionsInput').value;

    document.getElementById('additionalTable').style.display = 'none';

    if (selectedCountryCode !== '' || phoneNumberInput.trim() !== '') {
        document.getElementById('secondFormContainer').style.display = 'block';
        document.getElementById('originalTable').style.display = 'table';

        var countryNameCellOriginal = document.querySelector('#originalTable td.country-name a');
        var countryNameCellAdditional = document.querySelector('#additionalTable td.country-name');

        if (selectedCountryCode !== '') {
            // If a country is selected, update with the country's code
            countryNameCellOriginal.textContent = selectedCountryName.split(' - ')[0];
            countryNameCellAdditional.textContent = selectedCountryName.split(' - ')[1];
        } else {
            // If no country is selected, update with the input field value
            countryNameCellOriginal.textContent = phoneNumberInput;
            countryNameCellAdditional.textContent = phoneNumberInput;
        }
        countryNameCellOriginal.href = '#';
    } else {
        // Handle if country or phone number is not selected
    }

    // Use phoneNumberInput as needed
    console.log('Country Name:', selectedCountryCode !== '' ? selectedCountryName.split(' - ')[1] : 'N/A');
    console.log('Phone Number:', phoneNumberInput);
}

document.getElementById('originalTable').addEventListener('click', function (e) {
    var target = e.target;

    if (target.tagName.toLowerCase() === 'a' && target.closest('#originalTable')) {
        document.getElementById('originalTable').style.display = 'none';
        document.getElementById('additionalTable').style.display = 'table';
    }
});