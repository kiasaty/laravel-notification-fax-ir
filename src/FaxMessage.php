<?php

namespace GrsChannel\LaravelNotificationFaxir;

class FaxMessage
{
    private $from;
    private $to;
    private $subject;
    private $attachments = [];

    /**
     * returns the Sender's email address
     * 
     * @todo it should return the server email address as default
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param string $from
     * @return $this
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * returns the Receiver's email address
     * 
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * 
     * 
     * @todo it actually should set the Receiver's phone number, not email address
     * 
     * @param mixed $to
     * @return $this
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * returns the subject of the faxMessage
     * 
     * @return string $subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return array $attachments
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * 
     * @todo it should accept file addresses not string content of the file
     * 
     * @param file $file
     * @return FaxMessage $this
     */
    public function attach($file)
    {
        if (is_array($file)) {
            array_push($this->attachments, ...$file);
        } else {
            $this->attachments[] = $file;
        }

        return $this;
    }

}
