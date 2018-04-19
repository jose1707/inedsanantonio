<?php


namespace PhpOffice\PhpWord\Writer\HTML\Element;

/**
 * Link element HTML writer
 *
 * @since 0.10.0
 */
class Link extends Text
{
    /**
     * Write link
     *
     * @return string
     */
    public function write()
    {
        if (!$this->element instanceof \PhpOffice\PhpWord\Element\Link) {
            return '';
        }

        $content = '';
        $content .= $this->writeOpening();
        $content .= "<a href=\"{$this->element->getSource()}\">{$this->element->getText()}</a>";
        $content .= $this->writeClosing();

        return $content;
    }
}
