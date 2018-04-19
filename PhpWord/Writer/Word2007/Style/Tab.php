<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Style;

/**
 * Line numbering style writer
 *
 * @since 0.10.0
 */
class Tab extends AbstractStyle
{
    /**
     * Write style.
     *
     * @return void
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\Tab) {
            return;
        }
        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->startElement("w:tab");
        $xmlWriter->writeAttribute("w:val", $style->getType());
        $xmlWriter->writeAttribute("w:leader", $style->getLeader());
        $xmlWriter->writeAttribute('w:pos', $this->convertTwip($style->getPosition()));
        $xmlWriter->endElement();
    }
}
