<?php


namespace PhpOffice\PhpWord\Reader;

use PhpOffice\PhpWord\Exception\Exception;

/**
 * Reader abstract class
 *
 * @since 0.8.0
 * @codeCoverageIgnore Abstract class
 */
abstract class AbstractReader implements ReaderInterface
{
    /**
     * Read data only?
     *
     * @var bool
     */
    protected $readDataOnly = true;

    /**
     * File pointer
     *
     * @var bool|resource
     */
    protected $fileHandle;

    /**
     * Read data only?
     *
     * @return bool
     */
    public function isReadDataOnly()
    {
        // return $this->readDataOnly;
        return true;
    }

    /**
     * Set read data only
     *
     * @param bool $value
     * @return self
     */
    public function setReadDataOnly($value = true)
    {
        $this->readDataOnly = $value;
        return $this;
    }

    /**
     * Open file for reading
     *
     * @param string $filename
     * @return resource
     * @throws \PhpOffice\PhpWord\Exception\Exception
     */
    protected function openFile($filename)
    {
        // Check if file exists
        if (!file_exists($filename) || !is_readable($filename)) {
            throw new Exception("Could not open " . $filename . " for reading! File does not exist.");
        }

        // Open file
        $this->fileHandle = fopen($filename, 'r');
        if ($this->fileHandle === false) {
            throw new Exception("Could not open file " . $filename . " for reading.");
        }
    }

    /**
     * Can the current ReaderInterface read the file?
     *
     * @param string $filename
     * @return bool
     */
    public function canRead($filename)
    {
        // Check if file exists
        try {
            $this->openFile($filename);
        } catch (Exception $e) {
            return false;
        }
        if (is_resource($this->fileHandle)) {
            fclose($this->fileHandle);
        }

        return true;
    }

    /**
     * Read data only?
     *
     * @deprecated 0.10.0
     * @codeCoverageIgnore
     */
    public function getReadDataOnly()
    {
        return $this->isReadDataOnly();
    }
}
