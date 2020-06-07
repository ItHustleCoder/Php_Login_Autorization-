<?php 
    sesssion_start();
    if(!isset($_SESSION['session_id']))
    {
        echo "404 not found";
    }
    else 
    {
        echo $name=$_REQUEST['username'];
        echo $pwd=$_REQUEST['password'];
        echo $email=$_REQUEST['email'];
        $to= "somemail@gmail.com" // Use $email for get input mail address
        $object="Account autorization";
        $headers= "From: andriybohdanit@gmail.com";
        mail($to,$object,$text,$headers);
        echo $_SeSSION['sessionid'];
        $code=mb_subst($_SESSION['sessionid'],0,8);
        $text="Dear " .$name. "confirm youre address by entering this password :" .$code;
    }

    session_destroy();

?>