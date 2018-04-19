<?php


namespace PhpOffice\PhpWord\Writer\HTML\Part;

use PhpOffice\PhpWord\Exception\Exception;
use PhpOffice\PhpWord\Writer\AbstractWriter;

/**
 * Abstract HTML part writer
 *
 * @since 0.11.0
 */
abstract class AbstractPart
{
    /**
     * Parent writer
     *
     * @var \PhpOffice\PhpWord\Writer\AbstractWriter
     */
    private $parentWriter;

    /**
     * Write part
     *
     * @return string
     */
    abstract public function write();

    /**
     * Set parent writer.
     *
     * @param \PhpOffice\PhpWord\Writer\AbstractWriter $writer
     * @return void
     */
    public function setParentWriter(AbstractWriter $writer = null)
    {
        $this->parentWriter = $writer;
    }

    /**
     * Get parent writer
     *
     * @return \PhpOffice\PhpWord\Writer\AbstractWriter
     * @throws \PhpOffice\PhpWord\Exception\Exception
     */
    public function getParentWriter()
    {
        if ($this->parentWriter !== null) {
            return $this->parentWriter;
        } else {
            throw new Exception('No parent WriterInterface assigned.');
        }
    }
}
