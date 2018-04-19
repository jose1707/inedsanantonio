<?php

namespace PhpOffice\PhpWord\Writer\PDF;

use PhpOffice\PhpWord\Writer\WriterInterface;

/**
 * MPDF writer
 *
 * @link http://www.mpdf1.com/
 * @since 0.11.0
 */
class MPDF extends AbstractRenderer implements WriterInterface
{
    /**
     * Name of renderer include file
     *
     * @var string
     */
    protected $includeFile = 'mpdf.php';

    /**
     * Save PhpWord to file.
     *
     * @param string $filename Name of the file to save as
     * @return void
     */
    public function save($filename = null)
    {
        $fileHandle = parent::prepareForSave($filename);

        //  PDF settings
        $paperSize = strtoupper('A4');
        $orientation = strtoupper('portrait');

        //  Create PDF
        $pdf = new \mpdf();
        $pdf->_setPageSize($paperSize, $orientation);
        $pdf->addPage($orientation);

        // Write document properties
        $phpWord = $this->getPhpWord();
        $docProps = $phpWord->getDocInfo();
        $pdf->setTitle($docProps->getTitle());
        $pdf->setAuthor($docProps->getCreator());
        $pdf->setSubject($docProps->getSubject());
        $pdf->setKeywords($docProps->getKeywords());
        $pdf->setCreator($docProps->getCreator());

        $pdf->writeHTML($this->getContent());

        //  Write to file
        fwrite($fileHandle, $pdf->output($filename, 'S'));

        parent::restoreStateAfterSave($fileHandle);
    }
}
