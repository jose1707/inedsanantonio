<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Part;

use PhpOffice\PhpWord\Exception\Exception;
use PhpOffice\PhpWord\Shared\XMLWriter;
use PhpOffice\PhpWord\Writer\AbstractWriter;

/**
 * Word2007 writer part abstract class
 */
abstract class AbstractPart
{
    /**
     * Parent writer
     *
     * @var \PhpOffice\PhpWord\Writer\AbstractWriter
     */
    protected $parentWriter;

    /**
     * @var string Date format
     */
    protected $dateFormat = 'Y-m-d\TH:i:sP';

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
        if (!is_null($this->parentWriter)) {
            return $this->parentWriter;
        } else {
            throw new Exception('No parent WriterInterface assigned.');
        }
    }

    /**
     * Get XML Writer
     *
     * @return \PhpOffice\PhpWord\Shared\XMLWriter
     */
    protected function getXmlWriter()
    {
        $useDiskCaching = false;
        if (!is_null($this->parentWriter)) {
            if ($this->parentWriter->isUseDiskCaching()) {
                $useDiskCaching = true;
            }
        }
        if ($useDiskCaching) {
            return new XMLWriter(XMLWriter::STORAGE_DISK, $this->parentWriter->getDiskCachingDirectory());
        } else {
            return new XMLWriter(XMLWriter::STORAGE_MEMORY);
        }
    }
}
