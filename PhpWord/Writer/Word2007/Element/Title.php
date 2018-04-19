<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Element;

/**
 * TextRun element writer
 *
 * @since 0.10.0
 */
class Title extends AbstractElement
{
    /**
     * Write title element.
     *
     * @return void
     */
    public function write()
    {
        $xmlWriter = $this->getXmlWriter();
        $element = $this->getElement();
        if (!$element instanceof \PhpOffice\PhpWord\Element\Title) {
            return;
        }

        $style = $element->getStyle();

        $xmlWriter->startElement('w:p');

        if (!empty($style)) {
            $xmlWriter->startElement('w:pPr');
            $xmlWriter->startElement('w:pStyle');
            $xmlWriter->writeAttribute('w:val', $style);
            $xmlWriter->endElement();
            $xmlWriter->endElement();
        }

        $rId = $element->getRelationId();
        $bookmarkRId = $element->getPhpWord()->addBookmark();

        // Bookmark start for TOC
        $xmlWriter->startElement('w:bookmarkStart');
        $xmlWriter->writeAttribute('w:id', $bookmarkRId);
        $xmlWriter->writeAttribute('w:name', "_Toc{$rId}");
        $xmlWriter->endElement();

        // Actual text
        $xmlWriter->startElement('w:r');
        $xmlWriter->startElement('w:t');
        $xmlWriter->writeRaw($this->getText($element->getText()));
        $xmlWriter->endElement();
        $xmlWriter->endElement();

        // Bookmark end
        $xmlWriter->startElement('w:bookmarkEnd');
        $xmlWriter->writeAttribute('w:id', $bookmarkRId);
        $xmlWriter->endElement();

        $xmlWriter->endElement();
    }
}
