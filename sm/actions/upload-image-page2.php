<?php
$error_img = array();

if($_FILES['uimage']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage']['error'])
 {
 case 1: $error_img[] =  'Размер файла превышает допустимое значение!'; break;
 case 2: $error_img[] =  'Размер файла превышает допустимое значение!'; break;
 case 3: $error_img[] =  'Не удалось загрузить часть файла!'; break;
 case 4: $error_img[] =  'Файл не был загружен!'; break;
 case 6: $error_img[] =  'Отсутствует временная папка!'; break;
 case 7: $error_img[] =  'Не удалось записать файл на диск!'; break;
 case 8: $error_img[] =  'PHP-расширение остановило загрузку файла!'; break;
 }

}else
{
//��������� ����������
if($_FILES['uimage']['type'] == 'image/jpeg' || $_FILES['uimage']['type'] == 'image/jpg' || $_FILES['uimage']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage']['name']));

    //����� ��� ��������
$uploaddir = '../img/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE kont SET img1='$newfilename'",$link);   

}
else
{
 $error_img[] =  "Ошибка загрузки файла!";    
}
 

    
}else
{
 $error_img[] =  'Допустимые форматы: jpeg, jpg, png';
}
 

}

if($_FILES['uimage2']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage2']['error'])
 {
 case 1: $error_img[] =  'Размер файла превышает допустимое значение!'; break;
 case 2: $error_img[] =  'Размер файла превышает допустимое значение!'; break;
 case 3: $error_img[] =  'Не удалось загрузить часть файла!'; break;
 case 4: $error_img[] =  'Файл не был загружен!'; break;
 case 6: $error_img[] =  'Отсутствует временная папка!'; break;
 case 7: $error_img[] =  'Не удалось записать файл на диск!'; break;
 case 8: $error_img[] =  'PHP-расширение остановило загрузку файла!'; break;
 }

}else
{
//��������� ����������
if($_FILES['uimage2']['type'] == 'image/jpeg' || $_FILES['uimage2']['type'] == 'image/jpg' || $_FILES['uimage2']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage2']['name']));

    //����� ��� ��������
$uploaddir = '../img/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage2']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE kont SET img2='$newfilename'",$link);   

}
else
{
 $error_img[] =  "Ошибка загрузки файла!";    
}
 

    
}else
{
 $error_img[] =  'Допустимые форматы: jpeg, jpg, png';
}
 

}




if($_FILES['uimage3']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage3']['error'])
 {
 case 1: $error_img[] =  'Размер файла превышает допустимое значение!'; break;
 case 2: $error_img[] =  'Размер файла превышает допустимое значение!'; break;
 case 3: $error_img[] =  'Не удалось загрузить часть файла!'; break;
 case 4: $error_img[] =  'Файл не был загружен!'; break;
 case 6: $error_img[] =  'Отсутствует временная папка!'; break;
 case 7: $error_img[] =  'Не удалось записать файл на диск!'; break;
 case 8: $error_img[] =  'PHP-расширение остановило загрузку файла!'; break;
 }

}else
{
//��������� ����������
if($_FILES['uimage3']['type'] == 'image/jpeg' || $_FILES['uimage3']['type'] == 'image/jpg' || $_FILES['uimage3']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage3']['name']));

    //����� ��� ��������
$uploaddir = '../img/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage3']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE kont SET img3='$newfilename'",$link);   

}
else
{
 $error_img[] =  "Ошибка загрузки файла!";    
}
 

    
}else
{
 $error_img[] =  'Допустимые форматы: jpeg, jpg, png';
}
 

}





