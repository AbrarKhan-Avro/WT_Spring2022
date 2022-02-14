<?php

if(isset($_POST["submit"]))
{
    $fname = $_POST["fname"];
    if(empty($fname))
    {
        echo "Please enter a valid first name! <br>";
    }
    else
    {
        echo "Your first name is " . $fname . "<br>";
    }
    $lname = $_POST["lname"];
    if(empty($lname))
    {
        echo "Please enter a valid last name! <br>";
    }
    else
    {
        echo "Your last name is " . $lname . "<br>";
    }
    $age = $_POST["lname"];
    if(empty($age))
    {
        echo "Please enter a valid age! <br>";
    }
    else
    {
        echo "Your age is " . $age . "<br>";
    }
    if(isset($_POST["des"]))
    {
        echo "You have selected " . $_POST["des"] . "<br>";
    }
    else
    {
        echo "You did not select any option! <br>";
    }
    if(!isset($_POST["lang1"]) && !isset($_POST["lang2"]) &&!isset($_POST["lang3"])) 
    {
        echo "You did not select any box! <br>";
    }
    else
    {
        if(isset($_POST["lang1"]))
        {
            echo "you selected box 1 <br>";
        }
        elseif(isset($_POST["lang2"]))
        {
            echo "you selected box 2 <br>";
        }
        else
        {
            echo "you selected box 3 <br>";
        }
    }
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        echo "Please enter a valid Email! <br>";
    }
    else
    {
        echo "Your Email = " . $email . "<br>";
    }
    if(empty($pass) || strlen($pass)<8 )
    {
        echo "Please enter a valid password! <br>";
    }
    else
    {
        echo "password = " . $pass . "<br>";
    }

    $check = getimagesize($_FILES["myfile"]["tmp_name"]);
    if($_FILES["myfile"]["size"]>2000000)
    {
        echo "Sorry, the file is too large!";
    }
    elseif($check == false)
    {
        echo "File is not an image!";
    }
    else
    {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Files/"."abc.jpg")) 
        {
            echo "The file has been uploaded.";
        }
        else
        {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>