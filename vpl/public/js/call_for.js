

    $(document).ready(function() {
        // Existing code for showing/hiding forms 1, 2, and 3
        $("#showForm1").click(function(e) {
            e.preventDefault();
            $("#form1").show();
            $("#form2").hide();
            $("#form3").hide();
            $("#form4").hide(); // Hide form4
            $("#form5").hide(); // Hide form5
            $("#form6").hide(); // Hide form6
            $("#form7").hide(); // Hide form7
        });

        $("#showForm2").click(function(e) {
            e.preventDefault();
            $("#form1").hide();
            $("#form2").show();
            $("#form3").hide();
            $("#form4").hide(); // Hide form4
            $("#form5").hide(); // Hide form5
            $("#form6").hide(); // Hide form6
            $("#form7").hide(); // Hide form7
        });

        $("#showForm3").click(function(e) {
            e.preventDefault();
            $("#form1").hide();
            $("#form2").hide();
            $("#form3").show();
            $("#form4").hide(); // Hide form4
            $("#form5").hide(); // Hide form5
            $("#form6").hide(); // Hide form6
            $("#form7").hide(); // Hide form7
        });

        // New code for showing/hiding forms 4, 5, 6, and 7
        $("#showForm4").click(function(e) {
            e.preventDefault();
            $("#form1").hide();
            $("#form2").hide();
            $("#form3").hide();
            $("#form4").show();
            $("#form5").hide(); // Hide form5
            $("#form6").hide(); // Hide form6
            $("#form7").hide(); // Hide form7
        });

        $("#showForm5").click(function(e) {
            e.preventDefault();
            $("#form1").hide();
            $("#form2").hide();
            $("#form3").hide();
            $("#form4").hide(); // Hide form4
            $("#form5").show();
            $("#form6").hide(); // Hide form6
            $("#form7").hide(); // Hide form7
        });

        $("#showForm6").click(function(e) {
            e.preventDefault();
            $("#form1").hide();
            $("#form2").hide();
            $("#form3").hide();
            $("#form4").hide(); // Hide form4
            $("#form5").hide(); // Hide form5
            $("#form6").show();
            $("#form7").hide(); // Hide form7
        });

        $("#showForm7").click(function(e) {
            e.preventDefault();
            $("#form1").hide();
            $("#form2").hide();
            $("#form3").hide();
            $("#form4").hide(); // Hide form4
            $("#form5").hide(); // Hide form5
            $("#form6").hide(); // Hide form6
            $("#form7").show();
        });
    });