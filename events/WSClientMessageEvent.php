<?php
namespace mrsmamasia\yii2websocket\events;

class WSClientMessageEvent extends WSClientEvent
{
    /**
     * @var string $message
     */
    public $message;
}