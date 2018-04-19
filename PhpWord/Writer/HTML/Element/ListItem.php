<?php


namespace PhpOffice\PhpWord\Writer\HTML\Element;

/**
 * ListItem element HTML writer
 *
 * @since 0.10.0
 */
class ListItem extends AbstractElement
{
    /**
     * Write list item
     *
     * @return string
     */
    public function write()
    {
        if (!$this->element instanceof \PhpOffice\PhpWord\Element\ListItem) {
            return '';
        }

        $text = $this->element->getTextObject()->getText();
        $content = '<p>' . $text . '</p>' . PHP_EOL;

        return $content;
    }
}
