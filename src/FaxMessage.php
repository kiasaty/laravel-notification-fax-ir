<?php

namespace NotificationChannels\Faxir;

class FaxMessage
{

    /** @var string */
    private $from;

    /** @var string */
    private $to;

    /** @var string */
    private $text;

    /** @var string */
    private $file;

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param string $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param string $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->files;
    }

    /**
     * @param string $files
     */
    public function setFile($files)
    {
        $this->files = $files;
    }
}