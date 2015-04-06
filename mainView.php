<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 15. 4. 1.
 * Time: 오전 9:27
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" Content="text/html; charset=utf-8" />
        <script type="text/javascript" src="./google-analytics.js"></script>
        <title><?php echo $this->title; ?></title>
    </head>
    <body>
        <a href="/"><img src="https://indiewebcamp.com/wiki/skins/indieweb/indiewebcamp-logo-500px.png" width="155" alt="IndieWebCamp" class="u-logo"></a>

        <h2> Indy Web - Getting Started </h2>

        <div id='left'></div>

        <article class="ko">
            <?php echo $this->message1; ?>
        </article>

        <article class="en">
            <?php echo $this->message2; ?>
        </article>

        <h2> I made app</h2>
        <ul>
            <li><a href="http://ucloud.duru.pe.kr/fcmd/" target="_blank">facebook app - Searchable, quickFacebook </a></li>

            <li><a href="http://codingeverybody.com/" target="_blank">facebook app - opentutorials facebook community</a></li>
        </ul>

        <h2> thoughts </h2>
        <ul>
            <li><a href="http://www.duru.pe.kr/get.thinks/"> get thinks </a></li>
        </ul>

        <h2> Contact </h2>

        <ul>
            <li><a href="mailto:enfn2001@gmail.com">Email</a></li>
            <li><a href="http://www.facebook.com/enfn2001">Facebook</a></li>
            <li><a href="https://www.twitter.com/enfn2001"> Twitter</a></li>
            <li><a href="http://enfn2001.tumblr.com/">tumblr</a></li>
        </ul>

        <div id="disqus_thread"></div>
        <script type="text/javascript" src="./disqus.js"></script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

    </body>
</html>
