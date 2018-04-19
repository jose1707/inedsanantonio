<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Element;

/**
 * TextBreak element writer
 *
 * @since 0.10.0
 */
class TextBreak extends Text
{
    /**
     * Write text break element.
     *
     * @return void
     */
    public function write()
    {
        $xmlWriter = $this->getXmlWriter();
        $element = $this->getElement();
        if (!$element instanceof \PhpOffice\PhpWord\Element\TextBreak) {
            return;
        }

        if (!$this->withoutP) {
            $hasStyle = $element->hasStyle();
            $this->startElementP();

            if ($hasStyle) {
                $xmlWriter->startElement('w:pPr');
                $this->writeFontStyle();
                $xmlWriter->endElement(); // w:pPr
            }

            $this->endElementP(); // w:p
        } else {
            $xmlWriter->writeElement('w:br');
        }
    }
}
