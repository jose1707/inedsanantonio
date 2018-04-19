<?php


namespace PhpOffice\PhpWord\Writer\RTF\Element;

/**
 * TextBreak element RTF writer
 *
 * @since 0.10.0
 */
class TextBreak extends AbstractElement
{
    /**
     * Write element
     *
     * @return string
     */
    public function write()
    {
        /** @var \PhpOffice\PhpWord\Writer\RTF $parentWriter Type hint */
        $parentWriter = $this->parentWriter;
        $parentWriter->setLastParagraphStyle();

        return '\pard\par' . PHP_EOL;
    }
}
