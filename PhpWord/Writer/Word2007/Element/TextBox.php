<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Element;

use PhpOffice\PhpWord\Writer\Word2007\Style\TextBox as TextBoxStyleWriter;

/**
 * TextBox element writer
 *
 * @since 0.11.0
 */
class TextBox extends Image
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
        if (!$element instanceof \PhpOffice\PhpWord\Element\TextBox) {
            return;
        }
        $style = $element->getStyle();
        $styleWriter = new TextBoxStyleWriter($xmlWriter, $style);

        if (!$this->withoutP) {
            $xmlWriter->startElement('w:p');
            $styleWriter->writeAlignment();
        }

        $xmlWriter->startElement('w:r');
        $xmlWriter->startElement('w:pict');
        $xmlWriter->startElement('v:shape');
        $xmlWriter->writeAttribute('type', '#_x0000_t0202');

        $styleWriter->write();
        $styleWriter->writeBorder();

        $xmlWriter->startElement('v:textbox');
        $styleWriter->writeInnerMargin();

        // TextBox content, serving as a container
        $xmlWriter->startElement('w:txbxContent');
        $containerWriter = new Container($xmlWriter, $element);
        $containerWriter->write();
        $xmlWriter->endElement(); // w:txbxContent

        $xmlWriter->endElement(); // v: textbox

        $xmlWriter->endElement(); // v:shape
        $xmlWriter->endElement(); // w:pict
        $xmlWriter->endElement(); // w:r

        $this->endElementP();
    }
}
