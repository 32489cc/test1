<?php
$user="root";
$password="";
$dbname="mydatabase";
$host='localhost:3306';
$dsn="mysql:host={$host};dbname={$dbname};charset=utf8";
    $pdo=new PDO($dsn, $user, $password);
   $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   $sql="select * from students ";
    $result=$pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<table , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        echo "<table>";
        echo "<thead><tr>";
        echo "<th>" , "学号" , "</th>";
        echo "<th>","姓名","</th>";
        echo "<th>","性别","</th>";
        echo "<th>","操作","</th>";
        echo "<th>","删除","</th>";
        echo "</tr></thead>";
echo "<tbody>";
   foreach($result as $v){
      echo "<tr>";
          echo " <td>" , $v['student_code'], "</td>";
          echo " <td>" , $v['name'], "</td>";
          echo " <td>" , $v['gender'], "</td>";
          echo " <td>" , "<a href='222.php?>修改</a>", "</td>";
          echo " <td>" , "<a href='111.php?>删除</a>", "</td>";
          echo "</tr>";
}      
echo "</tbody>";
echo "</table>";
?>
</body>
</html>