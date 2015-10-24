<?php
    require './classCore/Template.php';
    require './classRepository/ResourceManager.php';
    require './classThink/Favorite.php';
    require './classThink/Make.php';
    require './classThink/Contact.php';
    require './classThink/Thoughts.php';

    $system_path = 'system';
    define('BASEPATH', str_replace('\\', '/', $system_path));


    $favorite = new Favorite();
    $make = new Make();
    $contact = new Contact();
    $thoughts = new Thoughts();


    $main = new Template(
        './classView/mainView.php',
        array('title'=>"Door's door",
              'Header'=>ResourceManager::$txtHeader,
              'message1'=>ResourceManager::$txtMessage1,
              'message2'=>ResourceManager::$txtMessage2,
              'message3'=>ResourceManager::$txtMessage3,
              'iMadeApp'=>$make->getFullLink(),
              'thoughts' => $thoughts->getFullHtml(),
              'contact' => $contact->getFullLink(),
              'favoriteSite'=>$favorite->getFullLink(),
            ));

    $main->render();
?>
