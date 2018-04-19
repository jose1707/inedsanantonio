<?php


namespace PhpOffice\PhpWord\Writer\ODText\Element;

/**
 * Text element writer
 *
 * @since 0.10.0
 */
class Link extends AbstractElement
{
    /**
     * Write element
     */
    public function write()
    {
        $xmlWriter = $this->getXmlWriter();
        $element = $this->getElement();
        if (!$element instanceof \PhpOffice\PhpWord\Element\Link) {
            return;
        }

        if (!$this->withoutP) {
            $xmlWriter->startElement('text:p'); // text:p
        }

        $xmlWriter->startElement('text:a');
        $xmlWriter->writeAttribute('xlink:type', 'simple');
        $xmlWriter->writeAttribute('xlink:href', $element->getSource());
        $xmlWriter->writeRaw($element->getText());
        $xmlWriter->endElement(); // text:a

        if (!$this->withoutP) {
            $xmlWriter->endElement(); // text:p
        }
    }
}
