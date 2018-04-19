<?php


namespace PhpOffice\PhpWord\Writer\ODText\Element;

/**
 * TextRun element writer
 *
 * @since 0.10.0
 */
class TextRun extends AbstractElement
{
    /**
     * Write element
     */
    public function write()
    {
        $xmlWriter = $this->getXmlWriter();
        $element = $this->getElement();

        $xmlWriter->startElement('text:p');

        $containerWriter = new Container($xmlWriter, $element);
        $containerWriter->write();

        $xmlWriter->endElement();
    }
}
