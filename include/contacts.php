<?php
include("../sm/include/connect.php");	

	 $result17 = DB::Query("SELECT * FROM site",$link);
	  $row17= /* fixed MMiC */ mysqli_fetch_array($result17);
if (isset ($_POST['contactFF'])) {
  $to = $row17['text3']; // поменять на свой электронный адрес
  $from = "Письмо с сайта <mail@xn--45-vlc5agg4f.xn--p1ai>";
  $subject = "Запись на консультацию";
  $message = "Имя: ".$_POST['nameFF']."\nТелефон: ".$_POST['contactFF']."\nIP: ".$_SERVER['REMOTE_ADDR']."\nУдобное время: ".$_POST['vremyaFF']."\nСообщение: ".$_POST['messageFF']."\n".$_POST['checkboxFF'];
  $boundary = md5(date('r', time()));
  $filesize = '';
  $headers = "MIME-Version: 1.0\r\n";
 $headers .= "From: " . $from . "\r\n";
  $headers .= "Reply-To: " . $from . "\r\n";
  $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
  $message="
Content-Type: multipart/mixed; boundary=\"$boundary\"

--$boundary
Content-Type: text/plain; charset=\"utf-8\"
Content-Transfer-Encoding: 7bit

$message";
  for($i=0;$i<count($_FILES['fileFF']['name']);$i++) {
     if(is_uploaded_file($_FILES['fileFF']['tmp_name'][$i])) {
         $attachment = chunk_split(base64_encode(file_get_contents($_FILES['fileFF']['tmp_name'][$i])));
         $filename = $_FILES['fileFF']['name'][$i];
         $filetype = $_FILES['fileFF']['type'][$i];
         $filesize += $_FILES['fileFF']['size'][$i];
         $message.="

--$boundary
Content-Type: \"$filetype\"; name=\"$filename\"
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=\"$filename\"

$attachment";
     }
   }
   $message.="
--$boundary--";

  if ($filesize < 10000000) { // проверка на общий размер всех файлов. Многие почтовые сервисы не принимают вложения больше 10 МБ
    mail($to, $subject, $message, $headers);
   
  }
}
?>