<?
function clear_string($cl_str)
{
$cl_str = strip_tags($cl_str);
$cl_str =  /* fixed MMiC */ DB::escape($cl_str);
$cl_str = trim($cl_str);
return $cl_str;
}





?>