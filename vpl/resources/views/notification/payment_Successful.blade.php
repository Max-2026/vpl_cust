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
            // Show success message
            var successMessage = {!! isset($successMessage) ? json_encode($successMessage) : "'Payment successful!'" !!};
            Swal.fire({
                title: 'Payment Successful!',
                text: successMessage,
                icon: 'success',
                showCancelButton: false,
                confirmButtonText: 'OK'
            }).then((result) => {
                // Redirect to dashboard route when the user clicks OK
                if (result.isConfirmed) {
                    window.location.href = '{{ route("dashboard") }}';
                }
            });
        } else {
            // Show payment failed message
            Swal.fire({
                title: 'Payment Failed!',
                text: 'Payment was not successful.',
                icon: 'error',
                showCancelButton: false,
                confirmButtonText: 'OK'
            }).then((result) => {
                // Redirect to previous page when the user clicks OK
                if (result.isConfirmed || result.isDismissed) {
                    window.history.back();
                }
            });
        }
    </script>
</body>
</html>
