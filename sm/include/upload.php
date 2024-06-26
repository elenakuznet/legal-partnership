<?
$file = $_FILES['uimage']['name'];
       $table =   $_POST["table"];
$fileput = $_FILES['uimage']['tmp_name'];
 /*$table = pathinfo($file);
    $table = $table['filename'];*/
if($file != ''){
	/* fixed MMiC */ DB::Query("TRUNCATE table $table", $link);
}
 /* fixed MMiC */ DB::Query("load data local  infile '$fileput' into table $table character set cp1251 fields terminated by ';' ENCLOSED BY '\"' lines terminated by '\r\n'  ignore 1 lines", $link);
?>