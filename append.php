<?php
 require_once __DIR__ . '/classes/GuestBook.php';
$guestBook = new GuestBook();
$record = new GuestBookRecord($_POST['message']);
$guestBook->append($record);
$guestBook->save();
header('Location: /');