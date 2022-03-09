<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>jQuery登录和注册切换表单</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.min.css">

    <link rel="stylesheet" href="css/style.css">
    <script src="./js/jquery.min.js">  </script>
</head>
<body id="body">

<button id="btn1" >獲取</button>
<button id="btn2" >設置</button>
<button id="btn3" >show</button>
<button id="btn4" >hidden</button>
<div id="div1"></div>
</body>

<script>
    $(function(){
$('#btn3').click(function(){
    $('#div1').show(200);
});
$('#btn4').click(function(){
    $('#div1').hide();
});
    });
</script>
<style>
    #div1{
        width:200px;
        height:200px;
        display:none;
        background-color:red;
    }
</style>