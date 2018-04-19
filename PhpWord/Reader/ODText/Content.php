<?php


namespace PhpOffice\PhpWord\Reader\ODText;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\XMLReader;

/**
 * Content reader
 *
 * @since 0.10.0
 */
class Content extends AbstractPart
{
    /**
     * Read content.xml.
     *
     * @param \PhpOffice\PhpWord\PhpWord $phpWord
     * @return void
     */
    public function read(PhpWord $phpWord)
    {
        $xmlReader = new XMLReader();
        $xmlReader->getDomFromZip($this->docFile, $this->xmlFile);

        $nodes = $xmlReader->getElements('office:body/office:text/*');
        if ($nodes->length > 0) {
            $section = $phpWord->addSection();
            foreach ($nodes as $node) {
                // $styleName = $xmlReader->getAttribute('text:style-name', $node);
                switch ($node->nodeName) {

                    case 'text:h': // Heading
                        $depth = $xmlReader->getAttribute('text:outline-level', $node);
                        $section->addTitle($node->nodeValue, $depth);
                        break;

                    case 'text:p': // Paragraph
                        $section->addText($node->nodeValue);
                        break;

                    case 'text:list': // List
                        $listItems = $xmlReader->getElements('text:list-item/text:p', $node);
                        foreach ($listItems as $listItem) {
                            // $listStyleName = $xmlReader->getAttribute('text:style-name', $listItem);
                            $section->addListItem($listItem->nodeValue, 0);
                        }
                        break;
                }
            }
        }
    }
}
