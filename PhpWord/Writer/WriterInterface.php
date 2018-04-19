<?php


namespace PhpOffice\PhpWord\Writer;

/**
 * Writer interface
 */
interface WriterInterface
{
    /**
     * Save PhpWord to file
     *
     * @param string $filename
     */
    public function save($filename = null);
}
