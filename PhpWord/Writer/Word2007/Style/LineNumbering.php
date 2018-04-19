<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Style;

/**
 * Line numbering style writer
 *
 * @since 0.10.0
 */
class LineNumbering extends AbstractStyle
{
    /**
     * Write style.
     *
     * @return void
     *
     * The w:start seems to be zero based so we have to decrement by one
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\LineNumbering) {
            return;
        }
        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->startElement('w:lnNumType');
        $xmlWriter->writeAttribute('w:start', $style->getStart() - 1);
        $xmlWriter->writeAttribute('w:countBy', $style->getIncrement());
        $xmlWriter->writeAttribute('w:distance', $style->getDistance());
        $xmlWriter->writeAttribute('w:restart', $style->getRestart());
        $xmlWriter->endElement();
    }
}
