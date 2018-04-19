<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Part;

/**
 * Word2007 part relationship writer: word/_rels/(header|footer|footnotes|endnotes)*.xml.rels
 *
 * @since 0.11.0
 */
class RelsPart extends Rels
{
    /**
     * Media relationships
     *
     * @var array
     */
    private $media = array();

    /**
     * Write part
     *
     * @return string
     */
    public function write()
    {
        $xmlWriter = $this->getXmlWriter();
        $this->writeRels($xmlWriter, array(), $this->media);

        return $xmlWriter->getData();
    }

    /**
     * Set media
     *
     * @param array $media
     * @return self
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }
}
