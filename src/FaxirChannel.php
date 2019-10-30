<?php

namespace GrsChannel\LaravelNotificationFaxir;

use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Mail\Mailer;
use App\Channels\Messages\FaxMessage;

class FaxirChannel
{
    /**
     * @var Illuminate\Contracts\Mail\Mailer
     */
    private $mailer;
    
    /**
     * WebSmsChannel constructor.
     * @param $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        $faxMessage = $notification->toFax($notifiable);

        // Send notification to the $notifiable instance...
        return $this->mailer->raw('', function($emailMessage) use ($faxMessage) {
            $emailMessage
                ->to($faxMessage->getTo())
                ->from($faxMessage->getFrom())
                ->subject($faxMessage->getSubject());
            foreach($faxMessage->getAttachments() as $file) {
                $emailMessage->attachData($file, 'Reservation.pdf', ['mime' => 'application/pdf']);
            }
        });
    }
}
