<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Element;

/**
 * Link element writer
 *
 * @since 0.10.0
 */
class Link extends Text
{
    /**
     * Write link element.
     *
     * @return void
     */
    public function write()
    {
        $xmlWriter = $this->getXmlWriter();
        $element = $this->getElement();
        if (!$element instanceof \PhpOffice\PhpWord\Element\Link) {
            return;
        }

        $rId = $element->getRelationId() + ($element->isInSection() ? 6 : 0);

        $this->startElementP();

        $xmlWriter->startElement('w:hyperlink');
        if ($element->isInternal()) {
            $xmlWriter->writeAttribute('w:anchor', $element->getSource());
        } else {
            $xmlWriter->writeAttribute('r:id', 'rId' . $rId);
        }
        $xmlWriter->writeAttribute('w:history', '1');
        $xmlWriter->startElement('w:r');

        $this->writeFontStyle();

        $xmlWriter->startElement('w:t');
        $xmlWriter->writeAttribute('xml:space', 'preserve');
        $xmlWriter->writeRaw($element->getText());
        $xmlWriter->endElement(); // w:t
        $xmlWriter->endElement(); // w:r
        $xmlWriter->endElement(); // w:hyperlink

        $this->endElementP(); // w:p
    }
}
