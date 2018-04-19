<?php



namespace PhpOffice\PhpWord\Writer\HTML\Element;

/**
 * TextRun element HTML writer
 *
 * @since 0.10.0
 */
class TextRun extends Text
{
    /**
     * Write text run
     *
     * @return string
     */
    public function write()
    {
        $content = '';

        $content .= $this->writeOpening();
        $writer = new Container($this->parentWriter, $this->element);
        $content .= $writer->write();
        $content .= $this->writeClosing();

        return $content;
    }
}
