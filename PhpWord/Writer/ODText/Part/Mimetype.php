<?php


namespace PhpOffice\PhpWord\Writer\ODText\Part;

/**
 * ODText mimetype part writer: mimetype
 */
class Mimetype extends AbstractPart
{
    /**
     * Write part
     *
     * @return string
     */
    public function write()
    {
        return 'application/vnd.oasis.opendocument.text';
    }
}
