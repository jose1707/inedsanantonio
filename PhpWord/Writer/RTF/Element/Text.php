<?php


namespace PhpOffice\PhpWord\Writer\RTF\Element;

/**
 * Text element RTF writer
 *
 * @since 0.10.0
 */
class Text extends AbstractElement
{
    /**
     * Write element
     *
     * @return string
     */
    public function write()
    {
        /** @var \PhpOffice\PhpWord\Element\Text $element Type hint */
        $element = $this->element;
        $elementClass = str_replace('\\Writer\\RTF', '', get_class($this));
        if (!$element instanceof $elementClass) {
            return '';
        }

        $this->getStyles();

        $content = '';
        $content .= $this->writeOpening();
        $content .= '{';
        $content .= $this->writeFontStyle();
        $content .= $this->writeText($element->getText());
        $content .= '}';
        $content .= $this->writeClosing();

        return $content;
    }
}
