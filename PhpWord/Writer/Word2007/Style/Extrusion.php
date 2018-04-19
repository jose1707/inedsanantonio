<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Style;

/**
 * 3D extrusion style writer
 *
 * @since 0.12.0
 */
class Extrusion extends AbstractStyle
{
    /**
     * Write style.
     *
     * @return void
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\Extrusion) {
            return;
        }
        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->startElement("o:extrusion");
        $xmlWriter->writeAttribute('on', 't');
        $xmlWriter->writeAttributeIf($style->getType() !== null, 'type', $style->getType());
        $xmlWriter->writeAttributeIf($style->getColor() !== null, 'color', $style->getColor());
        $xmlWriter->endElement();
    }
}
