<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Part;

/**
 * Word2007 extended document properties part writer: docProps/app.xml
 *
 * @since 0.11.0
 */
class DocPropsApp extends AbstractPart
{
    /**
     * Write part
     *
     * @return string
     */
    public function write()
    {
        $phpWord = $this->getParentWriter()->getPhpWord();
        $xmlWriter = $this->getXmlWriter();
        $schema = 'http://schemas.openxmlformats.org/officeDocument/2006/extended-properties';

        $xmlWriter->startDocument('1.0', 'UTF-8', 'yes');
        $xmlWriter->startElement('Properties');
        $xmlWriter->writeAttribute('xmlns', $schema);
        $xmlWriter->writeAttribute('xmlns:vt', 'http://schemas.openxmlformats.org/officeDocument/2006/docPropsVTypes');

        $xmlWriter->writeElement('Application', 'PHPWord');
        $xmlWriter->writeElement('Company', $phpWord->getDocInfo()->getCompany());
        $xmlWriter->writeElement('Manager', $phpWord->getDocInfo()->getManager());

        $xmlWriter->endElement(); // Properties

        return $xmlWriter->getData();
    }
}
