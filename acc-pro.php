<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:lo.php?error');
       }
       else
       {
           $to = "yousef6k@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:lo.php?success");
           }
       }
    }
    else
    {
        header("location:lo.php");
    }
?>
