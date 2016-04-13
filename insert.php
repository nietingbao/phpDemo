<?php
/**
 * Created by PhpStorm.
 * User: ÄôÍ¢±¦
 * Date: 2016/4/13
 * Time: 14:19
 */
$con = mysql_connect("localhost","root","");
if(!$con){
    die('Could not connect:'.mysql_error());
}
$select = mysql_select_db("my_db",$con);
if(!$select)
{
    echo 'Error '.mysql_error();
}
$sql = "insert into Persons(Firstname,Lastname,Age) values(
'_POST[Firstname]','$_POST[Lastname]','_POST[Age]'
)";
if(!mysql_query($sql,$con))
{
    die('Error: '.mysql_error());
}
echo '1  record added';
mysql_close($con);
