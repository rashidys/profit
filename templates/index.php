<?php

//require_once  __DIR__. '/User.php';
//require_once __DIR__ . '/classes/GuestBook.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php foreach ($guestBook->getRecords() as $record) { ?>
<article style="border: 1px dotted gray; margin-bottom: 20px;">
    <?php echo $record->getMessage()?>
</article>
<?php }?>


<hr>

<form action="/append.php" method="post">
    <textarea name="message"></textarea>
    <button type="submit">Отправить</button>
</body>
</html>