<?php
if(!empty($username) && !empty($pass)){
$user="root";
$password="";
$dbname="test1";
$host='localhost:3306';
$dsn="mysql:host={$host};dbname={$dbname};charset=utf8";
    $pdo=new PDO($dsn, $user, $password);
   $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   echo"datebase{$dbname}已连接";
   $sql= "select * from user where username='$_POST[username]'and password='$_POST[password]";
    $stm=$pdo->prepare($sql);
    $stm->bindValue(':username',$username);
    $stm->bindValue(':pass',$pass);
    $stm->bindValue(':email',$email);
    // 使用 exec() ，没有结果返回 
    $pdo->exec($sql);
    echo "新记录插入成功";
    
}
?>