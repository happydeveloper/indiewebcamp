<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 15. 6. 13.
 * Time: 오후 9:03
 */
echo $_GET['desc'];

$sql = "INSERT INTO topic('title') VALUES('".$_GET['title']."')";

echo $sql;