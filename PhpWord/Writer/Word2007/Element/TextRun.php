<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Element;

/**
 * TextRun element writer
 *
 * @since 0.10.0
 */
class TextRun extends Text
{
    /**
     * Write textrun element.
     *
     * @return void
     */
    public function write()
    {
        $xmlWriter = $this->getXmlWriter();
        $element = $this->getElement();

        $this->startElementP();

        $containerWriter = new Container($xmlWriter, $element);
        $containerWriter->write();

        $this->endElementP(); // w:p
    }
}
