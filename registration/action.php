<?php
header('Content-Type: text/html; charset=utf-8');
//header('Content-Type: application/json');
$input=array();

foreach($_POST as $key => $value)
    $input[$key] = htmlspecialchars(strip_tags($value));

if($input['topic']!="Записаться on-line")
    $input['topic']='';
if(empty($_POST['submittedfio']))
    $input['submittedfio']='';
if(empty($_POST['submittedstudwork']))
    $input['submittedstudwork']='';
if(empty($_POST['submittedvash_email']))
    $input['submittedvash_email']='';
if(empty($_POST['submittedpn']))
    $input['submittedpn']='';
if(empty($_POST['submittedbirthdate']))
    $input['submittedbirthdate']='';

$message='ФИО: '.$input['submittedfio']."\r\n".
    'Должность/Студент: '.$input['submittedstudwork']."\r\n".
    'email: '.$input['submittedvash_email']."\r\n".
    'Номер телефона: '.$input['submittedpn']."\r\n".
    'Дата рождения: '.$input['submittedbirthdate'];
$message=wordwrap($message, 70, "\r\n");
$message = str_replace("\n.", "\n..", $message);

$config = require_once('../config.php');

$from = 'From: ' . $config['mailFrom'];
$mailTo = $config['mailTo'];

if (mail($mailTo, $input['topic'], $message, $from))
    echo "mail sent";
else
    echo "mail wasn't sent";
?>