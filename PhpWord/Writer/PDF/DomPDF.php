<?php


namespace PhpOffice\PhpWord\Writer\PDF;

use PhpOffice\PhpWord\Writer\WriterInterface;

/**
 * DomPDF writer
 *
 * @link https://github.com/dompdf/dompdf
 * @since 0.10.0
 */
class DomPDF extends AbstractRenderer implements WriterInterface
{
    /**
     * Name of renderer include file
     *
     * @var string
     */
    protected $includeFile = 'dompdf_config.inc.php';

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
        $paperSize = 'A4';
        $orientation = 'portrait';

        //  Create PDF
        $pdf = new \DOMPDF();
        $pdf->set_paper(strtolower($paperSize), $orientation);
        $pdf->load_html($this->getContent());
        $pdf->render();

        //  Write to file
        fwrite($fileHandle, $pdf->output());

        parent::restoreStateAfterSave($fileHandle);
    }
}
