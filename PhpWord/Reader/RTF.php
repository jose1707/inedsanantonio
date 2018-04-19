<?php


namespace PhpOffice\PhpWord\Reader;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Reader\RTF\Document;

/**
 * RTF Reader class
 *
 * @since 0.11.0
 */
class RTF extends AbstractReader implements ReaderInterface
{
    /**
     * Loads PhpWord from file
     *
     * @param string $docFile
     * @throws \Exception
     * @return \PhpOffice\PhpWord\PhpWord
     */
    public function load($docFile)
    {
        $phpWord = new PhpWord();

        if ($this->canRead($docFile)) {
            $doc = new Document();
            $doc->rtf = file_get_contents($docFile);
            $doc->read($phpWord);
        } else {
            throw new \Exception("Cannot read {$docFile}.");
        }

        return $phpWord;
    }
}
