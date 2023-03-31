<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $sent = $_POST['sent'];

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into portfolio(firstName, lastName, email, project, sent) 
        value(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss",$firstName, $lastName, $email, $project, $sent);
        $stmt->execute(); 
        echo 
        "registration successfully.....";
        $stmt->close();
        $conn->close();
    }
?>