@extends('layout')
@section('title', 'Buy Number')

@section('buy_number')

    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="container-fluid">
                <div class="row m-3">
                    <div class="col-md-12 mt-0 mx-auto equal-width">
                        <div class="card rounded">
                            <div class="card-body mt-2 mb-1 mx-auto">
                                <div class="media mr-5">
                                    <img src="images/play.png" class="mr-5" alt="Image 1" height="100px">
                                    <div class="media-body mt-3">
                                        <h3 class="mt-0">Watch Video Tutorial</h3>
                                        <h3 class="text-center"><a class="a_tag " href="#">How to Buy a Number?</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-6 mx-auto">
                    <div class="form-section">
                        <form id="searchForm" action="{{ url('/get-did-area-data') }}" method="GET">
                            @csrf <!-- CSRF token -->
                            <div class="form-group custom-dropdown">
                                <input type="text" class="form-control" id="dynamicOptionsInput"
                                    name="dynamicOptionsInput" placeholder="Phone number">
                                <div id="dynamicOptionsContainer"></div>
                            </div>
                            <div class="or-divider d-flex align-items-center">
                                <div></div>
                                <span class="px-2">OR</span>
                                <div></div>
                            </div>
                            <div class="form-group">
                                <select class="form-select" id="countrySelect" name="countrySelect" required>
                                    <option value="" selected>Select Country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->code }}" data-show-form="{{ $country->code }}">
                                            {{ $country->code }} - {{ $country->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container pt-3 " id="secondFormContainer" style="display:;">
            <div class="row">
                <div class="col-md-12">

                    <table class="table table-bordered originalTable" id="originalTable">
                        <thead>
                            <tr>
                                <th scope="col">Area Code</th>
                                <th scope="col">City/Area</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $countryId = request()->input('countrySelect', '');
                            @endphp

                            @if (is_array($AreaCode))
                                @foreach ($AreaCode as $key => $value)
                                    @if ($key != 0 && is_array($value))
                                        <tr>
                                            <td><a href="javascript:void(0);"
                                                    onclick="submitAreaRequest('{{ $countryId }}', '{{ $value[0] }}')">{{ $countryId }}-{{ $value[0] }}</a>
                                            </td>
                                            <td><a href="javascript:void(0);"
                                                    onclick="submitAreaRequest('{{ $countryId }}', '{{ $value[0] }}')">{{ $value[1] ?? 'No City Found' }}</a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    <br>
                    <br>

                    <table class="table table-bordered originalTable">
                        <thead>
                            <tr>
                                <th><input type="checkbox" name="" id="selectAll"></th>
                                <th scope="col">Number</th>
                                <th scope="col">Area</th>
                                <th scope="col">Country</th>
                                <th scope="col">Monthly Charges</th>
                                <th scope="col">Setup Cost</th>
                                <th scope="col">Per Minute Charges</th>
                                <th scope="col">Rating</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if (is_array($apiData))
                                @foreach ($apiData as $key => $value)
                                    @if ($key != 0 && is_array($value))
                                        <tr>
                                            <td><input type="checkbox" class="checkbox"></td>
                                            <td>{{ $value[0] }}</td>
                                            <td>{{ $value[6] }}</td>
                                            <td>{{ $value[5] }}</td>
                                            <td>{{ $value[2] }}</td>
                                            <td>{{ $value[1] }}</td>
                                            <td>{{ $value[3] }}</td>
                                            <td>{{ $value[4] }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                            <tr>
                                <td colspan="12" class="text-center">
                                    <div class="d-flex justify-content-right align-items-center">
                                    <input name="mm" type="radio" value="Monthly" checked    {{ old('mm') == 'Monthly' ? 'checked' : '' }}> &nbsp;&nbsp;Monthly
                                    <input name="mm" class="ml-2" type="radio" value="Annually" {{ old('mm') == 'Annually' ? 'checked' : '' }}> &nbsp;&nbsp;Annually

                                        <button class="btn btn-primary ml-4" onclick="addToCart()">Add Selected to Shopping
                                            Cart</button>
                                    </div>
                                </td>
                            </tr>
                            <tr style="bgcolor:;">
                                <td class="simple" style="align:left;" colspan="12">* Per Minute Receiving Charges After
                                    Free Minutes</td>
                            </tr>
                            <tr style="bgcolor:;">
                                <td class="simple" style="align:left;" colspan="12">** (cannot be purchased in batch)</td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <script>
        function submitAreaRequest(areaValue1, areaValue2) {
            // Create a dynamic form
            var form = document.createElement('form');
            form.method = 'get';
            form.action = '{{ url('/get-available-numbers') }}'; // Replace with your desired URL

            // Create a hidden input field for the first area value
            var areaInput1 = document.createElement('input');
            areaInput1.type = 'hidden';
            areaInput1.name = 'areaValue1';
            areaInput1.value = areaValue1;

            // Create a hidden input field for the second area value
            var areaInput2 = document.createElement('input');
            areaInput2.type = 'hidden';
            areaInput2.name = 'areaValue2';
            areaInput2.value = areaValue2;

            // Append the hidden inputs to the form
            form.appendChild(areaInput1);
            form.appendChild(areaInput2);

            // Append the form to the document body
            document.body.appendChild(form);

            // Submit the form
            form.submit();
        }

        // Function to handle adding selected numbers to the shopping cart
        function addToCart() {
    // Get all checkboxes
    const checkboxes = document.querySelectorAll('.checkbox');
    // Initialize an array to store selected numbers
    const selectedNumbers = [];
    // Get the selected billing type
    const billingType = document.querySelector('input[name="mm"]:checked').value;

    // Loop through checkboxes to find selected ones
    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            // Extract the number and other relevant data from the table row
            const row = checkbox.parentNode.parentNode;
            const number = row.cells[1].textContent.trim(); // Number
            const area = row.cells[2].textContent.trim(); // Area
            const country = row.cells[3].textContent.trim(); // Country
            const monthlyCharges = row.cells[4].textContent.trim(); // Monthly Charges
            const setupCost = row.cells[5].textContent.trim(); // Setup Cost
            const perMinuteCharges = row.cells[6].textContent.trim(); // Per Minute Charges
            const rating = row.cells[7].textContent.trim(); // Rating

            // Push the selected number and its data to the array
            selectedNumbers.push({
                number: number,
                area: area,
                country: country,
                monthlyCharges: monthlyCharges,
                setupCost: setupCost,
                perMinuteCharges: perMinuteCharges,
                rating: rating,
                billing_type: billingType // Add the selected billing type to the object
            });
        }
    });

    // Check if any number is selected
    if (selectedNumbers.length > 0) {
        // Construct the URL for the cart page
        const cartURL = '{{ url('/cart') }}';

        // Create a form element
        const form = document.createElement('form');
        form.method = 'post';
        form.action = cartURL;

        // Create an input element to hold the selected numbers data
        const inputNumbers = document.createElement('input');
        inputNumbers.type = 'hidden';
        inputNumbers.name = 'selectedNumbers';
        inputNumbers.value = JSON.stringify(selectedNumbers);

        // Append the CSRF token
        const csrfToken = document.createElement('input');
        csrfToken.type = 'hidden';
        csrfToken.name = '_token';
        csrfToken.value = '{{ csrf_token() }}';

        // Append the input elements to the form
        form.appendChild(inputNumbers);
        form.appendChild(csrfToken);

        // Append the form to the document body
        document.body.appendChild(form);

        // Submit the form
        form.submit();
    } else {
        // Alert the user if no number is selected
        alert('Please select at least one number to add to the cart.');
    }
}


        document.addEventListener('DOMContentLoaded', function() {
            // Select all checkbox
            const selectAllCheckbox = document.getElementById('selectAll');
            const checkboxes = document.querySelectorAll('.checkbox');

            // Function to toggle all checkboxes
            function toggleCheckboxes() {
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = selectAllCheckbox.checked;
                });
            }

            // Event listener for select all checkbox
            selectAllCheckbox.addEventListener('change', function() {
                toggleCheckboxes();
            });

            // Event listener for individual checkboxes
            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    // Check if all checkboxes are checked
                    const allChecked = [...checkboxes].every(function(cb) {
                        return cb.checked;
                    });

                    // Update select all checkbox state
                    selectAllCheckbox.checked = allChecked;
                });
            });
        });

        // dynamic api options of input
        var dynamicOptions = [
            @foreach ($countries as $country)
                "{{ $country->code }} - {{ $country->name }}",
            @endforeach
        ];
    </script>

@endsection
