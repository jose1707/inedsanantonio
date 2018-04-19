<?php

namespace PhpOffice\PhpWord\Writer\Word2007\Element;

use PhpOffice\PhpWord\Element\Chart as ChartElement;

/**
 * Chart element writer
 *
 * @since 0.12.0
 */
class Chart extends AbstractElement
{
    /**
     * Write element.
     *
     * @return void
     */
    public function write()
    {
        $xmlWriter = $this->getXmlWriter();
        $element = $this->getElement();
        if (!$element instanceof ChartElement) {
            return;
        }

        $rId = $element->getRelationId();
        $style = $element->getStyle();

        if (!$this->withoutP) {
            $xmlWriter->startElement('w:p');
        }

        $xmlWriter->startElement('w:r');
        $xmlWriter->startElement('w:drawing');
        $xmlWriter->startElement('wp:inline');

        // EMU
        $xmlWriter->writeElementBlock('wp:extent', array('cx' => $style->getWidth(), 'cy' => $style->getHeight()));
        $xmlWriter->writeElementBlock('wp:docPr', array('id' => $rId, 'name' => "Chart{$rId}"));

        $xmlWriter->startElement('a:graphic');
        $xmlWriter->writeAttribute('xmlns:a', 'http://schemas.openxmlformats.org/drawingml/2006/main');
        $xmlWriter->startElement('a:graphicData');
        $xmlWriter->writeAttribute('uri', 'http://schemas.openxmlformats.org/drawingml/2006/chart');

        $xmlWriter->startElement('c:chart');
        $xmlWriter->writeAttribute('r:id', "rId{$rId}");
        $xmlWriter->writeAttribute('xmlns:c', 'http://schemas.openxmlformats.org/drawingml/2006/chart');
        $xmlWriter->writeAttribute('xmlns:r', 'http://schemas.openxmlformats.org/officeDocument/2006/relationships');
        $xmlWriter->endElement(); // c:chart

        $xmlWriter->endElement(); // a:graphicData
        $xmlWriter->endElement(); // a:graphic

        $xmlWriter->endElement(); // wp:inline
        $xmlWriter->endElement(); // w:drawing
        $xmlWriter->endElement(); // w:r

        $this->endElementP(); // w:p
    }
}
