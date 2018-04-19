<?php


namespace PhpOffice\PhpWord\Writer\HTML\Element;

/**
 * TextRun element HTML writer
 *
 * @since 0.10.0
 */
class Title extends AbstractElement
{
    /**
     * Write heading
     *
     * @return string
     */
    public function write()
    {
        if (!$this->element instanceof \PhpOffice\PhpWord\Element\Title) {
            return '';
        }

        $tag = 'h' . $this->element->getDepth();
        $text = $this->element->getText();
        $content = "<{$tag}>{$text}</{$tag}>" . PHP_EOL;

        return $content;
    }
}
