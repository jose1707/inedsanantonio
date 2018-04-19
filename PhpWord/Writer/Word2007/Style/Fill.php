<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Style;

/**
 * Fill style writer
 *
 * @since 0.12.0
 */
class Fill extends AbstractStyle
{
    /**
     * Write style.
     *
     * @return void
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\Fill) {
            return;
        }
        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->writeAttribute('on', 't');
        $xmlWriter->writeAttributeIf($style->getColor() !== null, 'fillcolor', $style->getColor());
    }
}
