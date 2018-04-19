<?php


namespace PhpOffice\PhpWord\Writer\HTML\Element;

/**
 * TextBreak element HTML writer
 *
 * @since 0.10.0
 */
class TextBreak extends AbstractElement
{
    /**
     * Write text break
     *
     * @return string
     */
    public function write()
    {
        if ($this->withoutP) {
            $content = '<br />' . PHP_EOL;
        } else {
            $content = '<p>&nbsp;</p>' . PHP_EOL;
        }

        return $content;
    }
}
