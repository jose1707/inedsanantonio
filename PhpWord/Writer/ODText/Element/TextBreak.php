<?php


namespace PhpOffice\PhpWord\Writer\ODText\Element;

/**
 * TextBreak element writer
 *
 * @since 0.10.0
 */
class TextBreak extends AbstractElement
{
    /**
     * Write element
     */
    public function write()
    {
        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->startElement('text:p');
        $xmlWriter->writeAttribute('text:style-name', 'Standard');
        $xmlWriter->endElement();
    }
}
