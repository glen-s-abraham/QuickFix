<?php
require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['user_name']) && isset($_POST['email'])&& isset($_POST['phone'])&& isset($_POST['password'])&& isset($_POST['address1'])&& isset($_POST['address2'])&& isset($_POST['city'])&& isset($_POST['state'])
    && isset($_POST['pin']))
    {
        $username = $_POST['user_name'];
	      $email = $_POST['email'];
        $mobile = $_POST['phone'];
        $password = $_POST['password'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pin = $_POST['pin'];

        $query = "SELECT * FROM `users` WHERE email='$email' or mobile=$mobile ";
        $result = mysqli_query($connection, $query);
        $count=mysqli_num_rows($result);

        if($count!=0)
        {
          $msg ="Email address or Phone number already in use";
          header('Location:../user.php?msg='.$msg);
        }
        else {
          $query = "INSERT INTO `users`( `user_name`, `email`, `mobile`, `password`, `address1`, `address2`, `city`, `state`, `pin`) VALUES ('$username','$email',$mobile,'$password','$address1','$address2','$city','$state',$pin)";
          $result = mysqli_query($connection, $query);
          if($result){
              $msg = "User Created Successfully.";
                header('Location:../user.php?msg='.$msg);
          }else
          {
              $msg ="User Registration Failed";
              header('Location:../user.php?msg='.$msg);

        }


          }
      }


    ?>
