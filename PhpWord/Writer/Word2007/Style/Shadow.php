<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Style;

/**
 * Shadow style writer
 *
 * @since 0.12.0
 */
class Shadow extends AbstractStyle
{
    /**
     * Write style.
     *
     * @return void
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\Shadow) {
            return;
        }
        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->startElement("v:shadow");
        $xmlWriter->writeAttribute('on', 't');
        $xmlWriter->writeAttributeIf($style->getColor() !== null, 'color', $style->getColor());
        $xmlWriter->writeAttributeIf($style->getOffset() !== null, 'offset', $style->getOffset());
        $xmlWriter->endElement();
    }
}
