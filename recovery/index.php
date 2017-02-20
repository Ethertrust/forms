<?php
header('Content-Type: text/html; charset=utf-8');
$config = require_once('../config.php');
$back = $config['back_url'];
?>
<html>
<head>
    <script src="https://code.jqueRy.com/jquery-1.10.2.js"></script>
    <script src='../jquery.modify.js'></script>
    <script src='script.js'></script>
    <link type="text/css" rel="stylesheet" href="../css.css" media="all">
    <link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic&amp;subset=latin,cyrillic"
          rel="stylesheet" type="text/css">
</head>
<body>
<div id="cboxOverlay" style="opacity: 0.85; cursor: pointer; visibility: visible; display: block;"></div>
<div id="colorbox" class="" role="dialog" tabindex="-1" style="display: block; visibility: visible; position: absolute; width: 666px; height: 395px; top: 50%; left: 50%; margin: -197px 0 0 -333px;  opacity: 1; cursor: auto;"><div id="cboxWrapper" style="text-align: left; height: 564px; width: 740px;"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left; width: 710px;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left; height: 539px;"></div><div id="cboxContent" style="float: left; width: 710px; height: 539px;"><div id="cboxLoadedContent" style="width: 710px; overflow: auto; height: 511px;"><div id="webform" class="popup_form">
    <form class="webform-client-form" enctype="multipart/form-data" action="action3.php;inline=true" method="post" id="webform-client-form-56" accept-charset="UTF-8" novalidate="novalidate"><div>
        <div class="form-item webform-component webform-component-textfield" id="webform-component-fio">
            <label for="edit-submitted-fio">ФИО <span class="form-required" title="Это поле обязательно для заполнения.">*</span></label>
            <input type="text" id="edit-submitted-fio" name="submittedfio" value="" size="60" maxlength="128" class="form-text required" style="width:213px;">
            <label for="edit-submitted-fio" id="error1" class="error" style="display: none;">заполните, пожалуйста</label>
        </div>
        <div class="form-item webform-component webform-component-textfield" id="webform-component-pn">
            <label for="edit-submitted-pn">Номер телефона <span class="form-required" title="Это поле обязательно для заполнения.">*</span></label>
            <input type="tel" id="edit-submitted-pn" name="submittedpn" value="" size="60" maxlength="128" class="form-text required" style="width:213px;">
            <label for="edit-submitted-pn" id="error2" class="error" style="display: none;">заполните, пожалуйста</label>
        </div>
        <div class="form-item webform-component webform-component-email" id="webform-component-vash-email">
            <label for="edit-submitted-vash-email">Ваш email <span class="form-required" title="Это поле обязательно для заполнения.">*</span></label>
            <input class="email form-text form-email required" type="email" id="edit-submitted-vash-email" name="submittedvash_email" size="60" style="width:213px; float:left;">
            <img id="ok1" src="../images/ok.jpg" alt="ok" style="display:none;">
            <img id="notok1" src="../images/notok.jpg" alt="error" style="display:none;">
        </div>
        <div class="form-item webform-component webform-component-textfield" id="webform-component-ldn">
            <label for="edit-submitted-ldn">Номер читательского билета <span class="form-required" title="Это поле обязательно для заполнения.">*</span></label>
            <input type="text" id="edit-submitted-ldn" name="submittedldn" value="" size="60" maxlength="128" class="form-text required" style="margin-top:4%; width:213px;">
            <label for="edit-submitted-ldn" id="error3" class="error" style="display: none;">заполните, пожалуйста</label>
        </div>
        <div class="form-item webform-component webform-component-textfield" id="webform-component-topic">
            <input type="hidden" id="edit-submitted-topic" name="topic" value="Восстановление пароля" size="60" maxlength="128">
        </div>
        <div class="form-actions form-wrapper" id="edit-actions"><input type="submit" id="edit-submit" name="op" value="Запросить восстановление пароля" class="form-submit"></div></div></form>			<a href="<?php echo $back; ?>" class="close_popup">Я передумал</a>
</div></div><div id="cboxTitle" style="float: left; display: none;"></div><div id="cboxCurrent" style="float: left; display: none;"></div><button type="button" id="cboxPrevious" style="display: none;"></button><button type="button" id="cboxNext" style="display: none;"></button><button id="cboxSlideshow" style="display: none;"></button><div id="cboxLoadingOverlay" style="float: left; display: none;"></div><div id="cboxLoadingGraphic" style="float: left; display: none;"></div><button type="button" id="cboxClose">Close</button></div><div id="cboxMiddleRight" style="float: left; height: 539px;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left; width: 710px;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div>
</body>
