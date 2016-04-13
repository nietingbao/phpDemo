<?php
/**
 * Created by PhpStorm.
 * User: ÄôÍ¢±¦
 * Date: 2016/4/13
 * Time: 16:37
 */
$con = mysql_connect("localhost","root","");
if(!$con)
{
    die('Could not connect:'.mysql_error());
}
//Creat table in my_db database
mysql_select_db("my_db",$con);
$sql="create table Persons
(
personID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(personID),
Firstname varchar(15),
Lastname varchar(15),
Age int
)";
$c=mysql_query($sql,$con);
if(!$c)
{
    echo 'Could not create table'.mysql_error();
}
else{
    echo 'table created';
}
mysql_close($con);