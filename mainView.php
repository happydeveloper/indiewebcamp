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

        <?php echo $this->iMadeApp; ?>

        <?php echo $this->favoriteSite; ?>

        <?php echo $this->thoughts; ?>

        <?php echo $this->contact; ?>

        <div id="disqus_thread"></div>
        <script type="text/javascript" src="./disqus.js"></script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

    </body>
</html>