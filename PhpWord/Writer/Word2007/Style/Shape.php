<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Style;

/**
 * Shape style writer
 *
 * @since 0.12.0
 */
class Shape extends AbstractStyle
{
    /**
     * Write style.
     *
     * @return void
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\Shape) {
            return;
        }

        $xmlWriter = $this->getXmlWriter();

        $childStyles = array('Frame', 'Fill', 'Outline', 'Shadow', 'Extrusion');
        foreach ($childStyles as $childStyle) {
            $method = "get{$childStyle}";
            $this->writeChildStyle($xmlWriter, $childStyle, $style->$method());
        }
    }
}
