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
            "http://boooki.com/ko/",
            "http://www.opentutorials.org",
            "https://duruduru.atlassian.net",
            "https://github.com/happydeveloper"

        );

        $site_title = array(
            "날쩍이",
            "책을 읽는 습관",
            "자유롭고 개방된 컨텐츠",
            "공부하고 경험한 것들에 대한 단서",
            "일일 전념"
        );

        $htmlStr = "<h2> ". $title ." </h2><ul>";

        for($i = 0 ; $i < count($site_url); $i++)
            $htmlStr = $htmlStr . "<li><a href='".$site_url[$i]."' target='_blank'>".$site_title[$i]."</a></li>";

        $htmlStr = $htmlStr ."</ul>";

        return $htmlStr;
    }
}