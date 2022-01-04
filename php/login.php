<?php

$users = [
    ['email'=>'nicolas290@live.com','password'=>'33319987']
];

foreach($users as $user){
    if($user['email'] == $_POST['email-value'] && $user['password'] == $_POST['password-value'] ){
        //header('Location: home.php');
        header('Location: home.php');
        goto loged;
    }
}
header('Location: ../index.php?login=erro');
loged:;
?>