if($_FILES['uimage4']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage4']['error'])
 {
 case 1: $error_img[] =  'Размер файла превышает допустимое значение!'; break;
 case 2: $error_img[] =  'Размер файла превышает допустимое значение!'; break;
 case 3: $error_img[] =  'Не удалось загрузить часть файла!'; break;
 case 4: $error_img[] =  'Файл не был загружен!'; break;
 case 6: $error_img[] =  'Отсутствует временная папка!'; break;
 case 7: $error_img[] =  'Не удалось записать файл на диск!'; break;
 case 8: $error_img[] =  'PHP-расширение остановило загрузку файла!'; break;
 }

}else
{
//��������� ����������
if($_FILES['uimage4']['type'] == 'image/jpeg' || $_FILES['uimage4']['type'] == 'image/jpg' || $_FILES['uimage4']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage4']['name']));

    //����� ��� ��������
$uploaddir = '../img/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage4']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE kont SET img4='$newfilename'",$link);   

}
else
{
 $error_img[] =  "Ошибка загрузки файла!";    
}
 

    
}else
{
 $error_img[] =  'Допустимые форматы: jpeg, jpg, png';
}
 

}





if($_FILES['uimage5']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage5']['error'])
 {
 case 1: $error_img[] =  'Размер файла превышает допустимое значение!'; break;
 case 2: $error_img[] =  'Размер файла превышает допустимое значение!'; break;
 case 3: $error_img[] =  'Не удалось загрузить часть файла!'; break;
 case 4: $error_img[] =  'Файл не был загружен!'; break;
 case 6: $error_img[] =  'Отсутствует временная папка!'; break;
 case 7: $error_img[] =  'Не удалось записать файл на диск!'; break;
 case 8: $error_img[] =  'PHP-расширение остановило загрузку файла!'; break;
 }

}else
{
//��������� ����������
if($_FILES['uimage5']['type'] == 'image/jpeg' || $_FILES['uimage5']['type'] == 'image/jpg' || $_FILES['uimage5']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage5']['name']));

    //����� ��� ��������
$uploaddir = '../img/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage5']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE kont SET img5='$newfilename'",$link);   

}
else
{
 $error_img[] =  "Ошибка загрузки файла!";    
}
 

    
}else
{
 $error_img[] =  'Допустимые форматы: jpeg, jpg, png';
}
 

}


if($_FILES['uimage6']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage6']['error'])
 {
 case 1: $error_img[] =  'Размер файла превышает допустимое значение!'; break;
 case 2: $error_img[] =  'Размер файла превышает допустимое значение!'; break;
 case 3: $error_img[] =  'Не удалось загрузить часть файла!'; break;
 case 4: $error_img[] =  'Файл не был загружен!'; break;
 case 6: $error_img[] =  'Отсутствует временная папка!'; break;
 case 7: $error_img[] =  'Не удалось записать файл на диск!'; break;
 case 8: $error_img[] =  'PHP-расширение остановило загрузку файла!'; break;
 }

}else
{
//��������� ����������
if($_FILES['uimage6']['type'] == 'image/jpeg' || $_FILES['uimage6']['type'] == 'image/jpg' || $_FILES['uimage6']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage6']['name']));

    //����� ��� ��������
$uploaddir = '../img/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage6']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE kont SET img6='$newfilename'",$link);   

}
else
{
 $error_img[] =  "Ошибка загрузки файла!";    
}
 

    
}else
{
 $error_img[] =  'Допустимые форматы: jpeg, jpg, png';
}
 

}


if($_FILES['uimage7']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage7']['error'])
 {
 case 1: $error_img[] =  'Размер файла превышает допустимое значение!'; break;
 case 2: $error_img[] =  'Размер файла превышает допустимое значение!'; break;
 case 3: $error_img[] =  'Не удалось загрузить часть файла!'; break;
 case 4: $error_img[] =  'Файл не был загружен!'; break;
 case 6: $error_img[] =  'Отсутствует временная папка!'; break;
 case 7: $error_img[] =  'Не удалось записать файл на диск!'; break;
 case 8: $error_img[] =  'PHP-расширение остановило загрузку файла!'; break;
 }

}else
{
//��������� ����������
if($_FILES['uimage7']['type'] == 'image/jpeg' || $_FILES['uimage7']['type'] == 'image/jpg' || $_FILES['uimage7']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage7']['name']));

    //����� ��� ��������
$uploaddir = '../img/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage7']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE kont SET img7='$newfilename'",$link);   

}
else
{
 $error_img[] =  "Ошибка загрузки файла!";    
}
 

    
}else
{
 $error_img[] =  'Допустимые форматы: jpeg, jpg, png';
}
 

}


?>