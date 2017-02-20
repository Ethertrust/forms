<?php

header('Content-Type: text/html; charset=utf-8');

$input=array();

foreach($_POST as $key => $value)
    $input[$key] = htmlspecialchars(strip_tags($value));

if (empty($_POST['topic']))
    $input['topic'] = '';
if (empty($_POST['submittedfio']))
    $input['submittedfio'] = '';
if (empty($_POST['submittedvash_email']))
    $input['submittedvash_email'] = '';
if (empty($_POST['submittedvopros']))
    $input['submittedvopros'] = '';

$message = 'ФИО: ' . $input['submittedfio'] . "\r\n" .
    'email: ' . $input['submittedvash_email'] . "\r\n" .
    'Вопрос: ' . wordwrap($input['submittedvopros'], 70, "\r\n") .
    "\r\n";

$message = wordwrap($message, 70, "\r\n");
$message = str_replace("\n.", "\n..", $message);

$config = require_once('../config.php');

$from = 'From: ' . $config['mailFrom'];
$mailTo = $config['mailTo'];

if (mail($mailTo, $input['topic'], $message, $from))
    echo "mail sent";
else
    echo "mail wasn't sent";
?>