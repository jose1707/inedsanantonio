<?php


namespace PhpOffice\PhpWord\Writer;

use PhpOffice\PhpWord\Media;
use PhpOffice\PhpWord\PhpWord;

/**
 * ODText writer
 *
 * @since 0.7.0
 */
class ODText extends AbstractWriter implements WriterInterface
{
    /**
     * Create new ODText writer
     *
     * @param \PhpOffice\PhpWord\PhpWord $phpWord
     */
    public function __construct(PhpWord $phpWord = null)
    {
        // Assign PhpWord
        $this->setPhpWord($phpWord);

        // Create parts
        $this->parts = array(
            'Mimetype'  => 'mimetype',
            'Content'   => 'content.xml',
            'Meta'      => 'meta.xml',
            'Styles'    => 'styles.xml',
            'Manifest'  => 'META-INF/manifest.xml',
        );
        foreach (array_keys($this->parts) as $partName) {
            $partClass = get_class($this) . '\\Part\\' . $partName;
            if (class_exists($partClass)) {
                /** @var $partObject \PhpOffice\PhpWord\Writer\ODText\Part\AbstractPart Type hint */
                $partObject = new $partClass();
                $partObject->setParentWriter($this);
                $this->writerParts[strtolower($partName)] = $partObject;
            }
        }

        // Set package paths
        $this->mediaPaths = array('image' => 'Pictures/');
    }

    /**
     * Save PhpWord to file.
     *
     * @param string $filename
     * @return void
     */
    public function save($filename = null)
    {
        $filename = $this->getTempFile($filename);
        $zip = $this->getZipArchive($filename);

        // Add section media files
        $sectionMedia = Media::getElements('section');
        if (!empty($sectionMedia)) {
            $this->addFilesToPackage($zip, $sectionMedia);
        }

        // Write parts
        foreach ($this->parts as $partName => $fileName) {
            if ($fileName != '') {
                $zip->addFromString($fileName, $this->getWriterPart($partName)->write());
            }
        }

        // Close zip archive and cleanup temp file
        $zip->close();
        $this->cleanupTempFile();
    }
}
