<?php

namespace PhpOffice\PhpWord\Writer\Word2007\Element;

/**
 * PreserveText element writer
 *
 * @since 0.10.0
 */
class PreserveText extends Text
{
    /**
     * Write preserve text element.
     *
     * @return void
     */
    public function write()
    {
        $xmlWriter = $this->getXmlWriter();
        $element = $this->getElement();
        if (!$element instanceof \PhpOffice\PhpWord\Element\PreserveText) {
            return;
        }

        $texts = $element->getText();
        if (!is_array($texts)) {
            $texts = array($texts);
        }

        $this->startElementP();

        foreach ($texts as $text) {
            if (substr($text, 0, 1) == '{') {
                $text = substr($text, 1, -1);

                $xmlWriter->startElement('w:r');
                $xmlWriter->startElement('w:fldChar');
                $xmlWriter->writeAttribute('w:fldCharType', 'begin');
                $xmlWriter->endElement();
                $xmlWriter->endElement();

                $xmlWriter->startElement('w:r');

                $this->writeFontStyle();

                $xmlWriter->startElement('w:instrText');
                $xmlWriter->writeAttribute('xml:space', 'preserve');
                $xmlWriter->writeRaw($text);
                $xmlWriter->endElement();
                $xmlWriter->endElement();

                $xmlWriter->startElement('w:r');
                $xmlWriter->startElement('w:fldChar');
                $xmlWriter->writeAttribute('w:fldCharType', 'separate');
                $xmlWriter->endElement();
                $xmlWriter->endElement();

                $xmlWriter->startElement('w:r');
                $xmlWriter->startElement('w:fldChar');
                $xmlWriter->writeAttribute('w:fldCharType', 'end');
                $xmlWriter->endElement();
                $xmlWriter->endElement();
            } else {
                $xmlWriter->startElement('w:r');

                $this->writeFontStyle();

                $xmlWriter->startElement('w:t');
                $xmlWriter->writeAttribute('xml:space', 'preserve');
                $xmlWriter->writeRaw($this->getText($text));
                $xmlWriter->endElement();
                $xmlWriter->endElement();
            }
        }

        $this->endElementP(); // w:p
    }
}
