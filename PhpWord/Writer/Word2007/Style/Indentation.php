<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Style;

/**
 * Paragraph indentation style writer
 *
 * @since 0.10.0
 */
class Indentation extends AbstractStyle
{
    /**
     * Write style.
     *
     * @return void
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\Indentation) {
            return;
        }
        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->startElement('w:ind');

        $xmlWriter->writeAttribute('w:left', $this->convertTwip($style->getLeft()));
        $xmlWriter->writeAttribute('w:right', $this->convertTwip($style->getRight()));

        $firstLine = $style->getFirstLine();
        $xmlWriter->writeAttributeIf(!is_null($firstLine), 'w:firstLine', $this->convertTwip($firstLine));

        $hanging = $style->getHanging();
        $xmlWriter->writeAttributeIf(!is_null($hanging), 'w:hanging', $this->convertTwip($hanging));

        $xmlWriter->endElement();
    }
}
