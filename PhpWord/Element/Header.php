<?php

namespace PhpOffice\PhpWord\Element;

/**
 * Header element
 */
class Header extends Footer
{
    /**
     * @var string Container type
     */
    protected $container = 'Header';

    /**
     * Add a Watermark Element
     *
     * @param string $src
     * @param mixed $style
     * @return Image
     */
    public function addWatermark($src, $style = null)
    {
        return $this->addImage($src, $style, true);
    }
}
