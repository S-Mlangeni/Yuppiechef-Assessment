/// <reference path="../typings/globals/jquery/index.d.ts" />

$.get("http://localhost/Yuppiechef_Assessment/Backend/get.php", function(backenddata, ourgetstatus) {
    $("#product").html(backenddata); 
    console.log(ourgetstatus);
});


$("#submit-btn").click(function(e) {
    e.preventDefault();
    $(this).html("<i class='fas fa-spinner fa-spin fas-off'></i>");
    const Name = $("#name").val();
    const Email = $("#email").val();
    const Product = $("#product").val();
    const Rating = $("#rating").val();
    const Description = $("#description").val();
    $.post("http://localhost/Yuppiechef_Assessment/Backend/post.php", {
        "submittedName": Name,
        "submittedEmail": Email,
        "submittedProduct": Product,
        "submittedRating": Rating,
        "submittedDescription": Description
    }, function(returnedData, ourpoststatus) {
        setTimeout(function(){
            alert(returnedData)
        }, 1000);
        console.log(ourpoststatus);
        $("#submit-btn").text("Submit");
        $("#name").val("");
        $("#email").val("");
        $("#product").val("");
        $("#rating").val("");
        $("#description").val("")
    });
});


