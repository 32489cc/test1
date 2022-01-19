<?php
$user="root";
$password="";
$dbname="test1";
$host='localhost:3306';
$dsn="mysql:host={$host};dbname={$dbname};charset=utf8";
    $pdo=new PDO($dsn, $user, $password);
   $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$username=$_POST['username'];
$pass=$_POST['password'];
$confirm_pass=$_POST['confirm_password'];
$email=$_POST['email'];
if(!preg_match('/^[\w\x80-\xff]{3,15}$/',$username)){
    exit('错误，用户名不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}
if(strlen($pass<6)){
    exit('错误，密码小于6。<a href="javascript:history.back(-1);">返回</a>');
}
if($pass==$confirm_pass){
    $password_hash=password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
       $sql= "INSERT INTO user (username, pass,email) VALUES ('$username', '$password_hash','$email')";
        $pdo->exec($sql);
        echo '注册成功<a href="javascript:history.back(-1);">返回</a>';
    }
        else{
            exit('错误，密码不一致。<a href="javascript:history.back(-1);">返回</a>');
        }
?>