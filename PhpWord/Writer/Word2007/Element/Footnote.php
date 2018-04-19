<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Element;

/**
 * Footnote element writer
 *
 * @since 0.10.0
 */
class Footnote extends Text
{
    /**
     * Reference type footnoteReference|endnoteReference
     *
     * @var string
     */
    protected $referenceType = 'footnoteReference';

    /**
     * Write element.
     *
     * @return void
     */
    public function write()
    {
        $xmlWriter = $this->getXmlWriter();
        $element = $this->getElement();
        if (!$element instanceof \PhpOffice\PhpWord\Element\Footnote) {
            return;
        }

        $this->startElementP();

        $xmlWriter->startElement('w:r');
        $xmlWriter->startElement('w:rPr');
        $xmlWriter->startElement('w:rStyle');
        $xmlWriter->writeAttribute('w:val', ucfirst($this->referenceType));
        $xmlWriter->endElement(); // w:rStyle
        $xmlWriter->endElement(); // w:rPr
        $xmlWriter->startElement("w:{$this->referenceType}");
        $xmlWriter->writeAttribute('w:id', $element->getRelationId());
        $xmlWriter->endElement(); // w:$referenceType
        $xmlWriter->endElement(); // w:r

        $this->endElementP(); // w:p
    }
}
