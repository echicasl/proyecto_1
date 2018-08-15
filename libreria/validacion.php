<?php
session_start();

$userx = $_POST['user'];
$passwordx = $_POST['pass'];

class User{
    public $username;
    public $password;
}

$user1 = new User();
$user1->username = 'Admin';
$user1->password = 'admin';

$user2 = new User();
$user2->username = 'User';
$user2->password = 'user';

$users = array($user1,$user2);

foreach ($users as $user){
    if(($user->username == $userx) and ($user->password == $passwordx)){
        $_SESSION['autorizado']=1;
        $_SESSION['user']=$userx;
        $_SESSION['pass']=$passwordx;
    }
}
if(isset($_SESSION['autorizado']) == true)
{
    echo "<script>
    document.location.href = '../index.php';
    </script>";
}
else{
    echo "<script>
    alert('No valido');
    </script>";
}
?>