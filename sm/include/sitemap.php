
<?php
include("connect.php");



$sitemap="<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
$sitemap.="<urlset\n
	xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"\n
        xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"\n
        xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">\n"; 
        $sitemap.="<url>\n";
        $sitemap.="<loc>https://xn--45-vlc5agg4f.xn--p1ai/</loc>\n";
        $sitemap.="</url>\n";
        $sitemap.="<url>\n";
        $sitemap.="<loc>https://xn--45-vlc5agg4f.xn--p1ai/klienty</loc>\n";
        $sitemap.="</url>\n";
        $sitemap.="<url>\n";
        $sitemap.="<loc>https://xn--45-vlc5agg4f.xn--p1ai/komanda</loc>\n";
        $sitemap.="</url>\n";
        $sitemap.="<url>\n";
        $sitemap.="<loc>https://xn--45-vlc5agg4f.xn--p1ai/kontakty</loc>\n";
        $sitemap.="</url>\n";
        $sitemap.="<url>\n";
        $sitemap.="<loc>https://xn--45-vlc5agg4f.xn--p1ai/novosti</loc>\n";
        $sitemap.="</url>\n";
        $sitemap.="<url>\n";
        $sitemap.="<loc>https://xn--45-vlc5agg4f.xn--p1ai/spory</loc>\n";
        $sitemap.="</url>\n";
        $sitemap.="<url>\n";
        $sitemap.="<loc>https://xn--45-vlc5agg4f.xn--p1ai/yuridicheskie-uslugi</loc>\n";
        $sitemap.="</url>\n";
      

       
        $result =  /* fixed MMiC */ DB::Query("SELECT id FROM uslugi",$link);
        
        If ( /* fixed MMiC */ mysqli_num_rows($result) > 0){
while($row= /* fixed MMiC */ mysqli_fetch_array($result))
{
    $sitemap.="<url>\n";
    $sitemap.="<loc>https://xn--45-vlc5agg4f.xn--p1ai/uslugi?id=".$row['id']."</loc>\n";
	$sitemap.="</url>\n";
}
        }
        $result =  /* fixed MMiC */ DB::Query("SELECT id FROM novosti",$link);
        
        If ( /* fixed MMiC */ mysqli_num_rows($result) > 0){
            while($row= /* fixed MMiC */ mysqli_fetch_array($result))
            {
                $sitemap.="<url>\n";
                $sitemap.="<loc>https://xn--45-vlc5agg4f.xn--p1ai/statya?id=".$row['id']."</loc>\n";
                $sitemap.="</url>\n";
            }
        }
        $result =  /* fixed MMiC */ DB::Query("SELECT id FROM spory",$link);
        
        If ( /* fixed MMiC */ mysqli_num_rows($result) > 0){
            while($row= /* fixed MMiC */ mysqli_fetch_array($result))
            {
                $sitemap.="<url>\n";
                $sitemap.="<loc>https://xn--45-vlc5agg4f.xn--p1ai/rezultat-spora?id=".$row['id']."</loc>\n";
                $sitemap.="</url>\n";
            }
        }
        $result =  /* fixed MMiC */ DB::Query("SELECT id FROM komanda",$link);
        
        If ( /* fixed MMiC */ mysqli_num_rows($result) > 0){
            while($row= /* fixed MMiC */ mysqli_fetch_array($result))
            {
                $sitemap.="<url>\n";
                $sitemap.="<loc>https://xn--45-vlc5agg4f.xn--p1ai/specialist?id=".$row['id']."</loc>\n";
                $sitemap.="</url>\n";
            }
        }
       

    
       

$sitemap.="</urlset>";

//Сохраним карту сайта в файл sitemap.xml
$sm="../../sitemap.xml";
$file=fopen($sm,"w");
fwrite($file,$sitemap);
fclose($file);

?>