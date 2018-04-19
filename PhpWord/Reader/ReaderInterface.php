<?php


namespace PhpOffice\PhpWord\Reader;

/**
 * Reader interface
 *
 * @since 0.8.0
 */
interface ReaderInterface
{
    /**
     * Can the current ReaderInterface read the file?
     *
     * @param  string $filename
     * @return boolean
     */
    public function canRead($filename);

    /**
     * Loads PhpWord from file
     *
     * @param string $filename
     */
    public function load($filename);
}
