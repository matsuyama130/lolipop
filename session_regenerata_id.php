<?php
// sessionをスタートしてidを再生成しよう．
// 旧idと新idを表示しよう．
session_start();

$old_session_id = session_id();

session_regenerate_id(true);

$new_session_id = session_id();


//var_dump($old_session_id)
//var_dump($new_session_id)

echo "<p>旧id: {$old_session_id}</p>";
echo "<p>新id: {$new_session_id}</p>";
exit();


unset($_SESSION[key]);
$_SESSION = array();
setcookie(session_name(), '', time() - 42000, '/');
session_destroy();
