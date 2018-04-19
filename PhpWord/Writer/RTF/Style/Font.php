<?php


namespace PhpOffice\PhpWord\Writer\RTF\Style;

use PhpOffice\PhpWord\Style\Font as FontStyle;

/**
 * RTF font style writer
 *
 * @since 0.11.0
 */
class Font extends AbstractStyle
{
    /**
     * @var int Font name index
     */
    private $nameIndex = 0;

    /**
     * @var int Font color index
     */
    private $colorIndex = 0;

    /**
     * Write style
     *
     * @return string
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof FontStyle) {
            return '';
        }

        $content = '';
        $content .= '\cf' . $this->colorIndex;
        $content .= '\f' . $this->nameIndex;

        $size = $style->getSize();
        $content .= $this->getValueIf(is_numeric($size), '\fs' . ($size * 2));

        $content .= $this->getValueIf($style->isBold(), '\b');
        $content .= $this->getValueIf($style->isItalic(), '\i');
        $content .= $this->getValueIf($style->getUnderline() != FontStyle::UNDERLINE_NONE, '\ul');
        $content .= $this->getValueIf($style->isStrikethrough(), '\strike');
        $content .= $this->getValueIf($style->isSuperScript(), '\super');
        $content .= $this->getValueIf($style->isSubScript(), '\sub');

        return $content .  ' ';
    }

    /**
     * Set font name index.
     *
     *
     * @param int $value
     * @return void
     */
    public function setNameIndex($value = 0)
    {
        $this->nameIndex = $value;
    }

    /**
     * Set font color index.
     *
     * @param int $value
     * @return void
     */
    public function setColorIndex($value = 0)
    {
        $this->colorIndex = $value;
    }
}
