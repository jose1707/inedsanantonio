<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Style;

/**
 * Row style writer
 *
 * @since 0.11.0
 */
class Row extends AbstractStyle
{
    /**
     * @var int Row height
     */
    private $height;

    /**
     * Write style.
     *
     * @return void
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\Row) {
            return;
        }

        $xmlWriter = $this->getXmlWriter();
        $xmlWriter->startElement('w:trPr');

        if ($this->height !== null) {
            $xmlWriter->startElement('w:trHeight');
            $xmlWriter->writeAttribute('w:val', $this->height);
            $xmlWriter->writeAttribute('w:hRule', ($style->isExactHeight() ? 'exact' : 'atLeast'));
            $xmlWriter->endElement();
        }
        $xmlWriter->writeElementIf($style->isTblHeader(), 'w:tblHeader', 'w:val', '1');
        $xmlWriter->writeElementIf($style->isCantSplit(), 'w:cantSplit', 'w:val', '1');

        $xmlWriter->endElement(); // w:trPr
    }

    /**
     * Set height.
     *
     * @param int $value
     * @return void
     */
    public function setHeight($value = null)
    {
        $this->height = $value;
    }
}
