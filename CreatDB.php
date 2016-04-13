<?php
/**
 * Created by PhpStorm.
 * User: ÄôÍ¢±¦
 * Date: 2016/4/13
 * Time: 14:31
 */
$con = mysql_connect("localhost","root","");
if(!$con)
{
    die('Could not connect:'.mysql_error());
}
if(mysql_query("CREATE DATABASE my_db",$con))
{
    echo 'databse created';
}
else
{
    echo "Error creating database:".mysql_error();
}
mysql_close();