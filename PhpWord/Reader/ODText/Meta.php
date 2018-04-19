<?php

namespace PhpOffice\PhpWord\Reader\ODText;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\XMLReader;

/**
 * Meta reader
 *
 * @since 0.11.0
 */
class Meta extends AbstractPart
{
    /**
     * Read meta.xml.
     *
     * @param \PhpOffice\PhpWord\PhpWord $phpWord
     * @return void
     * @todo Process property type
     */
    public function read(PhpWord $phpWord)
    {
        $xmlReader = new XMLReader();
        $xmlReader->getDomFromZip($this->docFile, $this->xmlFile);
        $docProps = $phpWord->getDocInfo();

        $metaNode = $xmlReader->getElement('office:meta');

        // Standard properties
        $properties = array(
            'title'          => 'dc:title',
            'subject'        => 'dc:subject',
            'description'    => 'dc:description',
            'keywords'       => 'meta:keyword',
            'creator'        => 'meta:initial-creator',
            'lastModifiedBy' => 'dc:creator',
            // 'created'        => 'meta:creation-date',
            // 'modified'       => 'dc:date',
        );
        foreach ($properties as $property => $path) {
            $method = "set{$property}";
            $propertyNode = $xmlReader->getElement($path, $metaNode);
            if ($propertyNode !== null && method_exists($docProps, $method)) {
                $docProps->$method($propertyNode->nodeValue);
            }
        }

        // Custom properties
        $propertyNodes = $xmlReader->getElements('meta:user-defined', $metaNode);
        foreach ($propertyNodes as $propertyNode) {
            $property = $xmlReader->getAttribute('meta:name', $propertyNode);

            // Set category, company, and manager property
            if (in_array($property, array('Category', 'Company', 'Manager'))) {
                $method = "set{$property}";
                $docProps->$method($propertyNode->nodeValue);

            // Set other custom properties
            } else {
                $docProps->setCustomProperty($property, $propertyNode->nodeValue);
            }
        }
    }
}
