<?php

namespace Intervention\MimeSniffer\Types;

use Intervention\MimeSniffer\AbstractType;

class ImagePng extends AbstractType
{
    /**
     * Name of content type
     *
     * @var string
     */
    public $name = "image/png";

    /**
     * Signature pattern
     * 
     * @var string
     */
    protected $pattern = "/^89504E470D0A1A0A/";
}