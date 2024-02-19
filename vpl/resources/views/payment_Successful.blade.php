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

    <!-- PHP block to check payment success -->
    <?php
    // Check if 'paymentSuccess' session variable is set
    $paymentSuccess = session('paymentSuccess');
    ?>

    <!-- Script to show SweetAlert on page load -->
    <script>
        // Check if payment was successful
        var paymentSuccess = <?php echo json_encode($paymentSuccess); ?>;
        if (paymentSuccess) {
            // Show SweetAlert
            Swal.fire({
                title: 'Payment Successful!',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                // Redirect to dashboard route when the user clicks OK
                if (result.isConfirmed || result.isDismissed) {
                    window.location.href = '{{ route("dashboard") }}';
                }
            });
        }
    </script>
</body>
</html>
