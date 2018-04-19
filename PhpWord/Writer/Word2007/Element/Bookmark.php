<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Element;

/**
 * Bookmark element writer
 *
 * @since 0.12.0
 */
class Bookmark extends AbstractElement
{
    /**
     * Write bookmark element
     */
    public function write()
    {
        $xmlWriter = $this->getXmlWriter();
        $element = $this->getElement();
        if (!$element instanceof \PhpOffice\PhpWord\Element\Bookmark) {
            return;
        }

        $rId = $element->getRelationId();

        $xmlWriter->startElement('w:bookmarkStart');
        $xmlWriter->writeAttribute('w:id', $rId);
        $xmlWriter->writeAttribute('w:name', $element->getName());
        $xmlWriter->endElement();
        
        $xmlWriter->startElement('w:bookmarkEnd');
        $xmlWriter->writeAttribute('w:id', $rId);
        $xmlWriter->endElement();
    }
}
