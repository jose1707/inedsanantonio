<?php


namespace PhpOffice\PhpWord\Writer\ODText\Part;

use PhpOffice\PhpWord\Media;

/**
 * ODText manifest part writer: META-INF/manifest.xml
 */
class Manifest extends AbstractPart
{
    /**
     * Write part
     *
     * @return string
     */
    public function write()
    {
        $parts = array('content.xml', 'meta.xml', 'styles.xml');
        $xmlWriter = $this->getXmlWriter();

        $xmlWriter->startDocument('1.0', 'UTF-8');
        $xmlWriter->startElement('manifest:manifest');
        $xmlWriter->writeAttribute('manifest:version', '1.2');
        $xmlWriter->writeAttribute('xmlns:manifest', 'urn:oasis:names:tc:opendocument:xmlns:manifest:1.0');

        $xmlWriter->startElement('manifest:file-entry');
        $xmlWriter->writeAttribute('manifest:media-type', 'application/vnd.oasis.opendocument.text');
        $xmlWriter->writeAttribute('manifest:full-path', '/');
        $xmlWriter->writeAttribute('manifest:version', '1.2');
        $xmlWriter->endElement();

        // Parts
        foreach ($parts as $part) {
            $xmlWriter->startElement('manifest:file-entry');
            $xmlWriter->writeAttribute('manifest:media-type', 'text/xml');
            $xmlWriter->writeAttribute('manifest:full-path', $part);
            $xmlWriter->endElement();
        }

        // Media files
        $media = Media::getElements('section');
        foreach ($media as $medium) {
            if ($medium['type'] == 'image') {
                $xmlWriter->startElement('manifest:file-entry');
                $xmlWriter->writeAttribute('manifest:media-type', $medium['imageType']);
                $xmlWriter->writeAttribute('manifest:full-path', 'Pictures/' . $medium['target']);
                $xmlWriter->endElement();
            }
        }

        $xmlWriter->endElement(); // manifest:manifest

        return $xmlWriter->getData();
    }
}
