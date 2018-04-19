<?php


namespace PhpOffice\PhpWord\Writer\ODText\Style;

/**
 * Section style writer
 *
 * @since 0.11.0
 */
class Section extends AbstractStyle
{
    /**
     * Write style.
     *
     * @return void
     */
    public function write()
    {
        /** @var \PhpOffice\PhpWord\Style\Section $style Type hint */
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\Section) {
            return;
        }
        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->startElement('style:style');
        $xmlWriter->writeAttribute('style:name', $style->getStyleName());
        $xmlWriter->writeAttribute('style:family', "section");
        $xmlWriter->startElement('style:section-properties');

        $xmlWriter->startElement('style:columns');
        $xmlWriter->writeAttribute('fo:column-count', $style->getColsNum());
        $xmlWriter->endElement(); // style:columns

        $xmlWriter->endElement(); // style:section-properties
        $xmlWriter->endElement(); // style:style
    }
}
