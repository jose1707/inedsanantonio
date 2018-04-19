<?php


namespace PhpOffice\PhpWord\Reader\Word2007;

use PhpOffice\PhpWord\Metadata\DocInfo;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\XMLReader;

/**
 * Custom properties reader
 *
 * @since 0.11.0
 */
class DocPropsCustom extends AbstractPart
{
    /**
     * Read custom document properties.
     *
     * @param \PhpOffice\PhpWord\PhpWord $phpWord
     * @return void
     */
    public function read(PhpWord $phpWord)
    {
        $xmlReader = new XMLReader();
        $xmlReader->getDomFromZip($this->docFile, $this->xmlFile);
        $docProps = $phpWord->getDocInfo();

        $nodes = $xmlReader->getElements('*');
        if ($nodes->length > 0) {
            foreach ($nodes as $node) {
                $propertyName = $xmlReader->getAttribute('name', $node);
                $attributeNode = $xmlReader->getElement('*', $node);
                $attributeType = $attributeNode->nodeName;
                $attributeValue = $attributeNode->nodeValue;
                $attributeValue = DocInfo::convertProperty($attributeValue, $attributeType);
                $attributeType = DocInfo::convertPropertyType($attributeType);
                $docProps->setCustomProperty($propertyName, $attributeValue, $attributeType);
            }
        }
    }
}
