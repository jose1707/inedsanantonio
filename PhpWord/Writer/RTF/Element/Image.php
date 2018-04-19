<?php

namespace PhpOffice\PhpWord\Writer\RTF\Element;

use PhpOffice\PhpWord\Element\Image as ImageElement;
use PhpOffice\PhpWord\Shared\Converter;

/**
 * Image element RTF writer
 *
 * @since 0.11.0
 */
class Image extends AbstractElement
{
    /**
     * Write element
     *
     * @return string
     */
    public function write()
    {
        if (!$this->element instanceof ImageElement) {
            return '';
        }

        $this->getStyles();
        $style = $this->element->getStyle();

        $content = '';
        $content .= $this->writeOpening();
        $content .= '{\*\shppict {\pict';
        $content .= '\pngblip\picscalex100\picscaley100';
        $content .= '\picwgoal' . round(Converter::pixelToTwip($style->getWidth()));
        $content .= '\pichgoal' . round(Converter::pixelToTwip($style->getHeight()));
        $content .= PHP_EOL;
        $content .= $this->element->getImageStringData();
        $content .= '}}';
        $content .= $this->writeClosing();

        return $content;
    }
}
