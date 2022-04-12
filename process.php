<?php
    /*  
        $_REQUEST
        $_POST
        $_GET
    */

    require_once("fileops.php"); 

    $myFile = "students/personal.doc";
    // Post method
    if(isset($_POST['Fname']) && isset($_POST['Lname']) && isset($_POST['email']) && isset($_POST['num']) && isset($_POST['add'])){
        rFile( $myFile, "Firstname:".$_POST['Fname']."\n");
        rFile( $myFile, "Lastname:".$_POST['Lname']."\n");
        rFile( $myFile, "Email:".$_POST['email']."\n");
        rFile( $myFile, "Phone number:".$_POST['num']."\n");
        rFile( $myFile, "Address:".$_POST['add']."\n"."\n");
        
        header("Location: index.html");
        echo 'submitted successfully';

    }else{
        echo '<h1>Invalid form data!</h1>';
    }





      
    
?>