<?php
    $name=$_POST["name"];
    $email=$_POST["email"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $country=$_POST["country"];

    echo "Name :" . $name . "<br>";
    echo "email :" . $email . "<br>";
    echo "dob :" . $dob . "<br>";
    echo "gender :" . $gender."<br>";
    echo "country :" . $country . "<br>";

    $filename = "./userdata.csv";
    $handle = fopen($filename, "a");
    fwrite($handle, "$name \n $email \n $dob \n $gender \n $country");
    fclose($handle);
?>