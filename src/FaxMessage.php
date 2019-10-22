<?php

namespace NotificationChannels\Faxir;

class FaxMessage
{
    private $from;
    private $to;
    private $subject;
    private $attachments = [];

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @return array $attachments
     */
    public function getAttachments()
    {
        return $this->attachments;
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
     * @param mixed $to
     * @return $this
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
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
