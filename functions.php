<?php

function check_login_student($con)
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


function check_login_admin($con)
{
    if (isset($_SESSION['id_user_admin'])) {
        $id_user_admin = $_SESSION['id_user_admin'];
        $query = "select * FROM users_admin WHERE id_user_admin = '$id_user_admin' limit 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("location: admin_login.php");
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
