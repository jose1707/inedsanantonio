<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Style;

/**
 * Outline style writer
 *
 * @since 0.12.0
 */
class Outline extends AbstractStyle
{
    /**
     * Write style.
     *
     * @return void
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\Outline) {
            return;
        }
        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->startElement("v:stroke");
        $xmlWriter->writeAttribute('on', 't');
        $xmlWriter->writeAttributeIf($style->getColor() !== null, 'color', $style->getColor());
        $xmlWriter->writeAttributeIf($style->getWeight() !== null, 'weight', $style->getWeight() . $style->getUnit());
        $xmlWriter->writeAttributeIf($style->getDash() !== null, 'dashstyle', $style->getDash());
        $xmlWriter->writeAttributeIf($style->getLine() !== null, 'linestyle', $style->getLine());
        $xmlWriter->writeAttributeIf($style->getEndCap() !== null, 'endcap', $style->getEndCap());
        $xmlWriter->writeAttributeIf($style->getStartArrow() !== null, 'startarrow', $style->getStartArrow());
        $xmlWriter->writeAttributeIf($style->getEndArrow() !== null, 'endarrow', $style->getEndArrow());
        $xmlWriter->endElement();
    }
}