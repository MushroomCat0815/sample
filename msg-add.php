<?php
require("msg.php");

//設定日期格式
$date=date("Y-m-d");

$SaveNewMsg=mysql_query("INSERT INTO message(guest_id, content, date) 
//對應 msg.php 新增留言區的 POST表單
VALUES('$_SESSION[id]','$_POST[msg]','$date')");

//檢査
if(!$SaveNewMsg){
 echo "留言失敗";
}else{
 echo "留言成功";
}

//新增完畢轉回留言板
header('Location: msg.php');
?>