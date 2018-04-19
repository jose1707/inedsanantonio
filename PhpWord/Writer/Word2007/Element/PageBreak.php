<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Element;

/**
 * PageBreak element writer
 *
 * @since 0.10.0
 */
class PageBreak extends AbstractElement
{
    /**
     * Write element.
     *
     * @usedby \PhpOffice\PhpWord\Writer\Word2007\Element\AbstractElement::startElementP()
     * @return void
     */
    public function write()
    {
        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->startElement('w:p');
        $xmlWriter->startElement('w:r');
        $xmlWriter->startElement('w:br');
        $xmlWriter->writeAttribute('w:type', 'page');
        $xmlWriter->endElement(); // w:br
        $xmlWriter->endElement(); // w:r
        $xmlWriter->endElement(); // w:p
    }
}
