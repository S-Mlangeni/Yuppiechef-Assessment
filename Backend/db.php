<?php 
    if (file_exists(".env")) {
        require("vendor/autoload.php");
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();
    }
    
    //Connecting to database:
    $connection = mysqli_connect(
        $_ENV["DB_HOST"], 
        $_ENV["DB_USERNAME"], 
        $_ENV["DB_PASSWORD"], 
        $_ENV["DB_NAME"]
    );

    if(!$connection) {
        echo "connection error: ".mysqli_connect_error()."<br/>";
    }
?>