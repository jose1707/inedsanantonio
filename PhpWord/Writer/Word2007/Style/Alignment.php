<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Style;

/**
 * Alignment style writer
 *
 * @since 0.11.0
 */
class Alignment extends AbstractStyle
{
    /**
     * Write style.
     *
     * @return void
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\Alignment) {
            return;
        }
        $value = $style->getValue();
        if ($value !== null) {
            $xmlWriter = $this->getXmlWriter();
            $xmlWriter->startElement('w:jc');
            $xmlWriter->writeAttribute('w:val', $value);
            $xmlWriter->endElement(); // w:jc
        }
    }
}
