<?php

namespace NotificationChannels\Faxir;

use Illuminate\Notifications\Notification;

class FaxChannel
{

    /** @var Fax */
    protected $fax;

    /**
     * FaxChannel constructor.
     * @param Fax $fax
     */
    public function __construct(Fax $fax)
    {
        $this->fax = $fax;
    }

    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     * @param Notification $notification
     */
    public function send($notifiable, Notification $notification)
    {
        /** @var FaxMessage $message */
        $message = $notification->toFax($notifiable);
        
        $message->setTo($notifiable->routeNotificationFor('fax').'@fax.ir');

        return $this->fax->sendFax($message);
    }
}