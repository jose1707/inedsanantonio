<?php


namespace PhpOffice\PhpWord\Writer\RTF\Element;

/**
 * TextRun element RTF writer
 *
 * @since 0.10.0
 */
class TextRun extends AbstractElement
{
    /**
     * Write element
     *
     * @return string
     */
    public function write()
    {
        $writer = new Container($this->parentWriter, $this->element);

        $content = '';
        $content .= $this->writeOpening();
        $content .= '{';
        $content .= $writer->write();
        $content .= '}';
        $content .= $this->writeClosing();

        return $content;
    }
}
