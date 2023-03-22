<?php ob_start()?>

<html>
<head>
    <meta charset = "utf8">
    <title>fail</title>
</head>

<body>

登入失敗<br>
即將跳回登入頁面或
<a href=0316_A1103324.php>點選這裡</a>
<?php

  header("Refresh:3;url=0316_A1103324.php")
    
?>
</body>
</html>
<?php ob_flush(); ?>