<?php

function check_login($con)
{
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
        $query = "select * FROM students WHERE id = '$id' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("location: student_login.php");
    die;
}

function random_num($length)
{
    $text = "";
    if($length < 11)
    {
        $length = 11;
    }
    $len = rand(10,$length);
    for ($i=0; $i < $len; $i++) {
        # code...
        $text .= rand(0,9);
    }
    return $text;
}
