<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Style;

/**
 * Shading style writer
 *
 * @since 0.10.0
 */
class Shading extends AbstractStyle
{
    /**
     * Write style.
     *
     * @return void
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\Shading) {
            return;
        }
        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->startElement('w:shd');
        $xmlWriter->writeAttribute('w:val', $style->getPattern());
        $xmlWriter->writeAttribute('w:color', $style->getColor());
        $xmlWriter->writeAttribute('w:fill', $style->getFill());
        $xmlWriter->endElement();
    }
}
