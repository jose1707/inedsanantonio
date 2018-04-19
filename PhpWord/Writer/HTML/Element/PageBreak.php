<?php


namespace PhpOffice\PhpWord\Writer\HTML\Element;

/**
 * PageBreak element HTML writer
 *
 * @since 0.10.0
 */
class PageBreak extends TextBreak
{
    /**
     * Write page break
     *
     * @since 0.12.0
     *
     * @return string
     */
    public function write()
    {
        /** @var \PhpOffice\PhpWord\Writer\HTML $parentWriter Type hint */
        $parentWriter = $this->parentWriter;
        if ($parentWriter->isPdf()) {
            return '<pagebreak style="page-break-before: always;" pagebreak="true"></pagebreak>';
        }

        return "";
    }
}
