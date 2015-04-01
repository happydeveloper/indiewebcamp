<?php
    require 'template.php';
    $system_path = 'system';
    define('BASEPATH', str_replace('\\', '/', $system_path));

    $model_1 = "다양한 곳에 남겨 있는 나의 생각들, 나의 글들, 나의 사진, 나의 콘텐츠를  관리하는 출입문을 만들고 있다. 지금은 고마운 웹 서비스 회사들이 나의 글들을, 나의 생각들, 나의 사진들을 잘 관리해주고 있다. 하지만 언제까지 그 서비스들이 나를 위해서만 있는 것은 아니라는 생각이 들었다. 사용자들은 결국 웹서비스의 통제를 받아야 하고 그들의 만드는 규칙을 지켜야 한다. 그것이 나쁜 것은 아니라고 생각하고 대부분의 상식의 범위에서 일들이 처리된다. 하지만 가끔은 사용자의 이해과 상충될 때가 있다. 그리고 그 때에는 사용자는 작아진다. 다행히 나는 데이타와 정보를 관리하는 기술을 알고 있다. 복잡하지 않고 단순한 내 법칙을 만들어 가고 싶다.";
    $model_2 = "I am making doors that manage proof that my artcles, memo, taught, think, contents.";

    $main = new Template(
        'mainView.php',
        array('title'=>"Door's door",
              'message1'=>$model_1,
              'message2'=>$model_2,));

    $main->render();
?>
