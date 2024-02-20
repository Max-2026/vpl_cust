<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>


<script>
    @if(session('paymentSuccess'))
        swal({
            title: "Successful",
            text: "TalkTime Individual Number Added!",
            icon: "success",
            closeOnClickOutside: false,
        }).then((value) => {
            window.location.href = "{{ route('view_all_numbers') }}";
        });
    @else
        swal({
            title: "Warning",
            text: "Please Add Credit Card or Set Primary Card!",
            icon: "error",
            closeOnClickOutside: false,
        }).then((value) => {
            window.location.href = "{{ route('credit_card_details') }}";
        });
    @endif
</script>


</body>
</html>