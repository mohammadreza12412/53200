<?php
require_once 'vendor/autoload.php'; // این بسته به وسیله composer نصب شده است

$token = '6234467444:AAGB3X9j50oG3skM0O1_8L7WcrE9qzT9hE8'; // توکن ربات شما
$api = new \TelegramBot\Api\BotApi($token);

// دریافت اطلاعات پیام ارسال شده به ربات
$update = $api->getWebhookUpdate();
$message = $update->getMessage();

// ارسال پیام به کاربر با نام طراحی شده
$chatId = $message->getChat()->getId();
$firstName = $message->getChat()->getFirstName();
$response = "سلام، $firstName! نام طراحی شده توسط ربات!";
$api->sendMessage($chatId, $response);
?>