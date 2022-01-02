<?php
    //add autoload file
    require "./vendor/autoload.php";
    

    //require classes
    require './src/strategy.php';
    require './src/facade.php';

    // Create instance of classes
    $validate = new Validate();
    $user = new User();
    //new instance of siginupfacade
    $facade = new SignUpFacade($validate, $user);
    //use method to sign up user
    $userstatus=$facade->signUpUser('newuser', 'newpassword', 'newemail');
    echo $userstatus;
?>