<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>jQuery登录和注册切换表单</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<table>
<thead>
    <tr>
<th>ID</th>
<th>缴费内容</th>
<th>缴费金额</th>
        </tr></thead>
        <tbody>
            <?php require_once "./search.php" ?>
   <?php foreach($result as $fee){ ?>
    <tr>
    <td><?php echo $fee['id'] ?></td>
   <?php echo  "<td>" ,$fee['fee_name'], "</td>"; ?>
   <?php echo  "<td>" ,$fee['price'], "</td>"; ?>
   <?php } ?>
</table>
</body>