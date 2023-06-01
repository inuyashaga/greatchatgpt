<?php
$sql = "select sfkqzanz from chat_admin where id = 1";
$sfanh = $mysql->getOne($sql);
if($sfanh == '开启'){
    $expiration = time() + (30 * 24 * 60 * 60); 
    setcookie("kaiqizanzhu", '1', $expiration, "/");
}else{
    $expiration = time() + (30 * 24 * 60 * 60); 
    setcookie("kaiqizanzhu", '0', $expiration, "/");
}
?>