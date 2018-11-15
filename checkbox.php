<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post"> 
        <input type="checkbox" name="q[]" value="RUNOOB"> Runoob<br> 
        <input type="checkbox" name="q[]" value="GOOGLE"> Google<br> 
        <input type="checkbox" name="q[]" value="TAOBAO"> Taobao<br>
        <input type="submit" value="提交">
    </form>
<?php
$q = $_REQUEST['q'];
if(is_array($q)){
    $sites = array(
        "RUNOOB"=>"runoob runoob",
        "GOOGLE"=>"google google",
        "TAOBAO"=>"raobao raobao"
    );
    foreach($q as $item){
        echo "<br />".$sites[$item];
    }
}
?>
</body>
</html>
