<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Element;

/**
 * Text element writer
 *
 * @since 0.10.0
 */
class Text extends AbstractElement
{
    /**
     * Write text element.
     *
     * @return void
     */
    public function write()
    {
        $xmlWriter = $this->getXmlWriter();
        $element = $this->getElement();
        if (!$element instanceof \PhpOffice\PhpWord\Element\Text) {
            return;
        }

        $this->startElementP();

        $xmlWriter->startElement('w:r');

        $this->writeFontStyle();

        $xmlWriter->startElement('w:t');
        $xmlWriter->writeAttribute('xml:space', 'preserve');
        $xmlWriter->writeRaw($this->getText($element->getText()));
        $xmlWriter->endElement();
        $xmlWriter->endElement(); // w:r

        $this->endElementP(); // w:p
    }
}
