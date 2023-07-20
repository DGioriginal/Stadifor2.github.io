<?php

/* https://api.telegram.org/bot6320599556:AAGBWqBby3HgmbX-Aww4yhdY6RG9elN3kvQ/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$aidi = $_POST['user_aidi'];
$mm = $_POST['user_mm'];
$tgname = $_POST['user_tgname'];
$nap = $_POST['user_nap'];
$old = $_POST['user_old'];
$token = "6320599556:AAGBWqBby3HgmbX-Aww4yhdY6RG9elN3kvQ";
$chat_id = "-922885971";
$arr = array(
  'Айді: ' => $aidi,
  'ММ: ' => $mm,
  'ММ: ' => $tgname,
  'Напарники:' => $nap,
  'Років:' => $old
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>