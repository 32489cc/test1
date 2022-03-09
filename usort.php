<?php
function usersort($a,$b){
    var_dump($a,$b);
    if($b=='smarts'){
        return 1;
    }else if($a=='smarts'){
        return -1;
    }
        return ($a==$b) ? 0 : (($a<$b) ? -1 : 1);
        
    }
$values=array('name'=>"バズライトイヤー",'email_address'=>"buzz＠starcommand.gal",
'age'=>32,'smarts'=>"some");
if($_POST['submitted']){
    $sorttype=$_POST['sort_type'];
    if($sorttype=="usort"||$sorttype=="uksort"||$sorttype=="uasort"){
        $sorttype($values,"usersort");
    }else{
        $sorttype($values);
    }
} ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="post">
<p>
    <input type="radio" name="sort_type" value="sort"/>標準的ソート<br/>
    <input type="radio" name="sort_type" value="rsort" />逆順ソート<br/>
    <input type="radio" name="sort_type" value="usort" />ユーザ定義順ソート<br/>
    <input type="radio" name="sort_type" value="ksort" />キーによるソート<br/>
    <input type="radio" name="sort_type" value="krsort" />キー逆順によるソート<br/>
    <input type="radio" name="sort_type" value="uksort" />ユーザ定義キーによるソート<br/>
    <input type="radio" name="sort_type" value="asort" />値によるソート<br/>
    <input type="radio" name="sort_type" value="arsort" />値逆順によるソート<br/>
</p>
<p align="center"><input type="submit" value="ソート" name="submitted" /></p>
<p> Values <?=$_POST['submitted'] ? "{$sorttype}による結果":"ソートしない";
?>:</p>
<ul>
    <?php foreach ($values as $key =>$value){
        echo "<li><b>{$key}</b>:{$value}</li>";
    } ?>
    </form>