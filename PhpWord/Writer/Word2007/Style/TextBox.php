<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Style;

use PhpOffice\PhpWord\Style\TextBox as TextBoxStyle;

/**
 * TextBox style writer
 *
 * @since 0.11.0
 */
class TextBox extends Frame
{
    /**
     * Writer inner margin.
     *
     * @return void
     */
    public function writeInnerMargin()
    {
        $style = $this->getStyle();
        if (!$style instanceof TextBoxStyle || !$style->hasInnerMargins()) {
            return;
        }

        $xmlWriter = $this->getXmlWriter();
        $margins = implode(', ', $style->getInnerMargin());

        $xmlWriter->writeAttribute('inset', $margins);
    }

    /**
     * Writer border.
     *
     * @return void
     */
    public function writeBorder()
    {
        $style = $this->getStyle();
        if (!$style instanceof TextBoxStyle) {
            return;
        }
        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->startElement('v:stroke');
        $xmlWriter->writeAttributeIf($style->getBorderSize() !== null, 'weight', $style->getBorderSize() . 'pt');
        $xmlWriter->writeAttributeIf($style->getBorderColor() !== null, 'color', $style->getBorderColor());
        $xmlWriter->endElement(); // v:stroke
    }
}
