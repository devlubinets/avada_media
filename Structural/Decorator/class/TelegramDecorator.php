<?php

class TelegramDecorator extends Decorator
{
        public function sendNotify(string $message): string
    {
        $message =  parent::sendNotify($message); // TODO: Change the autogenerated stub

        return "Telegram Notify{$message}";
    }
}