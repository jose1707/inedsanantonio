<?php


namespace PhpOffice\PhpWord\Writer\ODText\Style;

/**
 * Table style writer
 *
 * @since 0.11.0
 */
class Table extends AbstractStyle
{
    /**
     * Write style.
     *
     * @return void
     */
    public function write()
    {
        /** @var \PhpOffice\PhpWord\Style\Table $style Type hint */
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\Table) {
            return;
        }
        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->startElement('style:style');
        $xmlWriter->writeAttribute('style:name', $style->getStyleName());
        $xmlWriter->writeAttribute('style:family', 'table');
        $xmlWriter->startElement('style:table-properties');
        //$xmlWriter->writeAttribute('style:width', 'table');
        $xmlWriter->writeAttribute('style:rel-width', 100);
        $xmlWriter->writeAttribute('table:align', 'center');
        $xmlWriter->endElement(); // style:table-properties
        $xmlWriter->endElement(); // style:style
    }
}
