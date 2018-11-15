<?php
$db_host = 'www.biblioteca-web.com';
$db_name = 'bibliot1_biblioteca';
$db_user = 'bibliot1';
$db_pass = 'ar3)KAW198Y!dl';

$fecha = date("Ymd-His");  /*fecha y hora en la que se hara el respaldo*/

$salida_sql = $db_name.'_'.$fecha.'.sql';

$dump = "C:/wamp/bin/mysql/mysql5.6.17/bin/mysqldump --user=" .$db_user." --password=".$db_pass." --host=".$db_host." ".$db_name."> $salida_sql";

system($dump, $output);
$zip = new ZipArchive();
$salida_zip = $db_name.'_'.$fecha.'.zip';
if($zip->open($salida_zip, ZIPARCHIVE::CREATE) === true)
{
    $zip->addfile($salida_sql);
    $zip->close();
    unlink($salida_sql);

    header("location: $salida_zip");
} else{
    echo "error";
}

?>

