<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var success = "{{ $success }}";
            var successful = "{{ $successful }}";

            if (success && successful) {
                Swal.fire({
                    icon: 'success',
                    title: success,
                    showConfirmButton: true, // Show the "OK" button
                    allowOutsideClick: false // Prevent dismissing the alert by clicking outside of it
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('credit_card_details') }}";
                    }
                });
            }
        });
    </script>
</body>
</html>
