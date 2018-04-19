<?php


namespace PhpOffice\PhpWord\Writer\RTF\Element;

/**
 * PageBreak element RTF writer
 *
 * @since 0.11.0
 */
class PageBreak extends AbstractElement
{
    /**
     * Write element
     *
     * @return string
     */
    public function write()
    {
        return '\page' . PHP_EOL;
    }
}
