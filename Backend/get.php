<?php 
    include "./cors.php";
    include "./db.php";

    $ourQueryString = "SELECT * FROM products"; 
    $dbresult = mysqli_query($connection, $ourQueryString);
    $rows = mysqli_fetch_all($dbresult, MYSQLI_ASSOC);
    echo "<option value='' disabled selected>--Select A Product To Review--</option>";
    foreach($rows as $row) {
        echo "<option value=".$row["name"].">".$row["name"]."</option>";
    }
?>