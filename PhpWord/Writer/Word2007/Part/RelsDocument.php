<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Part;

/**
 * Word2007 document relationship writer: word/_rels/document.xml.rels
 *
 * @since 0.11.0
 */
class RelsDocument extends Rels
{
    /**
     * Write part
     *
     * @return string
     */
    public function write()
    {
        $xmlRels = array(
            'styles.xml'       => 'officeDocument/2006/relationships/styles',
            'numbering.xml'    => 'officeDocument/2006/relationships/numbering',
            'settings.xml'     => 'officeDocument/2006/relationships/settings',
            'theme/theme1.xml' => 'officeDocument/2006/relationships/theme',
            'webSettings.xml'  => 'officeDocument/2006/relationships/webSettings',
            'fontTable.xml'    => 'officeDocument/2006/relationships/fontTable',
        );
        $xmlWriter = $this->getXmlWriter();

        /** @var \PhpOffice\PhpWord\Writer\Word2007 $parentWriter Type hint */
        $parentWriter = $this->getParentWriter();
        $this->writeRels($xmlWriter, $xmlRels, $parentWriter->getRelationships());

        return $xmlWriter->getData();
    }
}
