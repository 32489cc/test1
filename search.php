<?php
$user="root";
$password="";
$dbname="mydatabase";
$host='localhost:3306';
$dsn="mysql:host={$host};dbname={$dbname};charset=utf8";
    $pdo=new PDO($dsn, $user, $password);
   $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="select * from fees ";
    $result=$pdo->query($sql);
//     echo "<table>";
//         echo "<thead><tr>";
//         echo "<th>" , "ID" , "</th>";
//         echo "<th>","缴费内容","</th>";
//         echo "<th>","缴费金额","</th>";
//         echo "</tr></thead>";
// echo "<tbody>";
//    foreach($result as $fee){
//     echo "<tr>";
//    echo "<td>" ,$fee['id'], "</td>";
//    echo  "<td>" ,$fee['fee_name'], "</td>";
//    echo  "<td>" ,$fee['price'], "</td>";
//    }
?>