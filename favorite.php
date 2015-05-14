<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 15. 5. 10.
 * Time: 오후 4:01
 */

class Favorite
{
    public function getFullLink(){
        $title = "Favorite Site";

        $site_url = array(
            "http://ropipi.com",
            "http://boooki.com/ko/"
        );

        $site_title = array(
            "비밀 일기장",
            "독후감"
        );

        $htmlStr = "<h2> ". $title ." </h2><ul>";

        for($i = 0 ; $i < count($site_url); $i++)
            $htmlStr = $htmlStr . "<li><a href='".$site_url[$i]."' target='_blank'>".$site_title[$i]."</a></li>";

        $htmlStr = $htmlStr ."</ul>";

        return $htmlStr;
    }
}