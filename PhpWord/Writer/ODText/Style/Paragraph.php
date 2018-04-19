<?php

namespace PhpOffice\PhpWord\Writer\ODText\Style;

/**
 * Font style writer
 *
 * @since 0.10.0
 */
class Paragraph extends AbstractStyle
{
    /**
     * Write style.
     *
     * @return void
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\Paragraph) {
            return;
        }
        $xmlWriter = $this->getXmlWriter();

        $marginTop = is_null($style->getSpaceBefore()) ? '0' : round(17.6 / $style->getSpaceBefore(), 2);
        $marginBottom = is_null($style->getSpaceAfter()) ? '0' : round(17.6 / $style->getSpaceAfter(), 2);

        $xmlWriter->startElement('style:style');
        $xmlWriter->writeAttribute('style:name', $style->getStyleName());
        $xmlWriter->writeAttribute('style:family', 'paragraph');
        if ($style->isAuto()) {
            $xmlWriter->writeAttribute('style:parent-style-name', 'Standard');
            $xmlWriter->writeAttribute('style:master-page-name', 'Standard');
        }

        $xmlWriter->startElement('style:paragraph-properties');
        if ($style->isAuto()) {
            $xmlWriter->writeAttribute('style:page-number', 'auto');
        } else {
            $xmlWriter->writeAttribute('fo:margin-top', $marginTop . 'cm');
            $xmlWriter->writeAttribute('fo:margin-bottom', $marginBottom . 'cm');
            $xmlWriter->writeAttribute('fo:text-align', $style->getAlign());
        }
        $xmlWriter->endElement(); //style:paragraph-properties

        $xmlWriter->endElement(); //style:style
    }
}
