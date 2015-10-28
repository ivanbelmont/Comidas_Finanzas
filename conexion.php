<?php
function conectar($conectar)
{
    $link='';
    if($conectar==1)
        {
        $link=  mysql_connect('localhost','root','') or die ('Error al conectar a la base de datos');
        mysql_select_db('reciclaje') or die ('No existe la base de datos');
        if($link){}
        }
    if($conectar==0)
        {
        
        $link= mysql_connect('localhost','root','') or die ('Error al conectar a la base de datos');
        mysql_close($link);
        }
}

?>
