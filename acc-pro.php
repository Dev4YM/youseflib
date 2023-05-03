<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:lo.html?error');
       }
       else
       {
           $to = "yousef6k@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:lo.html?success");
           }
       }
    }
    else
    {
        header("location:lo.html");
    }
?>
