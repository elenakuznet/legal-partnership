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
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img1='$newfilename'",$link);   

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
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage2']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img2='$newfilename'",$link);   

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
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage3']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img3='$newfilename'",$link);   

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
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage4']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img4='$newfilename'",$link);   

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
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage5']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img5='$newfilename'",$link);   

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
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage6']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img6='$newfilename'",$link);   

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
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage7']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img7='$newfilename'",$link);   

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
if($_FILES['uimage8']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage8']['error'])
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
if($_FILES['uimage8']['type'] == 'image/jpeg' || $_FILES['uimage8']['type'] == 'image/jpg' || $_FILES['uimage8']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage8']['name']));

    //����� ��� ��������
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage8']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img8='$newfilename'",$link);   

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
if($_FILES['uimage9']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage9']['error'])
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
if($_FILES['uimage9']['type'] == 'image/jpeg' || $_FILES['uimage9']['type'] == 'image/jpg' || $_FILES['uimage9']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage9']['name']));

    //����� ��� ��������
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage9']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img9='$newfilename'",$link);   

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
if($_FILES['uimage10']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage10']['error'])
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
if($_FILES['uimage10']['type'] == 'image/jpeg' || $_FILES['uimage10']['type'] == 'image/jpg' || $_FILES['uimage10']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage10']['name']));

    //����� ��� ��������
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage10']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img10='$newfilename'",$link);   

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
if($_FILES['uimage11']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage11']['error'])
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
if($_FILES['uimage11']['type'] == 'image/jpeg' || $_FILES['uimage11']['type'] == 'image/jpg' || $_FILES['uimage11']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage11']['name']));

    //����� ��� ��������
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage11']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img11='$newfilename'",$link);   

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

if($_FILES['uimage12']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage12']['error'])
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
if($_FILES['uimage12']['type'] == 'image/jpeg' || $_FILES['uimage12']['type'] == 'image/jpg' || $_FILES['uimage12']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage12']['name']));

    //����� ��� ��������
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage12']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img12='$newfilename'",$link);   

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




if($_FILES['uimage13']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage13']['error'])
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
if($_FILES['uimage13']['type'] == 'image/jpeg' || $_FILES['uimage13']['type'] == 'image/jpg' || $_FILES['uimage13']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage13']['name']));

    //����� ��� ��������
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage13']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img13='$newfilename'",$link);   

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





if($_FILES['uimage14']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage14']['error'])
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
if($_FILES['uimage14']['type'] == 'image/jpeg' || $_FILES['uimage14']['type'] == 'image/jpg' || $_FILES['uimage14']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage14']['name']));

    //����� ��� ��������
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage14']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img14='$newfilename'",$link);   

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
if($_FILES['uimage15']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage15']['error'])
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
if($_FILES['uimage15']['type'] == 'image/jpeg' || $_FILES['uimage15']['type'] == 'image/jpg' || $_FILES['uimage15']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage15']['name']));

    //����� ��� ��������
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage15']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img15='$newfilename'",$link);   

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
if($_FILES['uimage16']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage16']['error'])
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
if($_FILES['uimage16']['type'] == 'image/jpeg' || $_FILES['uimage16']['type'] == 'image/jpg' || $_FILES['uimage16']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage16']['name']));

    //����� ��� ��������
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage16']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img16='$newfilename'",$link);   

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
if($_FILES['uimage17']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage17']['error'])
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
if($_FILES['uimage17']['type'] == 'image/jpeg' || $_FILES['uimage17']['type'] == 'image/jpg' || $_FILES['uimage17']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage17']['name']));

    //����� ��� ��������
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage17']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img17='$newfilename'",$link);   

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
if($_FILES['uimage18']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage18']['error'])
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
if($_FILES['uimage18']['type'] == 'image/jpeg' || $_FILES['uimage18']['type'] == 'image/jpg' || $_FILES['uimage18']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage18']['name']));

    //����� ��� ��������
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage18']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img18='$newfilename'",$link);   

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
if($_FILES['uimage19']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage19']['error'])
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
if($_FILES['uimage19']['type'] == 'image/jpeg' || $_FILES['uimage19']['type'] == 'image/jpg' || $_FILES['uimage19']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage19']['name']));

    //����� ��� ��������
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage19']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img19='$newfilename'",$link);   

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
if($_FILES['uimage20']['error'] > 0)
{
 //� ����������� �� ������ ������ ������� ��������������� ���������
 switch ($_FILES['uimage20']['error'])
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
if($_FILES['uimage20']['type'] == 'image/jpeg' || $_FILES['uimage20']['type'] == 'image/jpg' || $_FILES['uimage20']['type'] == 'image/png')
{ 

$imgext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['uimage20']['name']));

    //����� ��� ��������
$uploaddir = '../img/ind/';
//����� ��������������� ��� �����
$newfilename = $id.rand(10,10000).'.'.$imgext;
//���� � ����� (�����.����)
$uploadfile = $uploaddir.$newfilename;
 
//��������� ���� move_uploaded_file
if (move_uploaded_file($_FILES['uimage20']['tmp_name'], $uploadfile))
{

  $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET img20='$newfilename'",$link);   

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