<?php
require("msg.php");

//抓取 msg.php 布好的GET表單的刪除ID
mysql_query("DELETE FROM message WHERE id='$_GET[id]'");

//刪除完畢轉回留言板
header('Location: msg.php');
?>