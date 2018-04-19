<?php


namespace PhpOffice\PhpWord\Writer\RTF\Element;

/**
 * Link element RTF writer
 *
 * @since 0.11.0
 */
class Link extends AbstractElement
{
    /**
     * Write element
     *
     * @return string
     */
    public function write()
    {
        if (!$this->element instanceof \PhpOffice\PhpWord\Element\Link) {
            return '';
        }

        $this->getStyles();

        $content = '';
        $content .= $this->writeOpening();
        $content .= '{\field {\*\fldinst {HYPERLINK "' . $this->element->getSource() . '"}}{\\fldrslt {';
        $content .= $this->writeFontStyle();
        $content .= $this->writeText($this->element->getText());
        $content .= '}}}';
        $content .= $this->writeClosing();

        return $content;
    }
}
