<?php

    // connections
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $con = new mysqli($server_name, $user_name, $password);
    if($con->connect_error) die("Connection failed : ". $con->connect_error);
    $con->query("USE cust");

    $sql = "SELECT id, first_name, dob, cnic, sex, email FROM students WHERE term ='213' limit 100";
    $result = $con->query($sql);

    $result_to_send;
    if ($result->num_rows > 0) {
        // output data of each row
        $i = 0;
        while($row = $result->fetch_assoc()) {
            $result_to_send[$i++] = $row;   
        }
    }
    echo json_encode($result_to_send);
    $con->close();
?>