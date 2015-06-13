<?php
    require './Template.php';
    require './ResourceManager.php';
    require './Favorite.php';
    require './Make.php';
    require './Contact.php';
    require './Thoughts.php';

    $system_path = 'system';
    define('BASEPATH', str_replace('\\', '/', $system_path));


    $favorite = new Favorite();

    $make = new Make();

    $contact = new Contact();

    $thoughts = new Thoughts();


    $main = new Template(
        'mainView.php',
        array('title'=>"Door's door",
              'message1'=>ResourceManager::$txtMessage1,
              'message2'=>ResourceManager::$txtMessage2,
              'iMadeApp'=>$make->getFullLink(),
              'thoughts' => $thoughts->getFullHtml(),
              'contact' => $contact->getFullLink(),
              'favoriteSite'=>$favorite->getFullLink(),
            ));

    $main->render();
?>
