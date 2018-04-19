<?php

namespace PhpOffice\PhpWord\Writer\ODText\Element;

use PhpOffice\PhpWord\Exception\Exception;

/**
 * Text element writer
 *
 * @since 0.10.0
 */
class Text extends AbstractElement
{
    /**
     * Write element
     */
    public function write()
    {
        $xmlWriter = $this->getXmlWriter();
        $element = $this->getElement();
        if (!$element instanceof \PhpOffice\PhpWord\Element\Text) {
            return;
        }
        $fontStyle = $element->getFontStyle();
        $paragraphStyle = $element->getParagraphStyle();

        // @todo Commented for TextRun. Should really checkout this value
        // $fStyleIsObject = ($fontStyle instanceof Font) ? true : false;
        $fStyleIsObject = false;

        if ($fStyleIsObject) {
            // Don't never be the case, because I browse all sections for cleaning all styles not declared
            throw new Exception('PhpWord : $fStyleIsObject wouldn\'t be an object');
        } else {
            if (!$this->withoutP) {
                $xmlWriter->startElement('text:p'); // text:p
            }
            if (empty($fontStyle)) {
                if (empty($paragraphStyle)) {
                    $xmlWriter->writeAttribute('text:style-name', 'P1');
                } elseif (is_string($paragraphStyle)) {
                    $xmlWriter->writeAttribute('text:style-name', $paragraphStyle);
                }
                $xmlWriter->writeRaw($element->getText());
            } else {
                if (empty($paragraphStyle)) {
                    $xmlWriter->writeAttribute('text:style-name', 'Standard');
                } elseif (is_string($paragraphStyle)) {
                    $xmlWriter->writeAttribute('text:style-name', $paragraphStyle);
                }
                // text:span
                $xmlWriter->startElement('text:span');
                if (is_string($fontStyle)) {
                    $xmlWriter->writeAttribute('text:style-name', $fontStyle);
                }
                $xmlWriter->writeRaw($element->getText());
                $xmlWriter->endElement();
            }
            if (!$this->withoutP) {
                $xmlWriter->endElement(); // text:p
            }
        }
    }
}
