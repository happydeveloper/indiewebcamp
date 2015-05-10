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
        $htmlStr = "
            <h2> Favorite Site </h2>
            <ul>
                <li><a href='http://ropipi.com/' target='_blank'>비밀 일기장</a></li>
                <li><a href='http://ropipi.com/' target='_blank'>책독서 후기</a></li>
            </ul>";

        return $htmlStr;
    }
}