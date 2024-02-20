<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Check if error message exists in $error
            var errorMessage = "{{ $error }}";
            if (errorMessage.trim() !== '') {
                swal({
                    title: "Error!",
                    text: errorMessage,
                    icon: "error",
                    button: "OK",
                }).then(function() {
                    // Redirect to previous page or any other page
                    window.history.back();
                });
            }
        });
    </script>
</body>
</html>
