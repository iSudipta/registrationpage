<?php
    class register
    {
        function OpenCon()
        {
            $conn = new mysqli("localhost", "root", "", "user3");
            return $conn;
        }
        function InsertUser($conn,$table,$name,$email,$password,$gender,$phone)
        {
            $sql = "INSERT INTO $table (name, email, password,gender,Phone) VALUES('$name','$email','$password','$gender','$phone')";
            $result = $conn->query($sql);
            return $result;
        }
    }
?>