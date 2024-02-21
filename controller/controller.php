<?php
include("../model/model.php");

$email= $name=$password=$gender=$phone="";
$emailErr= $nameErr=$passwordErr=$genderErr=$phoneErr="";
$haserror = false;


 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(empty($_POST["name"]))
    {
        $nameErr="Name is required";
        $haserror = true;
    }
    else
    {
        $name=test_input($_POST["name"]);
        if(strlen($name) < 10)
        {
            $nameErr = "Name should be at least 10 characters long:";
        }
    }

    if(empty($_POST["email"]))
    {
        $emailErr = "Email is required";
        $haserror = true;
    }
    else
    {
        $email= test_input($_POST["email"]);
        if (!preg_match("/^.{5,}@([a-z0-9\-]+\.)+[a-z]{2,5}$/i", $email))
        {
            $emailErr = "Invalid email format: ";
        }
    }

    if(empty($_POST["password"]))
    {
        $passwordErr="Password is required";
        $haserror = true;
    }
    else
    {
        $password=test_input($_POST["password"]);
        if(!preg_match("/^(?=.*[a-z]).{6,}$/",$password))
        {
            $passwordErr="Password must be at least 6 characters long and contain at least 1 lowercase letter";
        }
    }

    if (empty($_POST["gender"])) 
    {
        $genderErr = "Gender is required";
        $haserror = true;
    }
    else 
    {
        $gender = test_input($_POST["gender"]);
    }

    if(empty($_POST["Phone"]))
    {
        $phoneErr = "Phone is required";
        $haserror = true;
    }
    else
    {
        $phone= test_input($_POST["Phone"]);
        if (!preg_match("/^[0-9]{11}+$/", $phone))
        {
            $phoneErr = "Invalid phone number";
        }
    }

    if($haserror==false)
    {
        
        $model = new register();
        $conobj = $model->OpenCon();
        $result = $model->InsertUser($conobj,"user",$name,$email,$password,$gender,$phone);
        if($result===TRUE)
        {
            echo "Registration Successful";
        }
        else
        {
            echo "Registration Failed ".$conobj->error;
        }
        
    }
    else
        {
            echo "Complete the validation first";
        }
}
?>