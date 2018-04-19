<?php


namespace PhpOffice\PhpWord\Writer\HTML\Element;

use PhpOffice\PhpWord\Element\Image as ImageElement;
use PhpOffice\PhpWord\Writer\HTML\Style\Image as ImageStyleWriter;

/**
 * Image element HTML writer
 *
 * @since 0.10.0
 */
class Image extends Text
{
    /**
     * Write image
     *
     * @return string
     */
    public function write()
    {
        if (!$this->element instanceof ImageElement) {
            return '';
        }
        /** @var \PhpOffice\PhpWord\Writer\HTML $parentWriter Type hint */
        $parentWriter = $this->parentWriter;

        $content = '';
        if (!$parentWriter->isPdf()) {
            $imageData = $this->element->getImageStringData(true);
            if ($imageData !== null) {
                $styleWriter = new ImageStyleWriter($this->element->getStyle());
                $style = $styleWriter->write();
                $imageData = 'data:' . $this->element->getImageType() . ';base64,' . $imageData;

                $content .= $this->writeOpening();
                $content .= "<img border=\"0\" style=\"{$style}\" src=\"{$imageData}\"/>";
                $content .= $this->writeClosing();
            }
        }

        return $content;
    }
}
