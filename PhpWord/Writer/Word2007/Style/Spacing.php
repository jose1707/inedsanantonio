<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Style;

/**
 * Spacing between lines and above/below paragraph style writer
 *
 * @since 0.10.0
 */
class Spacing extends AbstractStyle
{
    /**
     * Write style.
     *
     * @return void
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\Spacing) {
            return;
        }
        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->startElement('w:spacing');

        $before = $style->getBefore();
        $xmlWriter->writeAttributeIf(!is_null($before), 'w:before', $this->convertTwip($before));

        $after = $style->getAfter();
        $xmlWriter->writeAttributeIf(!is_null($after), 'w:after', $this->convertTwip($after));

        $line = $style->getLine();
        $xmlWriter->writeAttributeIf(!is_null($line), 'w:line', $line);

        $xmlWriter->writeAttributeIf(!is_null($line), 'w:lineRule', $style->getRule());

        $xmlWriter->endElement();
    }
}
