<?php


namespace PhpOffice\PhpWord\Writer\HTML\Style;

/**
 * Generic style writer
 *
 * @since 0.10.0
 */
class Generic extends AbstractStyle
{
    /**
     * Write style
     *
     * @return string
     */
    public function write()
    {
        $style = $this->getStyle();
        $css = array();

        if (is_array($style) && !empty($style)) {
            $css = $style;
        }

        return $this->assembleCss($css);
    }
}
