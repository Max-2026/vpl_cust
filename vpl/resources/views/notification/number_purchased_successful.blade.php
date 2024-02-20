<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.css">
</head>
<body>
    <!-- Include SweetAlert JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.js"></script>

    <!-- Script to show SweetAlert on page load -->
    <script>
        // Check if payment was successful
        var paymentSuccess = {!! json_encode($paymentSuccess) !!};
        if (paymentSuccess) {
            // Show SweetAlert for success
            Swal.fire({
                title: 'Number Purchased Successful!',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                // Redirect to view_all_numbers route when the user clicks OK
                if (result.isConfirmed || result.isDismissed) {
                    window.location.href = '{{ route("view_all_numbers") }}';
                }
            });
        } else {
            // Show SweetAlert for error
            Swal.fire({
                title: 'Please Add Funds to your account!',
                icon: 'error',
                confirmButtonText: 'OK'
            }).then((result) => {
                // Redirect to previous page when the user clicks OK
                if (result.isConfirmed || result.isDismissed) {
                    window.location.href = "{{ route('add_funds') }}";
                }
            });
        }
    </script>
</body>
</html>
