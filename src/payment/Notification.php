<?php
namespace mirolabs\dotpay\client\payment;

interface Notification
{
    function callNotification(model\Notice $notice);
}