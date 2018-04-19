<?php

namespace PhpOffice\PhpWord\Reader;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\Html as HTMLParser;

/**
 * HTML Reader class
 *
 * @since 0.11.0
 */
class HTML extends AbstractReader implements ReaderInterface
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
            $section = $phpWord->addSection();
            HTMLParser::addHtml($section, file_get_contents($docFile), true);
        } else {
            throw new \Exception("Cannot read {$docFile}.");
        }

        return $phpWord;
    }
}
