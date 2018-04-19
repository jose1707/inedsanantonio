<?php


namespace PhpOffice\PhpWord\Writer\ODText\Style;

/**
 * Image style writer
 *
 * @since 0.11.0
 */
class Image extends AbstractStyle
{
    /**
     * Write style.
     *
     * @return void
     */
    public function write()
    {
        /** @var \PhpOffice\PhpWord\Style\Image $style Type hint */
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\Image) {
            return;
        }
        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->startElement('style:style');
        $xmlWriter->writeAttribute('style:name', $style->getStyleName());
        $xmlWriter->writeAttribute('style:family', 'graphic');
        $xmlWriter->writeAttribute('style:parent-style-name', 'Graphics');
        $xmlWriter->startElement('style:graphic-properties');
        $xmlWriter->writeAttribute('style:vertical-pos', 'top');
        $xmlWriter->writeAttribute('style:vertical-rel', 'baseline');
        $xmlWriter->endElement(); // style:graphic-properties
        $xmlWriter->endElement(); // style:style
    }
}
