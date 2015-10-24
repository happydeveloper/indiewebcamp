<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 15. 5. 14.
 * Time: 오전 2:44
 */

class Make {
    public function getFullLink(){

        $title = "내손으로 키보드를 두들기며 만들고 있는 무형의 것들";

        $site_title = array(
            "facebook app - opentutorials facebook community"
        );

        $site_url = array(
            "http://ucloud.duru.pe.kr/fcmd"
        );


        $htmlStr = "<h2>". $title ."</h2><ul>";

        for($i = 0 ; $i < count($site_url); $i++)
            $htmlStr = $htmlStr . "<li><a href='".$site_url[$i]."' target='_blank'>".$site_title[$i]."</a></li>";

        $htmlStr = $htmlStr ."</ul>";

        return $htmlStr;
    }
}