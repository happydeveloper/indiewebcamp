<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 15. 10. 24.
 * Time: 오후 5:06
 */


require './classCore/Template.php';
require './classRepository/ResourceManager.php';
require './classThink/Favorite.php';
require './classThink/Make.php';
require './classThink/Contact.php';
require './classThink/Thoughts.php';




$favorite = new Favorite();
$make = new Make();
$contact = new Contact();
$thoughts = new Thoughts();

