<?php 
    include "./cors.php";
    include "./db.php";
    
    $Name = $_POST["submittedName"];
    $Email = $_POST["submittedEmail"];
    $Product = $_POST["submittedProduct"];
    $Rating = $_POST["submittedRating"];
    $Description = $_POST["submittedDescription"];
    if(!empty($Name) && !empty($Email) && !empty($Product) && !empty($Rating) && !empty($Description)) {
        $ourQueryString = "INSERT INTO reviews (review_description, review_rating, product, user_name, user_email) VALUES ('$Description', '$Rating', '$Product', '$Name', '$Email')"; 
        $dbresult = mysqli_query($connection, $ourQueryString);
        if($dbresult) {
            echo "You have successfully submitted your review. Thank you.";
        } else {
            echo "There's been an error submitting your review. Please try again.";
            console.log(mysqli_error($connection));
        }
    } else {
        echo "Please fill in the form completely.";
    }
        
?>