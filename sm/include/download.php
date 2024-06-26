<?
include("connect.php");
include("include/functions.php"); 

 $table = $_POST['table2'];
$filename = $table . ".csv";
 // Имя загружаемого файла файла. 

header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-type: application/vnd.ms-excel");
 

 /* fixed MMiC */ DB::Query ("SET NAMES 'cp1251'");
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM $table",$link);
$row =  /* fixed MMiC */ str_replace(["\r","\n","\""], [" "," ","'"], mysqli_fetch_assoc($result));
$rowk = array_keys($row);


 echo implode(";", $rowk) . "\r\n";
do {
  $rowv = array_values($row);
	echo "\"" . implode("\";\"", $rowv) . "\"\r\n";
  } while($row =  /* fixed MMiC */str_replace(["\r","\n","\""], [" "," ","'"], mysqli_fetch_assoc($result)));

  exit;
?>