<?php


namespace PhpOffice\PhpWord\Writer\HTML\Style;

/**
 * Paragraph style HTML writer
 *
 * @since 0.10.0
 */
class Image extends AbstractStyle
{
    /**
     * Write style
     *
     * @return string
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\Image) {
            return '';
        }
        $css = array();

        $width = $style->getWidth();
        $height = $style->getHeight();
        $css['width'] = $this->getValueIf(is_numeric($width), $width . 'px');
        $css['height'] = $this->getValueIf(is_numeric($height), $height . 'px');

        return $this->assembleCss($css);
    }
}
