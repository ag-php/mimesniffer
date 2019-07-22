<?php

namespace Intervention\MimeSniffer;

abstract class AbstractType
{
    /**
     * Name of content type (mime type)
     *
     * @var string
     */
    public $name = '';

    /**
     * Signature pattern of type
     *
     * @var string
     */
    protected $pattern = "/^$/";

    /**
     * Determine if the given content matches the signature
     *
     * @param  string $content
     * @return bool
     */
    public function matches($content)
    {
        return preg_match($this->pattern, $content) === 1;
    }

    /**
     * Determine if the detected type is an image
     *
     * @return boolean
     */
    public function isImage()
    {
        return substr($this->name, 0, 5) === 'image';
    }

    /**
     * Cast type to string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}
